<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <script type="text/javascript" src="/adminjs/jquery.min.js"></script>
    <script type="text/javascript" src="/adminjs/jquery-1.8.2.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/res/lib/html5.js"></script>
    <script type="text/javascript" src="/res/lib/respond.min.js"></script>
    <script type="text/javascript" src="/res/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="/res/admincss/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="/res/admincss/H-ui.admin.css" rel="stylesheet" type="text/css"/>
    <link href="/res/admincss/style.css" rel="stylesheet" type="text/css"/>
    <link href="/res/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>资讯列表</title>
</head>
<body>
{if $statu}

<script type="text/javascript">
    $(document).ready(function () {
        var statu =

        {
            $statu
        }

        ;
        $('#select_statues').val(statu);
    })
</script>
{/if}
{if $sousuo}
<script type="text/javascript">
    $(document).ready(function () {
        var id =

        {
            $sousuo
        }

        ;
        $('#select_back').val(id);
    })
</script>
{/if}
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 新闻中心 <span
        class="c-gray en">&gt;</span> {if $type==4}公司新闻{else}企业动态{/if} <a class="btn btn-success radius r mr-20"
                                                                                style="line-height:1.6em;margin-top:3px"
                                                                                href="javascript:location.replace(location.href);"
                                                                                title="刷新"><i class="Hui-iconfont">
            &#xe68f;</i></a></nav>
<div class="pd-20">
    <form action="" method="post">
        <div class="text-c">
        <span class="select-box inline">
                <select name="num" class="select" id="select_statues">
                    <option value="10"
                    {if $num == 10} selected="selected"{/if}>显示10条</option>
                    <option value="25"
                    {if $num == 25} selected="selected"{/if}>显示25条</option>
                    <option value="50"
                    {if $num == 50} selected="selected"{/if}>显示50条</option>
                    <option value="100"
                    {if $num == 100} selected="selected"{/if}>显示100条</option>
                </select>
		</span>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </form>
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:;" onclick="datadel()"
                                                               class="btn btn-danger radius"><i class="Hui-iconfont">
                    &#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius"
                                             href="/admin/Article/article_add?type=<?php echo $type;?>"><i
                    class="Hui-iconfont">&#xe600;</i> 添加新闻</a></span> <span
            class="r">共有数据：<strong><?php echo $page_info['total'];?></strong> 条</span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="80">ID</th>
                <th>标题</th>
                <th>来源</th>
                <th>作者</th>
                <th width="60">浏览次数</th>
                <th>发布时间</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$info item=item }
            <tr class="text-c">
                <td><input type="checkbox" value="<?php echo $item['id'];?>'" name="del"></td>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['title'];?></td>
                <td><?php echo $item['comefrom'];?></td>
                <td><?php echo $item['author'];?></td>
                <td> <?php echo $item['times'];?></td>
                <td><?php echo $item['create_time'] ;?></td>
                <td class="f-14 td-manage">
                    <a style="text-decoration:none" class="ml-5" href="/admin/Article/edit?id=<?php echo $item['id'];?>"
                       title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                    <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'<?php echo $item['id'];?>')"
                       href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
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
    function is_audit(obj, id) {
        layer.confirm('确认要审核吗？', function (index) {
            $.post('/admin/Article/audit', {id: id}, function (data) {
                if (data == 1) {
                    $(obj).parents("tr").find(".td-status").empty().html('<span class="admin_audit label label-success radius">已审核 </span>');
                    layer.msg('已审核!', {icon: 1, time: 1000});
                } else {
                    layer.msg('未完成，请重试', 1);
                }
            });
        });
    }

    /*资讯-添加*/
    function article_add(title, url, w, h) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*资讯-编辑*/
    function article_edit(title, url, id, w, h) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*资讯-删除*/
    function article_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            //此处请求后台程序，下方是成功后的前台处理……
            $.post('/admin/Article/del', {id: id}, function (data) {
                if (data == 1) {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000});
                } else {
                    layer.msg('删除失败，请重试', 1);
                }
            });
        });
    }

    /*资讯-审核*/
    function article_shenhe(obj, id) {
        layer.confirm('审核文章？', {
                btn: ['通过', '不通过'],
                shade: false
            },
            function () {
                $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
                $(obj).remove();
                layer.msg('已发布', {icon: 6, time: 1000});
            },
            function () {
                $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
                $(obj).remove();
                layer.msg('未通过', {icon: 5, time: 1000});
            });
    }

    /*资讯-下架*/

    function article_stop(obj, id) {
        layer.confirm('确认要下架吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
            $(obj).remove();
            layer.msg('已下架!', {icon: 5, time: 1000});
        });
    }

    /*资讯-发布*/

    function article_start(obj, id) {
        layer.confirm('确认要发布吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
            $(obj).remove();
            layer.msg('已发布!', {icon: 6, time: 1000});
        });
    }
    /*资讯-申请上线*/
    function article_shenqing(obj, id) {
        $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
        $(obj).parents("tr").find(".td-manage").html("");
        layer.msg('已提交申请，耐心等待审核!', {icon: 1, time: 2000});
    }
    function datadel() {
        var aa = '';
        $('input[name=del]:checked').each(function () {
            aa += ',' + $(this).val();
        });
        if (aa == '') {
            layer.msg('请选择要批量删除的文章!', {icon: 1, time: 1000});
        }

        $.post('/admin/Article/article_del', {a_id: aa}, function (data) {
            if (data == 1) {
                $('input[name=del]:checked').parents('tr').remove();
                layer.msg('已删除!', {icon: 1, time: 1000});
            }
        });
    }

    function member_See(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
</script>

{include "admin/public/footer.tpl.php"}