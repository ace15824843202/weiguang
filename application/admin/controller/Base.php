<?php
namespace app\admin\controller;

use  \think\Controller;

use \think\Db;
class Base  extends Controller
{

public  function  checkTime(){


	$nowtime = time();


	$s_time = session("logintime");


	if($s_time){
		if(($nowtime - $s_time)>3000){

			session("logintime",null);
			session("user_info",null);

			$this->error("登录超时，请重新登录","login/index");

		}else{

			session("logintime",$nowtime);
		}
	}


}


	//基类的初始化方法
    public function _initialize()
    {
       
    	//判断session中是否存入userinfo的信息  

    	$user_info = session("user_info");

    	if(empty($user_info)){
            //该用户没有登录
    		$this->error("请先登录","login/index");
    	}

    	//该用户已经登录


    	$this->checkTime();


    	$rulecondition = [];

    	//判断是否是超级管理员 

    	if($user_info['role_id'] !=1){

    		//证明不是超级管理员

    		$rulecondition['id'] = array("in",$user_info['role_rules']);

    	}

    	//$arr['id'] = 1;

    	$rolerule = Db::table("tp_rules")->where($rulecondition)->order("sort asc")->select()	;


    	//var_dump($rolerule);


    	

    	//侧边栏展示的数据

    	$menu = [];

    	$allow = [];

    	//遍历素有已经分配的权限

    	foreach ($rolerule as $key => $val) {
    		# code...

    		//允许的权限地址  个人中心  
    		$allow[] = $val['rule_address'];//anner/index
            //var_dump($allow);

            // die();
    		if($val['is_menu']==1){

    			//菜单是可以展示的

    			// rule_address  /banner/index
    			$val['url'] = $val['pid']!=0?url($val['rule_address']):"";



    			$menu[] = $val;
    		}
    	}

    	// var_dump($menu);


    	//请求的控制器   banner/index 

    	//用户当前请求的控制器/方法名

    	$nowaction = strtolower(request()->controller()."/".request()->action());



    	// var_dump($nowaction);
// 

    	

    	//验证用户当前访问的控制器/方法  是不是我允许的

    	//不管你是什么权限  首页可以访问
    	$exception = array("index/index");


    	//把allow 特殊的方法 组成一个数组

    	$allowaction = array_merge($exception,$allow);
        // var_dump($allowaction );
        // die();

    	if($user_info['role_id'] !=1){

    		if(!in_array($nowaction,$allowaction)){
    			$this->error("没有权限访问，请联系管理员","index/index");
    		}
    	}


    	$menu = getTree($menu);

    	// var_dump($menu);

    	// die();

    	$this->assign('menu',$menu);





    }


}
