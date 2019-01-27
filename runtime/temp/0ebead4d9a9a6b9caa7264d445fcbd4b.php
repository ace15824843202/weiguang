<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\wamp64\www\tp5\public/../application/index\view\article\index.html";i:1544792044;s:59:"C:\wamp64\www\tp5\application\index\view\common\header.html";i:1544789744;s:59:"C:\wamp64\www\tp5\application\index\view\common\footer.html";i:1544770886;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>微光-首页</title>
    <!-- css -->
    <link rel="stylesheet" href="/static/css/swiper.min.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <!-- js -->
    <script src="/static/js/jquery-1.10.1.min.js"></script>
    <script src="/static/js/swiper.min.js"></script>
    <script src="/static/js/util.js"></script>
</head>
<body>
    <div class="wrap">
        <div class="content">
            <!-- header -->
            <div class="header">
                <div class="head clearfix">
                    <a href="#" class="logo">
                        <img src="/static/images/logo.png" alt="">
                    </a>
                    <ul class="clearfix nav">
                    <?php foreach($nav as $k=>$v): ?>
                        <li>
                            <a href="<?php echo url($v['url'].'/index'); ?>" class="<?php echo $v['url']==$controller?'activea':''; ?>"><?php echo $v['name']; ?></a>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="innerbanner">
                <img src="/static/images/j4.jpg" alt="">
                <div class="inner">
                    <span>心理阅读</span>
                </div>
            </div>
            <div class="innernav">
                <div class="box">
                    <ul class="clearfix">
                    <?php foreach($mind_nav as $k=>$v): ?>
                        <li><a href="<?php echo url('index',['id'=>$v['id']]); ?>" class="<?php echo $v['id']==$type_id?'activea':''; ?>"><?php echo $v['name']; ?></a></li>
                    <?php endforeach; ?>
                        <li class="more">
                            <a href="#">更多分类</a>
                            <div class="secnav">
                                <div class="arrow"></div>
                                <div>
                                <?php foreach($more_nav as $k=>$v): ?>
                                    <a href="<?php echo url('index',['id'=>$v['id']]); ?>" class="<?php echo $v['id']==$type_id?'activea':''; ?>"><?php echo $v['name']; ?></a>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </li>                              
                    </ul>
                </div>
            </div>
            <div class="wzlist">
                <div class="inner">
                    <ul>
                    <?php foreach($article as $k=>$v): ?>
                        <li class="clearfix">
                            <img src="<?php echo $v['pic']; ?>" alt="">
                            <div class="words">
                                <p class="time"><?php echo substr($v['addtime'] ,0,10); ?></p>
                                <h2 class="tit"><?php echo $v['title']; ?></h2>
                                <p class="word"><?php echo $v['desc']; ?></p>
                                <a href="<?php echo url('detail',['article_id'=>$v['id'],'id'=>$v['type_id']]); ?>" class="xq">了解详情</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="page">
                <div class="inner">
                    <div class="box clearfix">
                    <div>
                        <?php echo $article->render(); ?>
                    </div>
                        
                    </div>
                </div>
            </div>
           <!-- footer -->
             <div class="footer">
                <div class="foot">
                    <div class="paddingbox">
                        <div class="clearfix">
                            <div class="contact">
                                <h3>联系我们</h3>
                                <div class="email clearfix">
                                    <span>邮箱地址</span>
                                    <strong>skylightconsulting@hotmail.com</strong>
                                </div>
                                <div class="zx clearfix">
                                   <span>微光咨询小<br>秘书微信ID</span>
                                   <strong>skylighthelper</strong>
                                </div>
                                <div class="zh clearfix">
                                    <span>知乎专栏</span>
                                    <strong>
                                        <a href="https://zhuanlan.zhihu.com/skylightconsulting" target="_blank">https://zhuanlan.zhihu.com/skylightconsulting</a>
                                        <b>Instagram: skylightconsulting</b>
                                    </strong>
                                </div>
                            </div>
                            <div class="gz">
                                <h3>关注我们</h3>
                                <div>
                                    <img src="/static/images/j3.jpg" alt="">
                                    <span>（官方微信）</span>
                                </div>
                            </div>
                            <div class="share">
                                <h3>分享到</h3>
                                <div class="bdsharebuttonbox" data-tag="share_1">
                                    <a class="bds_weixin" data-cmd="weixin" href="#"></a>
                                    <a class="bds_tsina" data-cmd="tsina" href="#"></a>
                                </div>
                                <script> 
                                    //以下为js加载部分
                                    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
                                </script>
                            </div>
                        </div>
                        <div class="sm clearfix">
                            <a href="#2">法律声明</a>
                            <span>Copyright©2010-2015版权所有  skylight consulting   京ICP12019363号-1</span>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- gotop -->
            <div class="gotop"></div>
        </div>
    </div>
    <!-- js -->
    <script>
        // banner
        var mySwiperBanner = new Swiper('.banner .swiper-container', {
            autoplay: 5000,
            loop : true,
            direction : 'vertical',
            autoHeight: true, 
            observer:true,
            observeParents:true,
            pagination : '.swiper-pagination',
            paginationClickable :true
        });
        // hot
        var mySwiperHot = new Swiper('.hot .swiper-container', {
            loop : true,
            slidesPerView: 'auto',
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });

        $(function(){
             var h = $('#iabout').offset().top;
            $('.gotwo').click(function(){
                 $('html,body').animate({"scrollTop":h},300);
            })
        })
    </script>
</body>
</html>