<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;

class Bigshot extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
        //一页显示几条数据  
        $show = 2;
        $list = Db::table("bigshot")->paginate($show,false);
        $area = Db::table("work_area")->select();
        $field = DB::table("work_field")->select();
        $this->assign('list',$list);
        $this->assign('field',$field);
        $this->assign('area',$area);
        $this->assign('page',$list->render());
        return view();
    }
    public function delete(){
    	$id = input('id');
    	$res = Db::table("bigshot")->where("id",$id)->delete();

    	if($res){
    		$this->success("删除成功","bigshot/index");

    	}else{
    		$this->error("删除失败","bigshot/index");
    	}
    }

    public function add(){
        if (request()->isGet()) {
            //查询所有领域
            $field_list = Db::table('work_field')->select();
            $this->assign('field_list',$field_list);
            //查询所有区域
            $area_list = Db::table('work_area')->select();
            $this->assign('area_list',$area_list);
            
           return view();
        }elseif(request()->isPost()){
          
            //第一张图为封面图
          $param = input("post.");
          var_dump($param);
 
          $temp=mt_rand(1,4);
          $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
          $content = $param['content']; //文章内容

          preg_match_all($pattern,$content,$matchContent);
          var_dump($matchContent);
           die();

          if(isset($matchContent[1][0])){
            $article['pic'] = $matchContent[1][0];

          }else{

            $article['pic'] = "/static/images/j11.jpg";
          }
          
          if(isset($param['field'])){
               $bigshot['field'] = implode(",",$param['field']);

          }else{
            $bigshot['field']="";
          }

          $bigshot['name'] = $param['name'];
          $bigshot['expire'] = $param['expire'];
          $bigshot['desc'] = trim($param['desc']);
          $bigshot['goodat'] =trim($param['goodat']);
          $bigshot['group'] = trim($param['group']);
          $bigshot['cost'] = $param['cost'];
          $bigshot['ctat'] = trim($param['ctat']);
          $bigshot['pic'] = $article['pic'];
          $bigshot['language'] = $param['language'];
          $bigshot['zizhi'] = trim($param['zizhi']);
          $bigshot['area'] = $param['area'];

          for ($i=0; $i <count($matchContent[0]) ; $i++) { 
               $param['content'] = str_replace($matchContent[0][$i],"",$param['content']);
           }
          $bigshot['workflow'] = $param['content'];

            // var_dump($bigshot);

            // die();


              $res1 = Db::table("bigshot")->insert($bigshot);
                    if($res1){
                    $this->success('添加成功',"bigshot/index");

                    }else{
                       $this->error("添加失败");
                    }

            }
        
    }
    public function upload(){
    
       upload();

    }
   
    public function edit(){

        if(request()->isGet()){

      
      $id = input("id/d",0);

        if(empty($id)){
          $this->error("缺少参数");

        }

        //查询传递id的数据

        //单条信息
        
        $info = Db::table("bigshot")->where("id",$id)->find();
         //var_dump($info);
         //die();


        $area = Db::table("work_area")->select();


        //当前这条信息所分配的权限

        $role_rules = explode(",",$info['field']);


        // var_dump($role_rules);

       


        $allrule = Db::table("work_field")->select();

        // var_dump($allrule);

        $status = false;

        foreach($allrule as $key=>$val){
          //把所有的权限默认不选中

          $allrule[$key]['checked'] = false;
          // $allrule[$key]

          if(in_array($val['id'], $role_rules)){

            $allrule[$key]["checked"] = true;
            $status= true;
          }

        }




        


        $this->assign("info",$info);
        $this->assign("area",$area);
        $this->assign("allrule",$allrule);
        $this->assign("status",$status);


        return view();


    }elseif(request()->isPost()){
           
            //第一张图为封面图
          $param = input("post.");
          //var_dump($param);



 
          $temp=mt_rand(1,4);
          $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
          $content = $param['content']; //文章内容

          preg_match_all($pattern,$content,$matchContent);


           //var_dump($matchContent);
           //die();
      

         
          

          if(isset($matchContent[1][0])){
            $article['pic'] = $matchContent[1][0];

          }else{

            $article['pic'] = "/static/images/J11.jpg";
          }
          
          if(isset($param['field'])){
               $bigshot['field'] = implode(",",$param['field']);

          }else{
            $bigshot['field']="";
          }

        
          $bigshot['name'] = $param['name'];
          $bigshot['expire'] = $param['expire'];
          $bigshot['desc'] = trim($param['desc']);
          $bigshot['goodat'] =trim($param['goodat']);
          $bigshot['group'] = trim($param['group']);
          $bigshot['cost'] = $param['cost'];
          $bigshot['ctat'] = trim($param['ctat']);
          $bigshot['pic'] = $article['pic'];
          $bigshot['language'] = $param['language'];
          $bigshot['zizhi'] = trim($param['zizhi']);
          $bigshot['area'] = $param['area'];

          for ($i=0; $i <count($matchContent[0]) ; $i++) { 
               $param['content'] = str_replace($matchContent[0][$i],"",$param['content']);
           }
          $bigshot['workflow'] = $param['content'];




            
            // var_dump($bigshot);

            // die();


              $res1 = Db::table("bigshot")->where("id",$param['id'])->update($bigshot);
                    if($res1){
                    $this->success('修改成功',"bigshot/index");

                    }else{
                       $this->error("修改失败");
                    }

            }
        
        
          

           
    }
}
