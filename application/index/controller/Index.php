<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
    	// 导航栏
    	$nav = Db::table('top_type')->where('pid',0)->order('order')->select();
    	$this->assign('nav',$nav);
    	$controller = strtolower(request()->controller());
    	$this->assign('controller',$controller);

    	//banner图
    	$banner = Db::table('banner')->select();
    	$count = Db::table('banner')->count();//图片个数
    	$this->assign('banner',$banner);
    	$this->assign('count',$count);
    	
    	//背景图
    	$bg = Db::table('background')->find();
    	$this->assign('bg',$bg);
    	

    	//最新热文
    	$article = Db::table('article_list')->where('type_id',4)->select();
    	$this->assign('article',$article);
    	// var_dump($article);
    	// die();
        //关于我们
         $about = Db::table("about")->where("status",1)->find();
         $this->assign('about',$about); 

        return view();
    }
}
