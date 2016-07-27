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
    <link href="/res/admincss/style.css" rel="stylesheet" type="text/css" />

    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>角色管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员权限管理<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
    <div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a class="btn btn-primary radius"  href="/admin/admingroup/add"><i class="Hui-iconfont">&#xe600;</i> 添加管理员组</a> </span> <span class="r"></span> </div>
    <table class="table table-border table-bordered table-hover table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="6">管理员权限管理</th>
        </tr>
        <tr class="text-c">
            <th width="100">ID</th>
            <th width="250">管理员组名</th>
            <th width="250">后台权限</th>
            <th width="250">文章权限</th>
            <th width="100">操作</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$info item=vo}
        <tr class="text-c">
            <td><?php echo $vo['id'];?></td>
            <td><?php echo $vo['name'];?></td>
            <td><a href="/admin/admingroup/admin_modify?id=<?php echo $vo['id'];?>">修改后台权限</a></td>
            <td><a href="/admin/admingroup/article_modify?id=<?php echo $vo['id'];?>">修改文章权限</a></td>
            <td class="f-14"><a title="编辑" href="/admin/admingroup/add?id=<?php echo $vo['id'];?>" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="/admin/admingroup/del?id=<?php echo $vo['id'];?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
        </tr>
        {/foreach}
        </tbody>
    </table>
</div>
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.1/jquery.min.js"></script>
<script type="text/javascript" src="/res/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.admin.js"></script>
</body>
</html>