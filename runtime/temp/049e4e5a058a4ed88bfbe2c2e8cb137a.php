<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\wamp64\www\tp5-1\public/../application/index\view\bigshot\detail.html";i:1544428513;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\header.html";i:1545405061;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\footer.html";i:1544770886;}*/ ?>
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
                <img src="/static/images/j10.jpg" alt="">
                <div class="inner">
                    <span>咨询大咖</span>
                </div>
            </div>
            <div class="shotxq">
                <div class="inner">
                    <div class="tabtit">
                        <a href="<?php echo url('/'); ?>">首页</a><b>></b><a href="/bigshot">咨询大咖</a><b>></b><span>详情</span>
                    </div>
                

                    <div class="box clearfix">
                        <div class="boxL">
                            <img src="<?php echo $info['pic']; ?>" alt="">
                        </div>
                        <div class="boxR">
                            <h3><?php echo $info['name']; ?></h3>
                            <div class="clearfix unit">
                                <span class="left stit">擅长领域：</span>
                               

                                      <?php 

                                        $arr = explode(",",$info['field']);

                                      
                                       for($i=0;$i < count($arr);$i++){
                                            for($j=0;$j< count($field);$j++){
                                                if($field[$j]['id']==$arr[$i]){
                                                  
                                                    echo "<em class='left'>".$field[$j]['field']."</em>";
                                            }

                                        }
                                      
                                          
                                       }

    

                                     ?>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">从业年限：</span>
                                <strong class="left"><?php echo $info['expire']; ?>年</strong>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">个人资质：</span>
                                <div class="stip">

                                      <?php 

                                        $arr = explode(",",$info['zizhi']);
                                       for($i=0;$i < count($arr);$i++){

                                       echo "<p>$arr[$i]</p>";
                                          
                                       }



                                     ?>
                                    
                                </div>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">个人介绍：</span>
                                <div class="stip">
                                    <p><?php echo $info['desc']; ?></p>
                                </div>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">擅长方向：</span>
                                <div class="stip">
                                    <p><?php echo $info['goodat']; ?></p>
                                </div>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">个人成长：</span>
                                <div class="stip">
                                    <p><?php echo $info['group']; ?></p>
                                </div>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">工作流程：</span>
                                <div class="stip">
                                   <?php echo $info['workflow']; ?>
                                </div>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">工作语言：</span>
                                <div class="stip">
                                    <p><?php echo $info['language']; ?></p>
                                </div>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">咨询频率：</span>
                                <div class="stip">
                                    <p><?php echo $info['ctat']; ?></p>
                                </div>
                            </div>
                            <div class="clearfix unit">
                                <span class="left stit">咨询费用：</span>
                                <div class="stip">
                                    <p><?php echo $info['cost']; ?></p>
                                </div>
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