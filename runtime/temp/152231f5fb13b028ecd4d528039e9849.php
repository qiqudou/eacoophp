<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"../apps/common/view/builder/Fields/multilayer_select.html";i:1519388616;}*/ ?>
<div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>"> 
    <label class="col-md-2 control-label"><?php echo $field['title']; ?></label>
    <div class="col-md-4">
        <select name="<?php echo $field['name']; ?>" class="form-control" <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:''); ?>>
            <?php if(is_array($field['options']) || $field['options'] instanceof \think\Collection || $field['options'] instanceof \think\Paginator): if( count($field['options'])==0 ) : echo "" ;else: foreach($field['options'] as $option_key=>$option): if(is_array($option)): ?>
                    <option value="<?php echo $option['id']; ?>" <?php if(isset($field['value'])): if($field['value'] == $option['id']): ?> selected<?php endif; endif; ?>>
                        <?php echo $option['title_show']; ?>
                    </option>
                <?php else: ?>
                    <option value="<?php echo $option['id']; ?>" <?php if(isset($field['value'])): if($field['value'] == $option['id']): ?> selected<?php endif; endif; ?>><?php echo $option; ?></option>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </select>

    </div>
</div>
