<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Bigshot extends Controller
{
    public function index()
    {	  

        //导航
       $nav = Db::table("top_type")->where("pid",0)->order("order asc")->select();
       $controller = strtolower(request()->controller());
      $this->assign('controller',$controller);

        //获取参数
        $request =request()->param();

        
        $where=[];
        $keywords="";
        $keywordComplex=[];
        if(!empty($request['keyword'])){
            $keywords = $request['keyword'];

            $keywordComplex['name|id|expire|zizhi|desc|goodat|group|workflow|language|ctat|cost'] = ['like', "%$keywords%"];
        }

        
        //有擅长领域  1   filed  123
        $lingyu = [];
        $fields="";
        if(!empty($request['field'])){

         $fields=  $request['field']; 
         $lingyu['field'] = ["like","%$fields%"] ;   

        }

          $nianling = [];
          $ages="";
         if(!empty($request['age'])){
              $ages =$request['age'];

              $nianling['expire'] = ["=",$ages];

        }


        $difang = [];
        $areas="";
         if(!empty($request['area'])){
              $areas = $request['area'];
             $difang['area'] = ['=', $areas];;

        }
        

    	   //顶级分类
         $list = Db::table("top_type")->where("pid",0)->order("order asc")->select();

         //显示页码
         $show = 2;

    
        //大咖列表

        $article = Db::table("bigshot")->where($nianling)->where($lingyu)->where($where)->where($difang)->where($keywordComplex)->paginate($show,false,['query'=>request()->param(),"type"=>"Bootstrap2"]); 
     
        
        //关于我们
        $about = Db::table("about")->where("status",1)->find();


        //搜索
        //擅长领域
        $fielda = Db::table("work_field")->select();

        //所在区域
        $areaa = Db::table("work_area")->select();

        //从业年限

        $title = "微光咨询_资讯大咖";

        $this->assign('title',$title);
        $this->assign('keywords',$keywords);
        $this->assign('fields',$fields);
        $this->assign('areas',$areas);
        $this->assign('ages',$ages);
         $this->assign('field',$fielda);
         $this->assign('area',$areaa);

        $this->assign('about',$about);
        $this->assign('list',$list);
        $this->assign('ceshi',$article);
         $this->assign('page',$article->render());
        $this->assign("index",3);
        $this->assign("nav",$nav);

        return view();

    }


    public function detail(){

         
          //导航
           $nav = Db::table("top_type")->where("pid",0)->order("order asc")->select();
           $controller = strtolower(request()->controller());
          $this->assign('controller',$controller);

          $id = input("id");
          $info = Db::table("bigshot")->where("id",$id)->find();
          //关于我们
          $about = Db::table("about")->where("status",1)->find();
          $field = Db::table("work_field")->select();
          

          $title = "微光咨询_资讯大咖";
          $this->assign('title',$title);
          $this->assign('info',$info);
          $this->assign('field',$field);
          $this->assign('nav',$nav);
          $this->assign('about',$about);
          $this->assign("index",2);
          return view();


    }


}
