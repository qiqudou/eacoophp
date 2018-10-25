<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:48:"../apps/common/view/builder/Fields/textarea.html";i:1519388616;}*/ ?>

<div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>">
<label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo $field['title']; ?></label>
<div class="col-md-6">
	<textarea name="<?php echo $field['name']; ?>" class="form-control" length="120" rows='5' <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:''); ?>><?php if(isset($field['value'])): ?><?php echo htmlspecialchars($field['value']); endif; ?></textarea>
    <?php if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><p class="help-block"><i class="fa fa-info-circle color-info1"></i> <?php echo $field['description']; ?></p><?php endif; ?>
 </div>
</div>