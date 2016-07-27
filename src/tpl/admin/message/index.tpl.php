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
    <script type="text/javascript" src="/res/lib/html5.js"></script>
    <script type="text/javascript" src="/res/lib/respond.min.js"></script>
    <script type="text/javascript" src="/res/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="/res/admincss/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="/res/admincss/H-ui.admin.css" rel="stylesheet" type="text/css"/>
    <link href="/res/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>站内信</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 其他版块 <span
        class="c-gray en">&gt;</span> 站内信 <a class="btn btn-success radius r mr-20"
                                              style="line-height:1.6em;margin-top:3px"
                                              href="javascript:location.replace(location.href);" title="刷新"><i
            class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
    <form action="/admin/Message/index" method="post">
        <div class="text-c">
            <input type="text" class="input-text" style="width:250px" placeholder="搜索标题" id="" name="title"
                   value="<?php echo $title;?>">
            <button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索
            </button>
        </div>
    </form>
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="/admin/Message/add" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i>
                添加站内信</a></span> <span class="r">共有数据：<strong><?php echo $page_info['total'];?></strong> 条</span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="80">ID</th>
                <th width="100">收信用户</th>
                <th width="100">标题</th>
                <th width="400">内容</th>
                <th width="100">时间</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$info item=vo}
            <tr class="text-c">
                <td><?php echo $vo['id'];?></td>
                <td><?php echo $vo['username'];?></td>
                <td><?php echo $vo['title'];?></td>
                <td style="overflow: hidden;max-width:800px;max-height:50px;"><?php echo $vo['content|strip_tags|truncate:40'];?></td>
                <td><?php echo $vo['create_time'];?></td>
                <td class="td-manage">
                    <a title="编辑" href="/admin/Message/edit?id=<?php echo $vo['id'];?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                    <a title="删除" href="javascript:;" onclick="message_del(this,'<?php echo $vo['id'];?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                </td>
            </tr>
            {/foreach}
            </tbody>
        </table>
        {include "admin/public/pager.tpl.php"}
    </div>
</div>
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.1/jquery.min.js"></script>
<script type="text/javascript" src="/res/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.admin.js"></script>
<script type="text/javascript">
    /*删除*/
    function message_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $.post('/admin/Message/message_del', {id: id}, function (data) {
                if (data == 1) {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000});
                }
            });
        });
    }
</script>
</body>
</html>