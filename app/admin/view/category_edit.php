<link rel="stylesheet" href="/src/admin/wangEditor/css/wangEditor.min.css">
<script type="text/javascript" src="/src/admin/wangEditor/js/wangEditor.min.js"></script>
<div class="aright">
    <fieldset class="layui-elem-field layui-field-title" style="margin: 20px 30px 20px 20px;">
        <legend><?php echo isset($info['id']) ? '修改' : '添加'; ?>文章</legend>
    </fieldset>
    <form class="layui-form bform" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label class="layui-form-label">栏目标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" required lay-verify="required" value="{$info.title}" placeholder="必填内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">栏目排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" required lay-verify="required" value="{$info.sort}" placeholder="越小靠前" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item" style="width: 300px;">
            <label class="layui-form-label">栏目状态</label>
            <div class="layui-input-block">
                <select name="status">
                    {foreach $notes['status'] as $key=>$vo} 
                    <option  {if ($info['status']==$key)}selected="selected" {/if} value="{$key}">{$vo}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="hidden" name="id" value="{$info.id}">
                <button class="layui-btn" lay-filter="formDemo" >立即提交</button> 
            </div>
        </div>
    </form>
</div>
<script>
    layui.use('form', function () {
        var form = layui.form();
    });
</script>