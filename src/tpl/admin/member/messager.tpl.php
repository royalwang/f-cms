<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/html5.js"></script>
    <script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/respond.min.js"></script>
    <script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="<{$smarty.const.APP_RES}>/css/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="<{$smarty.const.APP_RES}>/css/H-ui.admin.css" rel="stylesheet" type="text/css"/>
    <link href="<{$smarty.const.APP_RES}>/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>信息员发布统计</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span
        class="c-gray en">&gt;</span> 信息员发布统计 <a class="btn btn-success radius r mr-20"
                                              style="line-height:1.6em;margin-top:3px"
                                              href="javascript:location.replace(location.href);" title="刷新"><i
            class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
    <form action="" method="post">
        <div class="text-c"> 日期范围：
            <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin"
                   name="datemin" value="<{$datemin}>" class="input-text Wdate" style="width:120px;">
            -
            <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})"
                   id="datemax" name="datemax" value="<{$datemax}>" class="input-text Wdate" style="width:120px;">
            <input type="text" class="input-text" style="width:250px" placeholder="输入关键字" id="" name="username"
                   value="<{$username}>">
            <button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜信息员
            </button>
        </div>
    </form>

    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="50">ID</th>
                <th width="80">信息员用户名</th>
                <th width="80">信息员手机</th>
                <th width="80">信息员身份到期时间</th>
                <th width="80">发布信息数量</th>
                <th width="80">通过审核数量</th>
                <th width="80">未审核数量</th>
                <th width="80">未通过数量</th>

            </tr>
            </thead>
            <tbody>
            <{foreach from=$info item=vo}>
            <tr class="text-c">
                <td><{$vo.m_id}></td>
                <td><{$vo.username}></td>
                <td><{$vo.phone}></td>
                <td><{$vo.last_time}></td>
                <td><{$vo.total}></td>
                <td><{$vo.yes}></td>
                <td><{$vo.no}></td>
                <td><{$vo.not_pass}></td>
            </tr>
            <{/foreach}>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/layer/1.9.3/layer.js"></script>
<!--<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/laypage/1.2/laypage.js"></script>-->
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/My97DatePicker/WdatePicker.js"></script>
<!---->
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.admin.js"></script>
<script type="text/javascript">

</script>
</body>
</html>