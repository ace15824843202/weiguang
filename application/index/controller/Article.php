<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Article extends Controller
{
    public function index()
    {
    	// 导航栏
    	$nav = Db::table('top_type')->where('pid',0)->order('order')->select();
    	$this->assign('nav',$nav);
    	$controller = strtolower(request()->controller());
    	$this->assign('controller',$controller);

        // 心理阅读二级导航
        $mind_nav = Db::table('top_type')->where('pid',1)->limit(6)->order('order')->select();
        $this->assign('mind_nav',$mind_nav);
        $more_nav = Db::table('top_type')->where('pid',1)->limit(6,2)->order('order')->select();
        $this->assign('more_nav',$more_nav);
        
        // 获取选中的二级导航下的文章
        $type_id = input('id',4);
        $article = Db::table('article_list')->where('type_id',$type_id)->order('top desc')->paginate(2,false,['type'=>'bootstrap2']);
        $this->assign('article',$article);
        $this->assign('type_id',$type_id);
        // var_dump($article);
        // die();

        return view();
    }
    public function detail(){
        // 导航栏
        $nav = Db::table('top_type')->where('pid',0)->order('order')->select();
        $this->assign('nav',$nav);
        $controller = strtolower(request()->controller());
        $this->assign('controller',$controller);

        // 心理阅读二级导航
        $mind_nav = Db::table('top_type')->where('pid',1)->limit(6)->order('order')->select();
        $this->assign('mind_nav',$mind_nav);
        $more_nav = Db::table('top_type')->where('pid',1)->limit(6,2)->order('order')->select();
        $this->assign('more_nav',$more_nav);
        // 激活导航的id
        $type_id = input('id',4);
        $this->assign('type_id',$type_id);

        $article_id = input('article_id');
        $this->assign('article_id',$article_id);
        //查找文章详情
        $detail = Db::table('article_list')->alias('a')->join('article_detail d','a.id=d.article_id')->where('a.type_id',$type_id)->where('d.article_id',$article_id)->find();
        $this->assign('detail',$detail);

        // 查找是否有上下篇文章
        // 查找当前分类下的所有文章
        $all_article = Db::table('article_list')->where('type_id',$type_id)->select();
        //var_dump($all_article);
        $n='';
        foreach ($all_article as $k => $v) {
            if ($v['id']== $article_id) {
                $n=$k;
            }
        }
        if (isset($all_article[$n-1])) {
            $pre=$all_article[$n-1];
            $pre['flag']=1;//1代表有上一篇文章
        }else{
            $pre['flag']=0;//0代表有没有上一篇文章
        }
        if (isset($all_article[$n+1])) {
            $next=$all_article[$n+1];
            $next['flag']=1;//1代表有上一篇文章
        }else{
            $next['flag']=0;//0代表有没有上一篇文章
        }
        $this->assign(['pre'=>$pre,'next'=>$next]);
        // var_dump($pre);
        // die();
        return view();

    }
}
