<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/html5.js"></script>
    <script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/respond.min.js"></script>
    <script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="<{$smarty.const.APP_RES}>/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<{$smarty.const.APP_RES}>/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
    <link href="<{$smarty.const.APP_RES}>/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]--><title>用户查看</title>
</head>
<body>
<div class="cl pd-20" style=" background-color:#5bacb6">
    <img class="avatar size-XL l" src="<{$smarty.const.APP_RES}>/images/user.png">
    <dl style="margin-left:80px; color:#fff">
        <dt><span class="f-18"><{$mm.username}></span> <span class="pl-10 f-12">余额：<{$mm.balance}></span></dt>
        <dd class="pt-10 f-12" style="margin-left:0"></dd>
    </dl>
</div>
<div class="pd-20">
    <table class="table">
        <tbody>
        <tr>
            <th class="text-r" width="80">性别：</th>
            <td>
                <{if $mm.sex == 1}>
                男
                <{elseif $mm.sex == 0}>
                女
                <{/if}>
            </td>
        </tr>
        <tr>
            <th class="text-r">手机：</th>
            <td><{$mm.phone}></td>
        </tr>
        <tr>
            <th class="text-r">邮箱：</th>
            <td><{$mm.email}></td>
        </tr>
        <tr>
            <th class="text-r">地址：</th>
            <td><{$mm.address}></td>
        </tr>
        <tr>
            <th class="text-r">注册时间：</th>
            <td><{date('Y-m-d H:i:s',$mm.rtime)}></td>
        </tr>
        <tr>
            <th class="text-r">积分：</th>
            <td><{$mm.bonus_point}></td>
        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/jquery.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.admin.js"></script>
</body>
</html>