<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;
class User extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
       $list = Db::table("tp_roles")->alias('r')->join('user_code u','u.role_id=r.id','left')->paginate(2,false);
       $this->assign('list',$list);
        return view();
    }
 
    public function delete(){
    	$id = input('id');
        $res = Db::table("user_code")->where("id",$id)->delete();
        if($res){
            $this->success("删除成功","user/index");
    

        }else{
            $this->error("删除失败","user/index");
        }
        
    }
// 员工添加

    public function add(){
        if (request()->isGet()) {
            $list = Db::table("tp_roles")->where("status",1)->select();
            
            $this->assign('list',$list);
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');
            $param['user_pwd']=md5($param['user_pwd']);
            $param['user_img']='user.png';
            // var_dump($param);
            // die();
            $res = Db::table('user_code')->insert($param);
            if ($res) {
                 $this->success("添加成功","user/index");
            }else{
                 $this->error("添加失败");
            }
        
        }
    }
   
     public function edit(){
        if (request()->isGet()) {
            $id=input('id');
            $data = Db::table("tp_roles")->alias('r')->join('user_code u','u.role_id=r.id','left')->where('u.id',$id)->find();
            $this->assign('data',$data);
            //查找启用的角色
            $list = Db::table("tp_roles")->where("status",1)->select();
             $this->assign('list',$list);
            // var_dump($data);
            // die();
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');
            $res1 = Db::table('user_code')->where('id',$param['id'])->update($param);
             if($res1){

                $this->success("修改成功","user/index");

            }else{
                $this->error("修改失败");
            }

        
        }
    }

    // 个人中心
    public function info(){
        if (request()->isGet()) {
            // 获取当前登入的账号信息
            $user_name=session('user_info.user_name');
            $user_info = Db::table('user_code')->where('user_name',$user_name)->find();
            $this->assign('user_info',$user_info);
            return view();

        }elseif(request()->isPost()){
            $param=input('post.');
            $file = request()->file('image');
            
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->validate(['ext'=>'jpg,png,jpeg,gif','size'=>1024*1024])->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                            //上传成功
                            //获取图片名字 
                            $param['user_img'] = $info->getSaveName();

                            //更新session里边的img

                            session("user_info.user_img",$param['user_img']);

                        }else{
                            $this->error($file->getError());
                        }
            }
            if (!$param['user_pwd']=='') {
                $param['user_pwd']=md5($param['user_pwd']);
            }else{
                unset($param['user_pwd']);
                //销毁这个字段
            }

            // var_dump($param);
            // die();
           $res = Db::table('user_code')->where('id',$param['id'])->update($param);
             if($res){
                session("user_info.real_name",$param['real_name']);
                $this->success("修改成功","index/index");

            }else{
                $this->error("修改失败");
            }
        }
        
    }

}
