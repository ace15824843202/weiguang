<?php
namespace app\admin\controller;
use \think\Controller;
use \think\Db;


class Login extends Controller
{
    public function index()
    {
        return view('./login');
    }

    public function login(){
        $param = input('post.');

        // var_dump($param);
        // die();
         if(!captcha_check($param['code'])){

            $this->error("验证码错误",'login/index');

        }

        $info = Db::table('user_code')->where('user_name',$param['user_name'])->where('status',1)->find();
         //var_dump($info );
       
        if ($info==null) {
             $this->error("此用户不存在,请联系超级管理员");
        }

        if(md5($param['user_pwd'])!=$info['user_pwd']){

            $this->error("密码不正确，请重新输入");

        }else{

            //该账号的身份   

            $result = Db::table("tp_roles")->where("id",$info['role_id'])->find();


            $user_info['role_name'] = $result['role_name'];//员工的角色名称
            $user_info['role_rules'] = $result['role_rules'];//员工的权限
            $user_info['role_id'] = $info['role_id'];//员工的角色id
            $user_info['real_name'] = $info['real_name'];//员工的真实姓名
            $user_info['user_name'] = $param['user_name'];//员工的账号
            $user_info['user_pwd'] = $param['user_pwd'];//员工的密码
            $user_info['user_img'] = $info['user_img'];//员工的头像

            //如果勾选了记住我，存入一个信息
            if (isset($param['remember'])) {
                $user_info['rmb']=$param['remember'];
            }else{
                //如果没有摧毁这个字段
                unset($user_info['rmb']);
            }



            //将该员工的信息存入到seession中

            session("user_info",$user_info);

            //登录的时间
            session("logintime",time());

             $this->success("登录成功，请稍后",'index/index');
        
        }
         //die();
    }
    public function  code(){


        return captcha("",array("length"=>4,"useCurve"=>false,"useNoise"=>false));
        //验证码的 useCurve  是否画混淆曲线 
        //useNoise    是否添加杂点  
    }
    public function loginout(){

         session('user_info',null);


        $this->redirect("index");

    }
   
}
