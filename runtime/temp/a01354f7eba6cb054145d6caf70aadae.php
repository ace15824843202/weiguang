<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\wamp64\www\tp5-1\public/../application/index\view\index\index.html";i:1545390426;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\header.html";i:1545405061;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\footer.html";i:1544770886;}*/ ?>
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
            <!-- banner -->
            <div class="banner">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach($banner as $k=>$v): ?>
                        <div class="swiper-slide">
                                <a href="#">
                                    <img src='<?php echo $v['pic']; ?>' alt="">
                                    <div class="inner">
                                        <div class="bannerpage clearfix">
                                            <span class="cur_page">
                                                <?php echo $k>8?($k+1):'0'.($k+1); ?>
                                            </span class="cur_page">
                                            <span class="line"></span>
                                            <span class="all_page"><?php echo $count; ?></span>
                                        </div>
                                        <div class="banner_word">
                                            <h2><?php echo $v['content_top']; ?></h2>
                                            <h3><?php echo $v['content_bot']; ?></h3>
                                        </div>
                                    </div>
                                </a>
                        </div>
                     <?php endforeach; ?>   
                        
                    </div>
                    <!-- 分页 -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="gotwo"></div>
            </div>
            <!-- about -->
            <div class="about clearfix" id="iabout">
                <div class="bg"></div>
                <div class="inner clearfix">
                    <div class="left imgbox">
                        <img src="/static/images/p1.png" alt="" class="img1">
                        <img src="<?php echo $bg['pic']; ?>" alt="" class="img2">
                    </div>
                    <div class="left wordbox">
                        <h2><?php echo $bg['content1']; ?></h2>
                        <h4><?php echo $bg['content2']; ?></h4>
                        <p><?php echo $bg['content3']; ?></p>
                        <p><?php echo $bg['content4']; ?></p>
                        <h5><a href="about.html" target="_blank">了解详情</a></h5>
                    </div>
                </div>
            </div>
            <!-- hot -->
            <div class="hot clearfix">
                <div class="title">
                    <div class="clearfix">
                        <span>最新热文</span>
                        <a href="#">查看更多</a>
                    </div>
                </div>
                <div class="inner">
                    <div class="box">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                             <?php foreach($article as $k=>$v): ?>
                                <div class="swiper-slide clearfix">
                                    <div class="left imgbox">
                                        <img src="<?php echo $v['pic']; ?>" alt="">
                                    </div>
                                    <div class="left worbox">
                                        <p class="time"><?php echo substr($v['addtime'] ,1,10); ?></p>
                                        <h2 class="tit"><?php echo $v['title']; ?></h2>
                                        <p class="words"><?php echo $v['desc']; ?></p>
                                        <a href="<?php echo url('index/article/detail',['article_id'=>$v['id'],'id'=>$v['type_id']]); ?>" class="xq">了解详情</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
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