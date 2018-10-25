<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\homedatas\public/../apps/common\view\widget\repeater.html";i:1519837080;}*/ ?>
<div class="repeatable repeatable_<?php echo $id; ?>" >
    <table class="table table-bordered " >
      <thead style="background-color: #f0f0f0;">
        <tr>
        <?php if(is_array($options['0']) || $options['0'] instanceof \think\Collection || $options['0'] instanceof \think\Paginator): $i = 0; $__LIST__ = $options['0'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <th <?php if($option['type'] == 'image'): ?>style="width: 100px;text-align: center;" <?php endif; ?>><?php echo $option['title']; ?></th>
        <?php endforeach; endif; else: echo "" ;endif; ?>
          <th>操作</th>
        </tr>
      </thead>
      <tbody data-repeater-list="<?php echo $name; ?>">
        <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): $i = 0; $__LIST__ = $options;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new_option): $mod = ($i % 2 );++$i;?>
            <tr data-repeater-item >
              <?php if(is_array($new_option)){ if(is_array($new_option) || $new_option instanceof \think\Collection || $new_option instanceof \think\Paginator): if( count($new_option)==0 ) : echo "" ;else: foreach($new_option as $key=>$row): ?> 
                  <td>
                  <?php switch($row['type']): case "info": ?><?php echo (isset($row['value']) && ($row['value'] !== '')?$row['value']:''); break; case "select": ?>
                          <select name="[<?php echo $key; ?>]" class="form-control select-sm" <?php echo (isset($row['extra_attr']) && ($row['extra_attr'] !== '')?$row['extra_attr']:""); ?>>
                              <?php if(is_array($row['options']) || $row['options'] instanceof \think\Collection || $row['options'] instanceof \think\Paginator): if( count($row['options'])==0 ) : echo "" ;else: foreach($row['options'] as $option_key=>$option): ?>
                              <option value="<?php echo $option_key; ?>" ><?php echo $option; ?></option>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                          </select>
                      <?php break; case "image": ?><div class="repeater-img-field" style="min-height: 90px;"><input type="hidden" name="[<?php echo $key; ?>]" id="repeater-<?php echo $id; ?>-<?php echo $key; ?>-" value="<?php echo (isset($row['default']) && ($row['default'] !== '')?$row['default']:''); ?>"><span class="repeater-field-img"><img src="<?php echo (get_image($row['default'],'medium') ?: '/static/assets/img/noimage.gif'); ?>" width="90" data-url="<?php echo url('admin/Upload/attachmentLayer',['input_id_name'=>$id,'path_type'=>'picture','gettype'=>'single']); ?>" onclick="openAttachmentLayer(this);" style="cursor: pointer;"></span></div><?php break; default: ?>
                          <input type="<?php echo $row['type']; ?>" class="form-control input-sm" name="[<?php echo $key; ?>]" value="<?php echo (isset($row['default']) && ($row['default'] !== '')?$row['default']:''); ?>" placeholder="<?php echo (isset($row['placeholder']) && ($row['placeholder'] !== '')?$row['placeholder']:''); ?>">
                  <?php endswitch; ?>
                  </td>
                  <?php endforeach; endif; else: echo "" ;endif; } ?>
                <td><label data-repeater-delete class="label label-danger btn-sm" style="cursor: pointer;"><i class="fa fa-trash"></i></label></td>
          </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
          
      </tbody>
    </table>
    <button type="button" data-repeater-create class="btn btn-success btn-sm repeater-add-<?php echo $id; ?> fr mr-10" ><i class="fa fa-plus"></i> 添加</button>
</div>
<?php if($param['is_load_attachment_modal'] >= '1'): if($param['is_load_WebUploader_script']>0){  ?>
<!--       <script type="text/javascript" charset="utf-8" src="/static/libs/webuploader/js/webuploader.js"></script>
      <link href="/static/libs/webuploader/css/webuploader.css" type="text/css" rel="stylesheet"> -->
    <?php } ?>
    <script type="text/javascript">
        var EacooAttachmentOptions_<?php echo $id; ?> = {
            ismore:'single',
            currentImgElement:false
        };
    </script>

<script>
    //本地上传(分开写为了好控制)
    $(function () {

      //判断哪个图片字段选择
      $('body').on('click','.repeater-img-field', function() {
          var $this = $(this);
          var repeater_img_id =$this.children('input').attr('name');
          EacooAttachmentOptions_<?php echo $id; ?>.currentImgElement = repeater_img_id;
        })

         //图片选择器列表确认按钮
      $('#attachment_<?php echo $id; ?>_ok').click(function () {
          var id  = $("#attachment_<?php echo $id; ?>_ids").val();
          var src = $("#attachment_<?php echo $id; ?>_srcs").val();
          //插入数据
          var repeater_img_element=EacooAttachmentOptions_<?php echo $id; ?>.currentImgElement;//获取当前图片字段元素节点
            $("input[name='"+repeater_img_element+"']").val(id);
            $("input[name='"+repeater_img_element+"']").parent().find('.repeater-field-img').html(
                  '<img src="'+ src+'" width="90" data-url="<?php echo url("admin/Upload/attachmentLayer",["input_id_name"=>$id,"path_type"=>"picture","gettype"=>"single"]); ?>" onclick="openAttachmentLayer(this);" style="cursor: pointer;">'
            );
          $(".attachment-content").find('div.cover').hide();
      })
  })

/**
 * 设置附件输入框值
 * @param {[type]} inputName 输入框名
 * @param {[type]} ids       附件IDs
 * @param {[type]} srcs      附件SRCs
 */
function newSetAttachmentInputVal(inputName,ids,srcs) {
    if (ids.length>0 && srcs.length>0) {
        $("#"+inputName).val(ids);
        //插入数据
          var repeater_img_element = EacooAttachmentOptions_<?php echo $id; ?>.currentImgElement;//获取当前图片字段元素节点
            $("input[name='"+repeater_img_element+"']").val(ids);
            $("input[name='"+repeater_img_element+"']").parent().find('.repeater-field-img').html(
                  '<img src="'+ srcs+'" width="90" data-url="<?php echo url("admin/Upload/attachmentLayer",["input_id_name"=>$id,"path_type"=>"picture","gettype"=>"single"]); ?>" onclick="openAttachmentLayer(this);" style="cursor: pointer;">'
            );
          $(".attachment-content").find('div.cover').hide();
    }
    
}
</script>

<?php endif; if(!$param['is_load_script']){ ?>
    <script type="text/javascript" charset="utf-8" src="/static/libs/jquery-repeater/jquery.repeater.min.js"></script>
<?php } ?>
<script type="text/javascript">
    loadRepeaterWidget();
    
    function loadRepeaterWidget(argument) {
        $(document).ready(function () {
          'use strict';
          $('.repeatable_<?php echo $id; ?>').repeater({
              show: function () {
                  $(this).find(".repeater-field-img img").attr('src','/static/assets/img/noimage.gif');
                  $(this).slideDown();
              },
              hide: function (deleteElement) {
                  if(confirm('您确定要删除吗?')) {
                      $(this).slideUp(deleteElement);
                  }
              },
              ready: function (setIndexes) {

              }
          });
      });
    }
    
</script>