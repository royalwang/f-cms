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
<body class="a-index"
      style="background:url(/res/img/bg.png) no-repeat;background-size:100% auto;background-position:bottom;">

<!-- 内页公共头部开始 -->
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
            <a href="/doc/" class="fr">物流API</a>
            <a href="/introduction" class="fr">公司简介</a>
            <a href="/" class="fr">首页</a>
        </div>
    </div>
</header>
<section class="a-section cf">
    <div class="inner" style="padding:10px 50px;">

        <!-- 内页公共头部结束 -->
        <h2 style="text-align:center;margin:20px; font-size: 20px;">公司简介</h2>
        <div class="abMid">
            <div class="AboutContent"><span
                    style="font-family:Microsoft YaHei;">&nbsp; &nbsp; &nbsp; &nbsp;<?php echo $Introduction['summary']; ?></span><br/>
            </div>
        </div>
    </div>
</section>


<footer class="a-footer" style="margin-top: 29%">
    <span>Copyright © 2015-2016 KDUFO All rights reserved.</span>
    <span>源荔橙科技&nbsp版权所有</span>
    <span style="margin:0 4px">粤ICP备16041659号-2</span>
    <span><a href="/contact/index">联系我们</a></span>
</footer>


<script src="javascript/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="javascript/bootstrap.js"></script>
</body>
</html>
