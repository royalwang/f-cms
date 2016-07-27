<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>快递</title>
    <!-- Bootstrap -->
    <link href="/res/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/res/css/common.css" type="text/css"/>
    <link rel="stylesheet" type="/res/text/css" href="/res/css/detail.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="a-index" style="background:url(images/bg.png) no-repeat;background-size:100% auto;background-position:bottom;">



<header class="a-header cf">
    <div class="a-logo cf">
        <div class="api-logo">
            <a href="/">
                <img src="/res/img/api-logo.png"/>
            </a>
        </div>
    </div>
    <div class="site">
        <div class="site-box cf">
            <a href="/" class="fl">首页</a>
            <a href="/Introduction" class="fr">公司简介</a>
            <a href="/doc/" class="fr">物流API</a>
        </div>
    </div>
</header>



<script src="javascript/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="javascript/bootstrap.js"></script>


<!-- 内页公共头部开始 -->
<div class="header">


    <!-- 内页公共头部结束 -->
    <section class="a-section c-section cf">
        <div class="contact wrap cf">
            <div class="con-left"><img src="/res/img/map.jpg"/></div>
            <div class="cont-txt">
                <div class="box">
                    <h4>深圳市源荔橙科技有限公司</h4>
                    <ul>
                        <li class="i1"><span>地址 ：</span> <?php echo Service_Setting::get('address'); ?> </li>
                        <li class="i2"><span>电话 ：</span> <b><?php echo Service_Setting::get('phone'); ?></b> </li>
                        <li class="i3"><span>传真 ：</span> <?php echo Service_Setting::get('fax'); ?></li>
                        <li class="i4"><span>邮箱 ：</span> <?php echo Service_Setting::get('email'); ?></li>
                    </ul>
                    <dl class="cf">
                        <dd> <img src="/res/img/about05.jpg"> <span>微信公众号</span> </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <footer class="a-footer">
        <span>Copyright © 2015-2016 KDUFO All rights reserved.</span>
        <span>源荔橙科技&nbsp版权所有</span>
        <span style="margin:0 4px">粤ICP备16041659号-2</span>
        <span><a href="/contact/index">联系我们</a></span>
    </footer>
</body>
</html>
