<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;

class Rules extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
       $list = Db::table("tp_rules")->where("status",1)->order('sort')->select();
       $list=getList($list);
       // var_dump($list);
       // die();
       $this->assign('list',$list);
        return view();
    }
 
    public function delete(){
    	$id = input('id');
         $result = Db::table("tp_rules")->where("pid",$id)->find();
        if ($result) {
            $this->error("有子菜单的菜单不能进行删除","rules/index");
        }else{
            $res = Db::table("tp_rules")->where("id",$id)->delete();
            if($res){
                $this->success("删除成功","rules/index");
                

            }else{
                $this->error("删除失败","rules/index");
            }
        }
    }
// 权限添加

    public function add(){
        if (request()->isGet()) {
            $list = Db::table("tp_rules")->where("status",1)->select();
            $list=getList($list);
            $this->assign('list',$list);
           return view();
        }elseif(request()->isPost()){

            $param = input('post.');
            $res = Db::table('tp_rules')->insert($param);
            if ($res) {
                 $this->success("添加成功","rules/index");
            }else{
                 $this->error("添加失败");
            }
        
        }
    }
   
     public function edit(){
        if (request()->isGet()) {
            $id=input('id');
            // 查找所有权限规则
            $list = Db::table("tp_rules")->where("status",1)->select();
            // var_dump($list);
            // die();
            $list=getList($list);
            $this->assign('list',$list);
            $data =Db::table("tp_rules")->where("id",$id)->find();
            
            $this->assign('data',$data);
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');

            // var_dump($param);
            // die();

            $res1 = Db::table('tp_rules')->where('id',$param['id'])->update($param);
             if($res1){

                $this->success("权限修改成功","rules/index");

            }else{
                $this->error("修改失败");
            }

        
        }
    }


}
