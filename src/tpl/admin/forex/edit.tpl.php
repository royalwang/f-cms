<{include "public/header.tpl.php"}>
<div class="pd-20">
    <form action="/admin/Forex/edit" method="post" class="form form-horizontal" id="form-article-add">
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>币种：</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" name="currency" value="<{$data.currency}>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>中间价：</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" name="unit" value="<{$data.unit}>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>排序：</label>
            <div class="formControls col-10">
                <input type="text" class="input-text" placeholder="" name="sort" value="<{$data.sort}>">
            </div>
        </div>


        <input type="hidden" name="id" value="<{$data.id}>"/>
        <div class="row cl">
            <div class="col-10 col-offset-2">
                <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
            </div>
        </div>
    </form>
</div>



<{include "public/footer.tpl.php"}>
