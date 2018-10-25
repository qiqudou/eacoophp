<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\phpStudy\WWW\homedatas\public/../apps/common\view\widget\wangeditor.html";i:1519982212;s:47:"../apps/common/view/builder/Fields/select2.html";i:1519982212;}*/ ?>
<?php 
    $load_select2=1;
 ?>
<div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>">
   <label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo $field['title']; ?></label>
   <div class="col-md-4">
        <select name="<?php echo $field['name']; ?>" id="<?php echo $field['name']; ?>" class="select2-container form-control" <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:''); ?>>
            <?php if(isset($field['options']['none'])): if(!(empty($field['options']['none']) || (($field['options']['none'] instanceof \think\Collection || $field['options']['none'] instanceof \think\Paginator ) && $field['options']['none']->isEmpty()))): ?><option value=''><?php echo $field['options']['none']; ?></option><?php endif; unset($field['options']['none']); else: ?><option value=''>请选择</option><?php endif; if(is_array($field['options']) || $field['options'] instanceof \think\Collection || $field['options'] instanceof \think\Paginator): if( count($field['options'])==0 ) : echo "" ;else: foreach($field['options'] as $option_key=>$option): if(is_array($option)): ?>
                    <option value="<?php echo $option_key; ?>" <?php if(isset($field['value'])): if($field['value'] == $option_key): ?> selected<?php endif; endif; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                            <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                        <?php endforeach; endif; else: echo "" ;endif; ?>>
                        <?php echo $option['title']; ?>
                    </option>
                <?php else: ?>
                    <option value="<?php echo $option_key; ?>" <?php if(isset($field['value'])): if($field['value'] == $option_key): ?> selected<?php endif; endif; ?>><?php echo $option; ?></option>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><div class="col-md-6 help-block"><i class="fa fa-info-circle color-info1"></i> <?php echo $field['description']; ?></div><?php endif; if($load_select2): ?>
        <link rel="stylesheet" type="text/css" href="/static/libs/select2/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="/static/libs/select2/css/select2-bootstrap.min.css">
        <script type="text/javascript" src="/static/libs/select2/js/select2.min.js" charset="utf-8"></script>
    <?php endif; ?>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#<?php echo $field['name']; ?>").select2();         
    });
    </script>
</div>
