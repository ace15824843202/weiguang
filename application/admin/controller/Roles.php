<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;
class Roles extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
       $list = Db::table("tp_roles")->paginate(2,false);;
       $this->assign('list',$list);
        return view();
    }
 
    public function delete(){
    	$id = input('id');
        $res = Db::table("tp_roles")->where("id",$id)->delete();
        if($res){
            $this->success("删除成功","roles/index");
    

        }else{
            $this->error("删除失败","roles/index");
        }
        
    }
// 权限添加

    public function add(){
        if (request()->isGet()) {
            $list = Db::table("tp_rules")->where("status",1)->select();
            $list=getTree($list);
            // var_dump($list);
            // die();
            $this->assign('list',$list);
           return view();
        }elseif(request()->isPost()){

            $param = input('post.');
            if (isset($param['role_rules'] )&& is_array($param['role_rules'])) {
                $param['role_rules']=implode(',',$param['role_rules']);
            }
            // var_dump($param);
            // die();
            $res = Db::table('tp_roles')->insert($param);
            if ($res) {
                 $this->success("添加成功","roles/index");
            }else{
                 $this->error("添加失败");
            }
        
        }
    }
   
     public function edit(){
        if (request()->isGet()) {
            $id=input('id');
             $data = Db::table("tp_roles")->where("id",$id)->find();
            $role_rules = [];
            if($data['role_rules']){

                $role_rules = explode(",",$data['role_rules']);

            }

            $allrule = Db::table("tp_rules")->where("status",1)->select();

            foreach ($allrule as $key => $val) {


                //将所有的权限增加一个字段  checked = false
                $allrule[$key]["checked"] = false;


                //判断 准备的修改的这条信息   ID 在权限表中的话   checked字段为true
                if(in_array($val['id'],$role_rules)){
                    $allrule[$key]["checked"] = true;

                }
               
            }
            $allrule = getTree($allrule);
            $this->assign('data',$data);
            $this->assign('allrule',$allrule);
            // var_dump($allrule);
            // var_dump($data);
            // die();
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');

            if (isset($param['role_rules'] )&& is_array($param['role_rules'])) {
                $param['role_rules']=implode(',',$param['role_rules']);
            }

            // var_dump($param);
            // die();

            $res1 = Db::table('tp_roles')->where('id',$param['id'])->update($param);
             if($res1){

                $this->success("角色修改成功","roles/index");

            }else{
                $this->error("修改失败");
            }

        
        }
    }


}
