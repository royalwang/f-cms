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
    <link href="<{$smarty.const.APP_RES}>/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <link href="<{$smarty.const.APP_RES}>/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <script type="text/javascript" src="<{$smarty.const.APP_RES}>/home/js/jquery-1.7.2.min.js"></script>
    <title>添加友情链接</title>
</head>
<body>
<div class="pd-20">
    <form action="/admin/Link/add" method="post" class="form form-horizontal" id="form-member-add">
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>友情链接标题：</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" id="" name="title" value="<{$info.title}>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>友情链接URL：</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" id="" name="url" value="<{$info.url}>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>友情链接所在位置：</label>
            <div class="formControls col-10">
                <select name="sort" id="" class="input-text" >
                    <option value="1" <{if $info.sort ==1}>selected="selected"<{/if}>>上层</option>
                    <option value="2" <{if $info.sort ==2}>selected="selected"<{/if}>>下层</option>
                </select>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>友情链接排序:(数值大排在前边)</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" id="" name="link_sort" value="<{$info.link_sort}>">
            </div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                <{if $info}>
                <input type="hidden" name="id" value="<{$info.id}>"/>
                <{/if}>
            </div>
        </div>
    </form>
</div>
</div>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.admin.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    $(function(){
        var ue = UE.getEditor('editor');
    });
</script>
</body>
</html>