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
    <link href="/res/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />

    <!--[if IE 6]>
    <script type="text/javascript" src="/res/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>基本设置</title>
    <style>
        tr{
            height:50px;
        }
        table{
            margin-left: 20px;
        }
    </style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 基本设置 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
    <form action="" method="post" class="form form-horizontal" id="form-article-add">
        <div id="tab-system" class="HuiTab">
            <div class="tabBar cl"><span>基本设置</span><span>安全设置</span><span>邮件设置</span><span>其他设置</span></div>
            <div class="tabCon">
                <div class="row cl">
                    <table>

                        {foreach from=$setting item=item}
                        <tr>
                            <td style="width:250px;">
                                <{$item.label}>
                            </td>
                            <td style="width:1200px;margin-right:1px;">
                                <div class="formControls col-10" style="">
                                    <input type="text" id="website-title" name="{$item.name}" value="{$item.setting_value}" class="input-text">
                                </div>
                            </td>
                            <td>
                            </td>
                        </tr>
                        {/foreach}
                    </table>
                    <label class="form-label col-2">
                    </label>
                </div>
            </div>
            <div><input type="hidden" name="id" value="<{$info.id}>"/></div>
        </div>
        <div class="row cl">
            <div class="col-10 col-offset-2">
                <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.1/jquery.min.js"></script>

<script type="text/javascript" src="/res/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/res/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.admin.js"></script>
<script type="text/javascript">
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        $.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
    });
</script>
</body>
</html>