<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;
class About extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
        $about = Db::table("about")->select();
        $this->assign('about',$about);
        
        return view();

    }
   public function add(){

        if(request()->isGet()){

            
            
            return view();
           

        }elseif(request()->isPost()){


            $param = input("post.");

            //var_dump($param);
            //die();

            $res2 = Db::table("about")->insert($param);
            if($res2){
            $this->success('添加成功',"about/index");

            }else{
               $this->error("添加失败");
            }

           
        
        
              

    }
    }


    public function edit(){

         if(request()->isGet()){

         $id = input("id");

         //当前文章的列表
         $info = Db::table("about")->where("id",$id)->find();

         


         $this->assign('info',$info);
        
        return view();


    }elseif(request()->isPost()){
             $param = input("post.");

            
             

            
              $res = Db::table("about")->where("id",$param['id'])->update($param);
            if($res){
            $this->success('修改成功',"about/index");

            }else{
               $this->error("修改失败");
            }

           
    }


    }


    public function delete(){

        $id = input("id");
        
        
            $res = Db::table("about")->where("id",$id)->delete();

            if($res){
                $this->success("删除成功","about/index");

            }else{
                $this->error("删除失败");
            }


        }

     public function upload(){
        upload();

    }


}
