<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
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
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <script type="text/javascript" src="/res/home/js/jquery-1.7.2.min.js"></script>
    <title>添加站内信</title>
</head>
<body>
<div class="pd-20">
    <form action="/admin/Message/insert" method="post" class="form form-horizontal" id="form-member-add">
        <div class="row cl" id="accept_sel">
            <label class="form-label col-1"><span class="c-red"></span>发送给：</label>
            <div class="formControls col-10" id="form_select">
                <select name="message_accept" id="cx_submit" class="input-text">
                    <option value="0">所有人</option>
                    <option value="2">所有普通会员</option>
                    <option value="3">所有银钻会员</option>
                    <option value="4">所有金钻会员</option>
                    <option value="5">所有VIP会员</option>
                    <option value="6">所有信息员</option>
                    <option value="1">单个会员点击搜索</option>
                </select>
            </div>
        </div>
        {if $feedback}
        <script type="text/javascript">
            var feedid = <?php echo $feedback;?>;
            var feedname = "<?php echo $feedname;?>";
            var feedback = feedname + '<input type="hidden" name="feedback" value="'+feedid+'" /><input type="hidden" name="message_accept" value="10" />';
            $('#form_select').empty().html(feedback);
        </script>
        {/if}
        <script type="text/javascript">
            $('#cx_submit').change(function(){
                if($(this).val() == 1){
                    var str = '<form action="/admin/Message/add" method="post" id="accept_ss"><div class="row cl"><label class="form-label col-1"></label><input type="text" name="username" class="input-text" style="width:500px;margin-right:20px;"/><input type="submit" value="搜索"  class="input-text" style="width:100px;"/></div></form>';
                    $('#accept_sel').after(str);
                    alert('请搜索要发送站内信的会员名称');
                    $('.btn-primary').css('display','none');
                }else{
                    $('#accept_ss').remove();
                    $('.btn-primary').css('display','block');
                }
            });
        </script>
        {if $user_info}
        <div class="row cl">
            <label class="form-label col-1"><span class="c-red"></span>选择会员：</label>
            <div class="formControls col-10">
                <select name="m_id" class="input-text">
                    {foreach from=$user_info item=vo}
                    <option value="<?php echo $vo['m_id'];?>"><?php  echo $vo['username'];?></option>
                   {/foreach}
                </select>
            </div>
        </div>

        <script type="text/javascript">
            $('#cx_submit').val(1);
        </script>
        {/if}
        <div class="row cl">
            <label class="form-label col-1"><span class="c-red">*</span>站内信标题：</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" id="" name="title" value="">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-1"><span class="c-red">*</span>站内信内容：</label>
            <div class="formControls col-10">
                <script id="editor" type="text/plain" name="content" style="width:100%;height:400px;"></script>
            </div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</div>
</div>
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.1/jquery.min.js"></script>
<script type="text/javascript" src="/res/lib/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="/res/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.admin.js"></script>
<script type="text/javascript" src="/res/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/res/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/res/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    $(function(){
        var ue = UE.getEditor('editor');
    });
</script>
</body>
</html>