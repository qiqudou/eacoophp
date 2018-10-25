<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"D:\phpStudy\WWW\homedatas\public/../apps//common/view/builder/formbuilder.html";i:1520660938;s:46:"../apps/common/view/builder/Fields/hidden.html";i:1519388616;s:44:"../apps/common/view/builder/Fields/text.html";i:1519388616;s:46:"../apps/common/view/builder/Fields/select.html";i:1519388616;s:50:"../apps/common/view/builder/Fields/wangeditor.html";i:1519388616;}*/ ?>
<?php 
      if (strpos($field['name'],'[')) {
        $field['id']=str_replace(']','',str_replace('[','',$field['name']));
      }else{
      	$field['id']=$field['name'];
      }
      $field = array_merge($field,$field['options']);
      unset($field['options']);
 ?>
<div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>">
    <label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo $field['title']; ?></label>
    <div class="col-md-10">
    	<?php echo widget('common/editor/wangeditor',[$field]); if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><p class="help-block"><?php echo $field['description']; ?></p><?php endif; ?>
    </div>
</div>
