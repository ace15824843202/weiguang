<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\wamp64\www\tp5-1\public/../application/index\view\article\detail.html";i:1544794664;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\header.html";i:1545405061;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\footer.html";i:1548828434;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>微光</title>
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
            <div class="readxq">
                <div class="inner">
                    <div class="tabtit tabtit1">
                        <a href="#">首页</a><b>></b><a href="#">心理阅读</a><b>></b><span>心理阅读详情页</span>
                    </div>
                    <div class="bigtit">
                        <h1><?php echo $detail['title']; ?></h1>
                        <p class="time"><?php echo substr($detail['addtime'] ,0,10); ?></p>
                        <div class="sharebox clearfix">
                            <span class="name">分享：</span>
                            <div class="share">
                                <div class="bdsharebuttonbox" data-tag="share_1">
                                    <a class="bds_weixin" data-cmd="weixin" href="#"></a>
                                    <a class="bds_tsina" data-cmd="tsina" href="#"></a>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="wzcont">
                        <div class="tips clearfix">
                            <span>作者：<?php echo $detail['author']; ?></span>
                            <span>编辑：<?php echo $detail['editor']; ?></span>
                            <span>阅读：5分钟</span>
                        </div>
                        <div class="wz">
                            <?php echo $detail['content']; ?>
                        </div>
                    </div>
                    <div class="nextwz">
                        <div>
                            <?php if(($pre['flag']==1)): ?>
                                <a href="<?php echo url('detail',['article_id'=>$pre['id'],'id'=>$detail['type_id']]); ?>">上一篇：<?php echo $pre['title']; ?></a>
                            <?php else: ?>
                                <a href="javascript:viod(0)">上一篇：没有上一篇文章</a>
                            <?php endif; if(($next['flag']==1)): ?>
                                <a href="<?php echo url('detail',['article_id'=>$next['id'],'id'=>$detail['type_id']]); ?>">下一篇：<?php echo $next['title']; ?></a>
                            <?php else: ?>
                                <a href="javascript:viod(0)">下一篇：没有下一篇文章</a>
                            <?php endif; ?>
                            
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
                                    <strong><?php echo $about['email']; ?></strong>
                                </div>
                                <div class="zx clearfix">
                                   <span>微光咨询小<br>秘书微信ID</span>
                                   <strong><?php echo $about['wechat']; ?></strong>
                                </div>
                                <div class="zh clearfix">
                                    <span>知乎专栏</span>
                                    <strong>
                                        <a href="<?php echo $about['zhihu']; ?>" target="_blank"><?php echo $about['zhihu']; ?></a>
                                        <b>Instagram: <?php echo $about['instagram']; ?></b>
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