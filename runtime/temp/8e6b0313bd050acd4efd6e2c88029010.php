<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\homedatas\public/../apps/common\view\widget\picture.html";i:1519982212;}*/ ?>
<?php 
    $path_type = isset($field['options']['path_type'])? $field['options']['path_type']:'picture';
 ?>

<div class="controls picture">
    <div class="col-md-9" style="padding-bottom: 5px;">

    <input id="<?php echo $field['id']; ?>" class="attach" name="<?php echo $field['name']; ?>" type="hidden" value="<?php echo $field['value']; ?>" event-node="uploadinput">
    <div class="upload-img-box tc popup-gallery img-thumbnail pr">
        <div class="each">
            <?php if(empty($field['value']) || (($field['value'] instanceof \think\Collection || $field['value'] instanceof \think\Paginator ) && $field['value']->isEmpty())): ?>
                <img src="<?php echo get_image(0); ?>">
            <?php else: ?>
                <i onclick="admin_image.removeImage($(this),'<?php echo $field['value']; ?>')" class="fa fa-times-circle remove-attachment"></i> 
                <a href="<?php echo get_image($field['value']); ?>" title="点击查看大图">
                    <img src="<?php echo get_image($field['value']); ?>">
                </a>
               
            <?php endif; ?>
        </div>

    </div>
    <div>
      <span class="btn btn-info ml-10 mt-10 btn-sm" data-url="<?php echo url('admin/Upload/attachmentLayer',['input_id_name'=>$field['id'],'path_type'=>$path_type,'gettype'=>'single']); ?>" data-gettype="single" onclick="openAttachmentLayer(this);"><i class="fa fa-file-image-o"></i> 选择图片</span>
    </div>
</div>
</div>