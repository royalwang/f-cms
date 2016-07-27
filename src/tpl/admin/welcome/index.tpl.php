<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/res/lib/html5.js"></script>
    <script type="text/javascript" src="/res/lib/respond.min.js"></script>
    <script type="text/javascript" src="/res/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="/res/admincss/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/res/admincss/H-ui.admin.css" rel="stylesheet" type="text/css" />


    <!--[if IE 6]>
    <script type="text/javascript" src="/res/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>我的桌面</title>
</head>
<body>
<div class="pd-20" style="padding-top:20px;">
    <p class="f-20 text-success">欢迎使用zs_cms <span class="f-14">v1.0(正式版)</span>内容管理系统！</p>

    <p>登录次数：<?php echo $total;?> </p>
    <p>上次登录IP：<?php echo $last_log['ip'];?>  上次登录时间：<?php echo $last_log['create_time'] ;?></p>
    <table class="table table-border table-bordered table-bg">
        <thead>
        <tr>
            <th colspan="7" scope="col">信息统计</th>
        </tr>
        <tr class="text-c">
            <th>统计</th>
            <th>新闻库</th>
            <th>产品库</th>
            <th>管理员</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-c">
            <td>总数</td>
            <td><?php echo $total_article ;?></td>
            <td><?php echo $total_product;?></td>
            <td><?php echo $total_admin;?></td>
        </tr>
        <tr class="text-c">
            <td>本周</td>
            <td><?php echo $week_article;?></td>
            <td><?php echo $week_product;?></td>
            <td><?php echo $week_admin;?></td>
        </tr>
        <tr class="text-c">
            <td>本月</td>
            <td><?php echo $month_article;?></td>
            <td><?php echo $month_product;?></td>
            <td><?php echo $month_admin;?></td>
        </tr>
        </tbody>
    </table>

</div>
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.1/jquery.min.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.js"></script>
</body>
</html>