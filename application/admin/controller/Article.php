<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;
class Article extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
        $type_id = input('type_id',4);
        $sort = input('sort','asc');
        //var_dump( $type_id);
        //var_dump( $sort);
        
        //连表查询top_type,article_list表
        $list = Db::table("top_type")->alias("t")->join("article_list a","t.id=a.type_id","right")->where("a.type_id",$type_id)->order("a.addtime",$sort)->paginate(1,false,["query"=>request()->param()]);
        //var_dump( $list);
        //die();
          $this->assign('list',$list);

          //心理阅读的二级导航
            $type = Db::table('top_type')->where('pid',1)->select();
            $this->assign('type',$type);
            $this->assign('type_id',$type_id);
        return view();
    }
    //文章置顶
    public function gotop(){

        $id = input('id');
        $type_id = input('type_id');
        $flag = input('flag'); //0代表要取消置顶 1代表要置顶

        if ($flag==1) {
            //查找此类别下是否已经有置顶文章
            $result = Db::table('article_list')->where('type_id',$type_id)->where('top',1)->find();
            if ($result) {
                $this->error('此类别已经有一个置顶文章，请先取消其它置顶');
            }else{
                 $res=Db::table("article_list")->where('id',$id)->update(['top'=>1]);
                if($res){
                    $this->success("置顶成功","article/index");
                    

                }else{
                    $this->error("置顶失败","article/index");
                }
            }
         }else{

                $res=Db::table("article_list")->where('id',$id)->update(['top'=>'']);
                if($res){
                    $this->success("取消置顶成功","article/index");
                    

                }else{
                    $this->error("取消置顶失败","article/index");
                }

         }
 
    }

    public function delete(){
    	$id = input('id');
        $res1 = Db::table("article_list")->where("id",$id)->delete();
    	
    	if($res1){
            $res2 = Db::table("article_detail")->where("article_id",$id)->delete();
            if ($res2) {
               $this->success("删除成功","article/index");
            
            }
    		
    	}else{
    		$this->error("删除失败","article/index");
    	}
    }
// 文章添加

    public function add(){
        if (request()->isGet()) {
            $list = Db::table('top_type')->where('pid',1)->select();
            $this->assign('list',$list);
           return view();
        }elseif(request()->isPost()){

            $param = input('post.');
           
            //var_dump($param);

        // 插入article_list表
            $list['title']=$param['title'];
            $list['addtime']=date('Y-m-d H:i:s');
            $list['desc']=$param['desc'];
            $list['type_id']=$param['type_id'];
            

        //正则匹配内容中的图片
          $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
          $content = $param['content']; //文章内容

          preg_match_all($pattern, $content,$matchContent);
          //是否匹配到了  

          if(isset($matchContent[1][0])){
            $list['pic']=$matchContent[1][0];
          }else{
            //如果没有匹配到
            // 要使用默认的图片
            $list['pic']= "/uploads/201812110923068509.jpg";

          }
          // var_dump($list);
          //   die();
            $res = Db::table('article_list')->insert($list);
            // 如果article_list表插成功了插article_detail详情表
            if ($res) {
                $list_id=Db::table("article_list")->getLastInsID();
                $detail['article_id']=$list_id;
                $detail['author']=$param['author'];
                $detail['editor']=$param['editor'];
                $detail['content']=$param['content'];

                $res2 = Db::table('article_detail')->insert($detail);
                if ($res2) {
                    $this->success("添加成功","article/index");
                }
            }else{
                 $this->error("添加失败");
            }
        
        }
    }
   
     public function edit(){
        if (request()->isGet()) {
            $id=input('id');
            //导航类别
            $type = Db::table("top_type")->where("pid",1)->order("order asc")->select(); 
            $this->assign('type',$type);
            $data = Db::table("article_list")->alias("l")->join("article_detail d","l.id=d.article_id","left")->where("l.id",$id)->find();
            // var_dump($data);
            // die();
            $this->assign('data',$data);
           return view();
        }elseif(request()->isPost()){
            $param = input('post.');

            // var_dump($param);
            // die();

            $list['title']=$param['title'];
            $list['desc']=$param['desc'];
            $list['type_id']=$param['type_id'];
            

        //正则匹配内容中的图片

        // <img src="">
        // <IMG src="">
        
          $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
          $content = $param['content']; //文章内容

          preg_match_all($pattern, $content,$matchContent);
         $list['pic']=$matchContent[1][0];
          
          // var_dump($list);
          //   die();
            $res = Db::table('article_list')->where('id',$param['id'])->update($list);
            // 如果article_list表修改成功了修改article_detail详情表
                $detail['author']=$param['author'];
                $detail['editor']=$param['editor'];
                $detail['content']=$param['content'];

                $res2 = Db::table('article_detail')->where('article_id',$param['id'])->update($detail);
             if($res2 !==false){

                $this->success("文章修改成功","/index.php/admin/article/index/type_id/".$param['type_id']);

            }else{
                $this->error("修改失败");
            }

        
        }
    }
     public function upload(){
        upload();

    }


}
