<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;

class Banner extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
        //paginate(每页显示条数,是否是简单模式)(必须是bootstrap搭建的分页才有效)
        $list = Db::table('banner')->paginate(2,false);
        //var_dump($list);
        $this->assign('list',$list);
        return view();
    }
    public function delete(){
    	$id = input('id');
    	$res = Db::table("banner")->where("id",$id)->delete();

    	if($res){
    		$this->success("删除成功","banner/index");
            

    	}else{
    		$this->error("删除失败","banner/index");
    	}
    }

    public function add(){
        if (request()->isGet()) {
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');
            $param['addtime']=date('Y-m-d H:i:s');
            //var_dump($param);
            $res = Db::table('banner')->insert($param);
            if($res){
                $this->success("添加成功","banner/index");

            }else{
                $this->error("添加失败","banner/index");
            }
        }
    }
    public function upload(){
        upload();

    }
     public function edit(){
        if (request()->isGet()) {
            $id=input('id');
            $data = Db::table('banner')->where('id',$id)->find();
            $this->assign('data',$data);
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');
            $res = Db::table('banner')->where('id',$param['id'])->update($param);
            if($res){
                $this->success("修改成功","banner/index");

            }else{
                $this->error("修改失败","banner/index");
            }

        }
    }


}
