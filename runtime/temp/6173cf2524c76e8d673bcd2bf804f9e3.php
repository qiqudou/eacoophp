<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:48:"../apps/common/view/builder/Fields/repeater.html";i:1519388616;}*/ ?>

<?php 
      if (strpos($field['name'],'[')) {
        $field['id']=str_replace(']','',str_replace('[','',$field['name']));
      }else{
      	$field['id']=$field['name'];
      }
      $repeater_attributes = [
        'id'      => $field['id'],
        'name'    => $field['name'],
        'default' => isset($field['value'])? $field['value']:'',
        'options' => isset($field['options']['options']) ? $field['options']['options'] : '',
      ];
      $repeater_param = isset($field['options']['param']) ? $field['options']['param'] : '';
 ?>
  <div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>">
      <label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo $field['title']; ?></label>
      <div class="col-md-10">
      	<?php if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><p class="help-block"><?php echo $field['description']; ?></p><?php endif; ?>
        <?php echo widget('common/Repeater/render',[$repeater_attributes,$repeater_param]); ?>
      </div>
  </div>
