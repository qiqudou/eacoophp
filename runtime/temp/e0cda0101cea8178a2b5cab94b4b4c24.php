<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\phpStudy\WWW\homedatas\public/../apps/common\view\widget\wangeditor.html";i:1519982212;s:73:"D:\phpStudy\WWW\homedatas\public/../apps/common\view\widget\pictures.html";i:1519956708;}*/ ?>
<?php 
    $path_type = isset($field['options']['path_type'])? $field['options']['path_type']:'picture';
 ?>
<style type="text/css">
/*多图上传*/
.gallery-box-bg{background-color: #f0f0f0;padding: 10px 5px;margin-left:10px;}

.uploader-list .col-md-3{padding-left:5px;padding-right: 5px;}
.uploader-list .thumbnail{width: 100%;height: 135px;margin-bottom: 15px;}
.uploader-list .thumbnail img{max-width: 100%;height: 100%;}
</style>
<div class="controls pictures">
    <div class="" style="padding-bottom: 5px;">
        <span class="btn btn-info ml-10 btn-sm" data-url="<?php echo url('admin/Upload/attachmentLayer',['input_id_name'=>$field['id'],'path_type'=>$path_type,'gettype'=>'multiple']); ?>" data-gettype="multiple" onclick="openAttachmentLayer(this);"><i class="fa fa-photo"></i> 选择多图</span>
        <input class="attach" type="hidden" id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>" value="<?php echo (isset($field['value']) && ($field['value'] !== '')?$field['value']:''); ?>"/>
    </div>
    <?php if(!(empty($field['tip']) || (($field['tip'] instanceof \think\Collection || $field['tip'] instanceof \think\Paginator ) && $field['tip']->isEmpty()))): ?><div class="help-block col-md-10 fn" style="color:#E74C3C;padding-left: 20px;"><?php echo $field['tip']; ?></div><?php endif; ?>
    <div id="<?php echo $field['id']; ?>-gallery-box" class="uploader-list col-md-10 img-box <?php if(!(empty($field['value']) || (($field['value'] instanceof \think\Collection || $field['value'] instanceof \think\Paginator ) && $field['value']->isEmpty()))): ?>gallery-box-bg<?php endif; ?>">
       <?php if(!(empty($images) || (($images instanceof \think\Collection || $images instanceof \think\Paginator ) && $images->isEmpty()))): if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): if(!(empty($img) || (($img instanceof \think\Collection || $img instanceof \think\Paginator ) && $img->isEmpty()))): ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                        <i class="fa fa-times-circle remove-attachment"></i>
                        <img class="img" src="<?php echo get_image($img); ?>" data-id="<?php echo $img; ?>">
                        </div>
                    </div>
                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
</div>
<script>
$(function () {
    // 删除图片
    $('body').on('click', '#<?php echo $field['id']; ?>-gallery-box .remove-attachment', function() {
        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
        if (!ready_for_remove_id) {
            updateAlert('错误', 'danger');
        }
        var current_picture_ids = $('#<?php echo $field['id']; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
        current_picture_ids.splice($.inArray(ready_for_remove_id,current_picture_ids),1); //从数组中删除待删除的图片ID
        $('#<?php echo $field['id']; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
        $(this).closest('.col-md-3').remove(); //删除图片预览图
    });

})
</script>