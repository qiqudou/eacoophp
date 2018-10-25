<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"../apps/common/view/builder/Fields/tags.html";i:1519388616;}*/ ?>

<div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>">
    <label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo htmlspecialchars($field['title']); ?></label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="tokeninput_<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" value="<?php echo (isset($field['value']) && ($field['value'] !== '')?$field['value']:''); ?>" <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:''); ?>>
    </div>
    <?php if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><div class="col-md-5 help-block"><i class="fa fa-info-circle color-info1"></i> <?php echo $field['description']; ?></div><?php endif; ?>
</div>
<link rel="stylesheet" type="text/css" href="/static/libs/tokeninput/css/token-input.css">
<link rel="stylesheet" type="text/css" href="/static/libs/tokeninput/css/token-input-bootstrap.css">
<script type="text/javascript" src="/static/libs/tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
<script type="text/javascript">
    $(function(){
        //标签自动完成
        var tags = $('#tokeninput_<?php echo $field['name']; ?>'), tagsPre = [];
        if (tags.length > 0) {
            var items = tags.val().split(','), result = [];
            for (var i = 0; i < items.length; i ++) {
                var tag = items[i];
                if (!tag) {
                    continue;
                }
                tagsPre.push({
                    id      :   tag,
                    title   :   tag
                });
            }
        }       

        tags.tokenInput("<?php echo url(MODULE_NAME.'/Tag/search'); ?>",{
            propertyToSearch    :   'title',
            tokenValue          :   'id',
            searchDelay         :   0,
            tokenLimit          :   10,
            preventDuplicates   :   true,
            animateDropdown     :   true,
            allowFreeTagging    :   true,
            hintText            :   '请输入标签名',
            noResultsText       :   '此标签不存在, 按回车创建',
            searchingText       :   "查找中...",
            prePopulate         :   tagsPre,
            theme               :   'bootstrap',
            onAdd: function (item){ //新增系统没有的标签时提交到数据库
                var item_title=parseInt(item.title);
                if (IsNum(item_title)) {
                    tags.tokenInput("remove", {title: item.title});//禁止新增数字
                }else{
                    $.post("<?php echo url(MODULE_NAME.'/Tag/add'); ?>", {'title': item.title},function (data){
                        console.debug(data);
                    });
                }
                
                return false;
            }
        });
    });
    //判断是否为数字
    function IsNum(s)
    {
        if (s!=null && s!="")
        {
            return !isNaN(s);
        }
        return false;
    }

</script>
