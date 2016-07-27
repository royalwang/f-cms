<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>快递</title>
    <!-- Bootstrap -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/res/css/common.css" type="text/css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="a-index"
      style="background:url(/res/img/bg.png) no-repeat;background-size:100% auto;background-position:bottom;">
<link rel="stylesheet" href="/res/css/detail.css" type="text/css" property=""/>
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


<section class="a-section cf">
    <div class="inner">
        <?php if ($deliveryData): ?>
            <ul class="top-inner">
                <li>订单号：<strong>{$code}</strong></li>

                <li>国内派送公司：<strong><?php if ($deliveryData['third_delivery_name']) {
                            echo $deliveryData['third_delivery_name'];
                        } else {
                            echo '未生成';
                        }
                        ?></strong></li>
                <li>国内派送单号：<strong><?php if ($deliveryData['third_delivery_code']) {
                            echo $deliveryData['third_delivery_code'];
                        } else {
                            echo '未生成';
                        }
                        ?></strong></li>
            </ul>
            <div class="main-inner">
                <h3>轨迹详情</h3>
                <div class="package-status">

                    <div class="status-box" id="status_list">
                        <ul id="J_listtext2" class="status-list">
                            <?php
                            //                            $count = sizeof($deliveryList);
                            foreach ($deliveryList as $key => $row) { ?>
                                <li<?php if (0 == $key): ?> class="latest"<?php endif; ?>><span class="text">{$row.summary}</span><br/><span
                                        class="date">{$row.reach_time}</span></li>
                            <?php } ?>
                        </ul>
                        <ul id="J_listtext1" style="display:none" class="status-list">
                            <li><span class="text">商家正通知快递公司揽件</span><br/><span
                                    class="date">2016-06-14&nbsp14:31:19</span>
                            </li>
                            <li><span class="text">到达青岛</span><br/><span class="date">2016-06-14&nbsp14:31:19</span>
                            </li>
                            <li><span class="text">送达</span><br/><span class="date">2016-06-14&nbsp14:31:19</span>
                            </li>
                        </ul>
                    </div>

                    <div a="baaaaaaaaaaaaaaaaaa" b="${currentTrace.findFromAllItem(" we
                    ")}"="">
                </div>


            </div>
        <?php else: ?>
            <ul class="top-inner">
                <li>订单号：<strong>{$code}</strong></li>
                <li>未查到此订单信息!</li>
            </ul>
        <?php endif; ?>
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