<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;
class Toptype extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }  public function index()
    {
        //无限级分类
        $list = Db::query("select * from top_type order by concat(path,id)");
        
        $space = str_repeat("&nbsp;",8);
        foreach ($list as $k => $v) {
            if ($v['pid']==0) {
                $list[$k]['name']='┗━'.$v['name'];
            }else{
                $list[$k]['name']=$space.'┗━'.$v['name'];
            }
        }
        //var_dump($list);
        //
        $this->assign('list',$list);
        return view();
    }
    public function delete(){
    	$id = input('id');
        $result = Db::table("top_type")->where("pid",$id)->find();
        if ($result) {
            $this->error("有子导航的导航类名不能进行删除","toptype/index");
        }else{
            $res = Db::table("top_type")->where("id",$id)->delete();
            if($res){
                $this->success("删除成功","banner/index");
                

            }else{
                $this->error("删除失败","banner/index");
            }
        }
    	

    	
    }

    public function add(){
        if (request()->isGet()) {
            $list = Db::table('top_type')->where('pid',0)->select();
            $this->assign('list',$list);
           return view();

        }elseif(request()->isPost()){

            $param = input('post.');
            if ($param['pid']==0) {
                //判断顶级导航的个数
                $count = Db::table('top_type')->where('pid',0)->count();

                if ($count==4) {
                   $this->error('顶级导航名最多4个,请重新添加');
                }
                $param['path']='0,';
            }else{
                $param['path']='0,'.$param['pid'].',';
            }
            
            //var_dump($param);
        
            $res = Db::table('top_type')->insert($param);
            if($res){
                $this->success("添加成功","toptype/index");

            }else{
                $this->error("添加失败","toptype/index");
            }
        }
    }

     public function edit(){
        if (request()->isGet()) {
            $id=input('id');
            $data = Db::table('top_type')->where('id',$id)->find();
            $this->assign('data',$data);
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');

            $res = Db::table('top_type')->where('id',$param['id'])->update($param);
            if($res){
                $this->success("修改成功","toptype/index");

            }else{
                $this->error("修改失败","toptype/index");
            }

        }
    }


}
