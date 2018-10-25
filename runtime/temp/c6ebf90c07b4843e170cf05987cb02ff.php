<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"../apps/common/view/builder/Fields/text.html";i:1519388616;}*/ ?>

<div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>">
    <label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo $field['title']; ?></label>
    <div class="col-md-4">
        <input type="text" class="form-control" name="<?php echo $field['name']; ?>" value="<?php if(isset($field['value'])): ?><?php echo htmlspecialchars($field['value']); endif; ?>" <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:''); ?>>
    </div>
    <?php if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><div class="col-md-5 help-block"><i class="fa fa-info-circle color-info1"></i> <?php echo $field['description']; ?></div><?php endif; ?>
</div>
