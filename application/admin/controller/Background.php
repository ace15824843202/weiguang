<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;

class Background extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
        $list = Db::table('background')->paginate(2,false);
        //var_dump($list);
        $this->assign('list',$list);
        return view();
    }
    public function delete(){
    	$id = input('id');
    	$res = Db::table("background")->where("id",$id)->delete();

    	if($res){
    		$this->success("删除成功","background/index");

    	}else{
    		$this->error("删除失败","background/index");
    	}
    }

    public function add(){
        if (request()->isGet()) {
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');
            //var_dump($param);
            $res = Db::table('background')->insert($param);
            if($res){
                $this->success("添加成功","background/index");

            }else{
                $this->error("添加失败","background/index");
            }
        }
    }
    public function upload(){
    
       upload();

    }
     public function edit(){
        if (request()->isGet()) {
            $id=input('id');
            $data = Db::table('background')->where('id',$id)->find();
            $this->assign('data',$data);
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');
            $res = Db::table('background')->where('id',$param['id'])->update($param);
            if($res){
                $this->success("修改成功","background/index");

            }else{
                $this->error("修改失败","background/index");
            }

        }
    }


}
