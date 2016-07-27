<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
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
    <![endif]-->
    <title>用户管理</title>
    <style type="text/css">
        .table td{text-align: center;}
    </style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 意见反馈 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
    <form action="/admin/feedback/feedback_index" method="post">
        <div class="text-c"> 日期范围：
            <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" name="datemin" value="<{$datemin}>" class="input-text Wdate" style="width:120px;">
            -
            <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" name="datemax" value="<{$datemax}>" class="input-text Wdate" style="width:120px;">
            <input type="text" class="input-text" style="width:250px" placeholder="输入关键字" id="" name="username" value="<{$username}>">
            <button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
        </div>
    </form>
    <div class="cl pd-5 bg-1 bk-gray mt-20"> </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th style="width:20px;">ID</th>
                <th style="width:80px;">用户</th>
                <th style="width:80px;">手机号</th>
                <th style="width:80px;">qq</th>
                <th>内容</th>
                <th style="width:160px;">时间</th>
                <th style="width:150px;">操作</th>
            </tr>
            </thead>
            <tbody>
            <{foreach from=$ainfo item=item}>
            <tr>
                <td><{$item.f_id}></td>
                <td><{$item.feedback_username}></td>
                <td><{$item.phone}></td>
                <td><{$item.qq}></td>
                <td><a rel="ajax" href="javascript:;" onclick="member_edit('详情','/admin/feedback/feedback_detail?f_id=<{$item.f_id}>','<{$item.f_id}>','800','400')"><{$item.feedback_content|truncate:60}></a>
                </td>
                <td><{$item.feedback_time}></td>
                <td>
                    <a title="回复" href="/admin/message/add?feedback=<{$item.feedback_m_id}>&feedname=<{$item.feedback_username}>"  class="ml-5" style="text-decoration:none">回复</a>
                    <a title="详情" href="javascript:;" onclick="member_edit('详情','/admin/feedback/feedback_detail?f_id=<{$item.f_id}>','<{$item.f_id}>','800','400')" class="ml-5" style="text-decoration:none">详情</a>
                    <a title="删除" href="javascript:;" onclick="member_del(this,'<{$item.f_id}>')" class="ml-5" style="text-decoration:none">删除</a>
                </td>
            </tr>
            <{/foreach}>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/My97DatePicker/WdatePicker.js"></script>

<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.admin.js"></script>
<script type="text/javascript">
    $(function(){
        $('.table-sort').dataTable({
            "aaSorting": [[ 5, "desc" ]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[6]}// 制定列不参与排序
            ]
        });
    });
    /*用户-查看*/
    function member_show(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

    /*用户-编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

    /*用户-伪删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.post('/admin/feedback/feedback_del',{id:id},function(data){
                if(data == 1) {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                }
            });
        });
    }

</script>

</body>
</html>
