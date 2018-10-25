<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"D:\phpStudy\WWW\homedatas\public/../apps//common/view/builder/formbuilder.html";i:1520660938;s:46:"../apps/common/view/builder/Fields/hidden.html";i:1519388616;}*/ ?>

 <div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>" style="display:none;">
    <label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo $field['title']; ?></label>
    <div class="col-md-4">
        <input type="hidden" class="form-control" id="<?php echo $field['name']; ?>" name="<?php echo $field['name']; ?>" value="<?php echo (isset($field['value']) && ($field['value'] !== '')?$field['value']:''); ?>" <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:""); ?>>
    </div>
    <?php if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><div class="col-md-5 help-block"><i class="fa fa-info-circle color-info1"></i> <?php echo $field['description']; ?></div><?php endif; ?>
</div>
