{include "admin/public/header.tpl.php"}

<link href="/res/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="/res/lib/icheck/jquery.icheck.min.js"></script>


<title>栏目设置</title>

<div class="pd-20">
    <form action="" method="post" class="form form-horizontal" id="form-category-add">
        <div id="tab-category" class="HuiTab">
            <div class="tabBar cl">
                <span>基本设置</span>
                <span>模版设置</span><span>SEO</span>
            </div>
            <div class="tabCon">
                <div class="row cl">
                    <label class="form-label col-3"><span class="c-red">*</span>上级栏目：</label>

                    <div class="formControls col-6"> <span class="select-box">
						<select class="select" id="sel_Sub" name="parent_id" onchange="SetSubID(this);">
                            <option value="0">顶级分类</option>
                            {foreach from=$cats item=item}
                            {if $item['class']==0}
                            <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                            {else}
                            <option value="<?php echo $item['id']; ?>" style="color: #5a98de;">|-<?php echo $item['name']; ?></option>
                            {/if}
                            {/foreach}
                        </select>
						</span></div>
                    <div class="col-3"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-3"><span class="c-red">*</span>分类名称：</label>

                    <div class="formControls col-6">
                        <input type="text" class="input-text" value="<?php echo $catData['name']; ?>" placeholder=""
                               id="" name="name" datatype="*2-16"
                               nullmsg="分类名称不能为空">
                    </div>
                    <div class="col-3"></div>
                </div>

<!--                <div class="row cl">-->
<!--                    <label class="form-label col-3">别名：</label>-->
<!---->
<!--                    <div class="formControls col-6">-->
<!--                        <input type="text" class="input-text" value="" placeholder="" id="" name="">-->
<!--                    </div>-->
<!--                    <div class="col-3"></div>-->
<!--                </div>-->
<!--                <div class="row cl">-->
<!--                    <label class="form-label col-3">目录：</label>-->
<!---->
<!--                    <div class="formControls col-6">-->
<!--                        <input type="text" class="input-text" value="" placeholder="" id="" name="">-->
<!--                    </div>-->
<!--                    <div class="col-3"></div>-->
<!--                </div>-->
<!--                <div class="row cl">-->
<!--                    <label class="form-label col-3">内容类型：</label>-->
<!---->
<!--                    <div class="formControls col-6"> <span class="select-box">-->
<!--						<select name="" class="select">-->
<!--                            <option value="1">文章</option>-->
<!--                            <option value="2">图片</option>-->
<!--                            <option value="3">商品</option>-->
<!--                            <option value="4">视频</option>-->
<!--                            <option value="5">专题</option>-->
<!--                            <option value="6">链接</option>-->
<!--                        </select>-->
<!--						</span></div>-->
<!--                    <div class="col-3"></div>-->
<!--                </div>-->
<!--                <div class="row cl">-->
<!--                    <label class="form-label col-3">是否生成静态html：</label>-->
<!---->
<!--                    <div class="formControls col-6 skin-minimal">-->
<!--                        <div class="check-box">-->
<!--                            <input type="checkbox" id="checkbox-pinglun">-->
<!--                            <label for="checkbox-pinglun">&nbsp;</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-3"></div>-->
<!--                </div>-->
            </div>
            <div class="tabCon">
                <div class="row cl">
                    <label class="form-label col-3">首页模版：</label>

                    <div class="formControls col-6">
                        <input type="text" class="input-text" value="" style="width:200px;">
                        <input type="button" class="btn btn-default" value="浏览">
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-3">列表页模版：</label>

                    <div class="formControls col-6">
                        <input type="text" class="input-text" value="" style="width:200px;">
                        <input type="button" class="btn btn-default" value="浏览">
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-3">详情页模版：</label>

                    <div class="formControls col-6">
                        <input type="text" class="input-text" value="" style="width:200px;">
                        <input type="button" class="btn btn-default" value="浏览">
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-3">详细页存储规则：</label>

                    <div class="formControls col-6"> <span class="select-box">
						<select class="select" id="" name="">
                            <option value="1">按年度划子目录</option>
                            <option value="2">按年/月划分子目录</option>
                            <option value="3">按年/月/日划分子目录</option>
                        </select>
						</span></div>
                    <div class="col-3"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-3">每页显示多少条：</label>

                    <div class="formControls col-6">
                        <input type="text" class="input-text" value="20" style="width:200px;">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            <div class="tabCon">
                <div class="row cl">
                    <label class="form-label col-3">首页文件名：</label>

                    <div class="formControls col-6">
                        <input type="text" class="input-text" value="index.html" style="width:200px;">
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-3">关键词：</label>

                    <div class="formControls col-6">
                        <input type="text" class="input-text" value="">
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row cl">
                    <label class="form-label col-3">描述：</label>

                    <div class="formControls col-6">
                        <textarea name="" cols="" rows="" class="textarea" placeholder="说点什么...最少输入10个字符"
                                  datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！"
                                  onKeyUp="textarealength(this,100)"></textarea>

                        <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
        <div class="row cl">
            <div class="col-9 col-offset-3">
                <input type="hidden" name="id" value="<?php echo $catData['id']; ?>"/>
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
    $(function () {
//        $('.skin-minimal input').iCheck({
//            checkboxClass: 'icheckbox-blue',
//            radioClass: 'iradio-blue',
//            increaseArea: '20%'
//        });

        $("#form-article-category-add").Validform({
            tiptype: 2,
            callback: function (form) {
                form[0].submit();
                var index = parent.layer.getFrameIndex(window.name);
                parent.$('.btn-refresh').click();
                parent.layer.close(index);
            }
        });
        $.Huitab("#tab-category .tabBar span", "#tab-category .tabCon", "current", "click", "0");
    });
</script>
{include "admin/public/footer.tpl.php"}
