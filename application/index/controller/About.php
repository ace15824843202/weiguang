<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class About extends Controller
{
    public function index()
    {	
    	

        $about = Db::table("about")->where("status",1)->find();

        //导航
       // 导航栏
        $nav = Db::table('top_type')->where('pid',0)->order('order')->select();
        $this->assign('nav',$nav);
        $controller = strtolower(request()->controller());
        $this->assign('controller',$controller);

        //图片


        // var_dump($about['content']);

          $title ="微光咨询_关于我们";
         
          $temp=mt_rand(1,4);
          $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
          $content = $about['content']; //文章内容

          preg_match_all($pattern,$content,$matchContent);


          // var_dump($matchContent);

          // die();


          if(isset($matchContent[1][0])){
            $pic1 = $matchContent[1][0];

          }else{

            $pic1= "/static/images/J14.jpg";
          }


          if(isset($matchContent[1][1])){
            $pic2 = $matchContent[1][1];

          }else{

            $pic2= "/static/images/J16.jpg";
          }

           if(isset($matchContent[1][2])){
            $pic3 = $matchContent[1][2];

          }else{

           $pic3= "/static/images/J15.jpg";
          }

           if(isset($matchContent[1][3])){
            $pic4 = $matchContent[1][3];

          }else{

            $pic4= "/static/images/J17.jpg";
          }

           

           // var_dump($pic1,$pic2,$pic3,$pic4);

           // die();

           // var_dump($matchContent[0]);

           // die();

           // var_dump($about['content']);

           for ($i=0; $i <count($matchContent[0]) ; $i++) { 
               $about['content'] = str_replace($matchContent[0][$i],"",$about['content']);
           }



        $this->assign('title',$title);
        $this->assign('pic1',$pic1);
        $this->assign('pic2',$pic2);
        $this->assign('pic3',$pic3);
        $this->assign('pic4',$pic4);
        $this->assign('about',$about);
        $this->assign('content',$about['content']);
        $this->assign("index",4);
        return view();
    }


}
