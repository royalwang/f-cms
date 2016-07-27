<{include "public/header.tpl.php"}>
<!--new page-->
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.1/jquery.min.js"></script>
<script type="text/javascript" src="/res/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/res/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/res/lib/My97DatePicker/WdatePicker.js"></script>

<script type="text/javascript" src="/res/js/H-ui.js"></script>
<script type="text/javascript" src="/res/js/H-ui.admin.js"></script>

<div class="pd-20">
    <form action=""  method="post" id="form-horizontal" class="form form-horizontal" enctype="multipart/form-data">
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>标题：</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" id="" name="title" value="<{$block_info['title']}>">
            </div>
        </div>

        <{if $block_info.bid==1}>
        <div class="row cl">
            <label class="form-label col-2">上传图片：</label>
            <div class="formControls col-2">
                <input type="file" placeholder="请选择图片" class="required " name="pic" />
                <span style="color: red">请上传1423x456像素的图片</span>
            </div>
        </div>
        <{else}>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>文章内容：</label>
            <div class="formControls col-10">
                <script id="editor" type="text/plain" name="summary" style="width:100%;height:400px;"><{$block_info.summary}></script>
            </div>
        </div>
        <{/if}>
        <div class="row cl">
            <div class="col-10 col-offset-2">
                <input type="hidden" name="item_id" value="<{$block_info['item_id']}>"/>
                <input type="hidden" name="bid" value="<{$block_info['bid']}>"/>
                <button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                <button onClick="layer_close();" class="btn btn-default radius" type="reset">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>



<!--newpage_end-->
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.1/jquery.min.js"></script>
<script type="text/javascript" src="/res/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/res/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/res/lib/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="/res/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="/res/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/res/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/res/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.js"></script>
<script type="text/javascript" src="/res/adminjs/H-ui.admin.js"></script>
<script>
    $('#form-horizontal').submit(function() {
        var can_submit = true;
        $('.required').each(function(i, item){
            var _this = $(this);
            $('.required').removeClass('error');
            if (_this.val() == '') {
                can_submit = false;
                $(this).addClass('error');
                alert('有项目为必填项目，请补充完整。');
                return false;
            }
        });

        return can_submit;
    });
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $list = $("#fileList"),
            $btn = $("#btn-star"),
            state = "pending",
            uploader;

        var uploader = WebUploader.create({
            auto: true,
            swf: 'lib/webuploader/0.1.5/Uploader.swf',

            // 文件接收服务端。
            server: 'http://lib.h-ui.net/webuploader/0.1.5/server/fileupload.php',

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',

            // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            resize: false,
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
        uploader.on( 'fileQueued', function( file ) {
            var $li = $(
                    '<div id="' + file.id + '" class="item">' +
                    '<div class="pic-box"><img></div>'+
                    '<div class="info">' + file.name + '</div>' +
                    '<p class="state">等待上传...</p>'+
                    '</div>'
                ),
                $img = $li.find('img');
            $list.append( $li );

            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }

                $img.attr( 'src', src );
            }, thumbnailWidth, thumbnailHeight );
        });
        // 文件上传过程中创建进度条实时显示。
        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                $percent = $li.find('.progress-box .sr-only');

            // 避免重复创建
            if ( !$percent.length ) {
                $percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
            }
            $li.find(".state").text("上传中");
            $percent.css( 'width', percentage * 100 + '%' );
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on( 'uploadSuccess', function( file ) {
            $( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
        });

        // 文件上传失败，显示上传出错。
        uploader.on( 'uploadError', function( file ) {
            $( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on( 'uploadComplete', function( file ) {
            $( '#'+file.id ).find('.progress-box').fadeOut();
        });
        uploader.on('all', function (type) {
            if (type === 'startUpload') {
                state = 'uploading';
            } else if (type === 'stopUpload') {
                state = 'paused';
            } else if (type === 'uploadFinished') {
                state = 'done';
            }

            if (state === 'uploading') {
                $btn.text('暂停上传');
            } else {
                $btn.text('开始上传');
            }
        });

        $btn.on('click', function () {
            if (state === 'uploading') {
                uploader.stop();
            } else {
                uploader.upload();
            }
        });



        var ue = UE.getEditor('editor');

    });

    function mobanxuanze(){

    }
</script>
<{include "public/footer.tpl.php"}>