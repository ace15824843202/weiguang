<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\wamp64\www\tp5-1\public/../application/index\view\about\index.html";i:1548827945;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\header.html";i:1545405061;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\footer.html";i:1548828434;}*/ ?>
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
                <img src="/static/images/j13.jpg" alt="">
            </div>
            <div class="aboutcont">
                <div class="inner">
                    <div class="box">
                        <div class="section1">
                            <h2>微光咨询</h2>
                            <h4>北美专业的心理咨询平台</h4>
                            <p>“我们不求万丈光芒，只愿一缕微光，温柔陪伴漂泊异乡的你。<br>我们倾听，我们懂得，我们在这里！”</p>
                        </div>
                        <div class="section2">
                           <?php echo $content; ?>
                        </div>
                        <div class="section3 clearfix">
                            <div class="left">
                                <img src="<?php echo $pic1; ?>" alt="">
                                <img src="<?php echo $pic2; ?>" alt="">
                            </div>
                            <div class="right">
                                <img src="<?php echo $pic3; ?>" alt="">
                                <img class="smallPic" src="<?php echo $pic4; ?>" alt="">
                            </div> 
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


