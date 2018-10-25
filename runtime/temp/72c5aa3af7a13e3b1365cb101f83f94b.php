<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"../apps/common/view/builder/Fields/radio.html";i:1519837080;s:48:"../apps/common/view/builder/Fields/checkbox.html";i:1534502324;}*/ ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
   <div class="form-group item_<?php echo $field['name']; ?> <?php echo (isset($field['extra_class']) && ($field['extra_class'] !== '')?$field['extra_class']:''); ?>">
   <label for="<?php echo $field['name']; ?>" class="col-md-2 control-label"><?php echo $field['title']; ?></label>
    <div class="col-md-8">       
      <?php $num = '0'; ?>             
          <div class="checkbox checkbox-primary fl pr-20">
            <?php if(is_array($field['options']) || $field['options'] instanceof \think\Collection || $field['options'] instanceof \think\Paginator): if( count($field['options'])==0 ) : echo "" ;else: foreach($field['options'] as $option_key=>$option): $num++;if(is_array($option)): ?>

                    <label for="<?php echo $field['name']; ?><?php echo $option_key; ?>" class="checkbox-label<?php echo $num; ?>"><input type="checkbox" id="<?php echo $field['name']; ?><?php echo $option_key; ?>" class="checkbox" name="<?php echo $field['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if($field['value'] == $option_key): ?> checked<?php endif; ?> <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                            <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                        <?php endforeach; endif; else: echo "" ;endif; ?>>
                        
                   <?php echo $option['title']; ?></label>
                <?php else: ?>

                        <label class="checkbox-label checkbox-label<?php echo $num; ?>" >
                          <input type="checkbox" name="<?php echo $field['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(isset($field['value'])): if(in_array(($option_key), is_array($field['value'])?$field['value']:explode(',',$field['value']))): ?> checked<?php endif; endif; ?> <?php echo (isset($field['extra_attr']) && ($field['extra_attr'] !== '')?$field['extra_attr']:''); ?>>
                         <?php echo $option; ?>
                        </label>

                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php if(!(empty($field['description']) || (($field['description'] instanceof \think\Collection || $field['description'] instanceof \think\Paginator ) && $field['description']->isEmpty()))): ?><p class="help-block"><i class="fa fa-info-circle color-info1"></i> <?php echo $field['description']; ?></p><?php endif; ?>
      </div>
    </div>
