<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"C:\wamp64\www\tp5-1\public/../application/index\view\bigshot\index.html";i:1548827553;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\header.html";i:1545405061;s:61:"C:\wamp64\www\tp5-1\application\index\view\common\footer.html";i:1548828434;}*/ ?>
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
            <div class="search">
                <div class="inner">
                    <div class="box">
                        <form action="/index/bigshot"  class="clearfix" method="post">
                            <div class="left clearfix">
                                <label>擅长领域</label>
                                <select name="field">
                                        <option value="0">请选择</option>
                                   <?php foreach($field as $v): if($fields==$v['id']): ?>
                                             <option value="<?php echo $v['id']; ?>"  selected><?php echo $v['field']; ?></option>
                                        <?php else: ?>
                                             <option value="<?php echo $v['id']; ?>"  ><?php echo $v['field']; ?></option>
                                        <?php endif; endforeach; ?>
                                </select>
                            </div>
                            <div class="left clearfix">
                                <label>所在区域</label>
                                <select name="area">
                                    <option value="0">请选择</option>
                                    <?php foreach($area as $v): if($areas ==$v['id']): ?>
                                            <option value="<?php echo $v['id']; ?>" selected ><?php echo $v['area']; ?></option>
                                        <?php else: ?>
                                             
                                              <option value="<?php echo $v['id']; ?>" ><?php echo $v['area']; ?></option>
                                        <?php endif; endforeach; ?>
                                  
                                </select>
                            </div>
                            <div class="left clearfix">
                                <label>从业年限</label>
                                <select name="age">
                                    <option value="0">请选择</option>
                                   <?php $__FOR_START_23183__=1;$__FOR_END_23183__=30;for($i=$__FOR_START_23183__;$i < $__FOR_END_23183__;$i+=1){ if($ages==$i): ?>
                                             <option value="<?php echo $i; ?>"  selected><?php echo $i; ?>年</option>
                                        <?php else: ?>
                                             <option value="<?php echo $i; ?>" ><?php echo $i; ?>年</option>
                                        <?php endif; } ?>
                                </select>
                            </div>
                            <div class="left clearfix">
                                <?php if($keywords ==""): ?>
                                 <input type="text" name="keyword" value="" placeholder="请输入搜索关键词">
                                <?php else: ?>
                                 <input type="text" name="keyword" value="<?php echo $keywords; ?>" >
                                   
                                <?php endif; ?>
                            </div>
                            <!-- <span class="tj right">搜索</span> -->
                            <button  type="submit" class="tj right">搜索</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="poplelist">
                <div class="inner">
                    <ul>
                      

                        <?php foreach($ceshi as $vv): ?>
                        <li class="clearfix">
                            <img class="left" src="<?php echo $vv['pic']; ?>" alt="">
                            <div class="left listR">
                                <h3><?php echo $vv['name']; ?></h3>
                                <div class="clearfix">
                                    <span class="left">擅长领域：</span>

                                    <?php 

                                        $arr = explode(",",$vv['field']);

                                      
                                       for($i=0;$i < count($arr);$i++){
                                            for($j=0;$j< count($field);$j++){
                                                if($field[$j]['id']==$arr[$i]){
                                                  
                                                    echo "<em class='left'>".$field[$j]['field']."</em>";
                                            }

                                        }
                                      
                                          
                                       }

    

                                     ?>

                                        
                                   
                                </div>
                                <div class="clearfix">
                                    <span class="left">从业年限：</span>
                                    <strong class="left"><?php echo $vv['expire']; ?>年</strong>
                                </div>
                                <div class="clearfix">
                                    <span class="left">个人资质：</span>
                                    <p class="left">
                                        <?php 

                                        $arr = explode(",",$vv['zizhi']);
                                       for($i=0;$i < count($arr);$i++){

                                       echo $arr[$i]."<br/>";
                                          
                                       }



                                     ?>
                                    </p>
                                </div>
                                <a href="/index/bigshot/detail/id/<?php echo $vv['id']; ?>"><strong>了解详情</strong></a>
                            </div>
                        </li>


                     <?php endforeach; ?>



                    </ul>
                </div>
            </div>
            <div class="page">
                <div class="inner">
                    <div class="box clearfix">
                        <?php echo $page; ?>
                       
                          
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