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
    <link href="<{$smarty.const.APP_RES}>/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <link href="<{$smarty.const.APP_RES}>/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>修改密码</title>
</head>
<body>
<div class="pd-20">
    <form action="/admin/Member/do_pwd" method="post" class="form form-horizontal" id="form-admin-add">
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red"></span>会员：</label>
            <div class="formControls col-5">
                <{$minfo.username}>
            </div>
            <div class="col-4"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red"></span>修改密码：</label>
            <div class="formControls col-5">
                <input type="password" name="password" placeholder="密码" autocomplete="off" value="" class="input-text" datatype="/\w{6,16}/i" nullmsg="密码不能为空" errormsg="请填写6到16位的数字，字母，下划线">
            </div>
            <div class="col-4"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red"></span>确认密码：</label>
            <div class="formControls col-5">
                <input type="password"  placeholder="确认密码" autocomplete="off" class="input-text" errormsg="您两次输入的新密码不一致！" datatype="*" nullmsg="确认密码不能为空！" recheck="password" id="newpassword">
            </div>
            <div class="col-4"> </div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                <input type="hidden" name="m_id" value="<{$minfo.m_id}>"/>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.js"></script>
<script type="text/javascript" src="<{$smarty.const.APP_RES}>/js/H-ui.admin.js"></script>
<script type="text/javascript">
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form-admin-add").Validform({
            tiptype:2,
            ajaxPost:true,
            callback:function(form){
                if(form.status=="y"){
                    setTimeout(function(){
                        $.Hidemsg(); //公用方法关闭信息提示框;
                        layer_close();//关闭弹出框口
                    },2000);
                }
            }
        });
    });
</script>
</body>
</html>