<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\WWW\homedatas\public/../apps/common\view\widget\wangeditor.html";i:1519982212;}*/ ?>
<?php  if(\Think\Hook::get('adminEditor') && MODULE_NAME == 'admin'){ ?>
    <label class="textarea">
        <textarea name="<?php echo $name; ?>" id="<?php echo $id; ?>"><?php echo (isset($value) && ($value !== '')?$value:''); ?></textarea>
        <?php echo hook('adminEditor', array('id'=>$id,'value'=>$value)); ?>
    </label>

<?php }elseif(\think\Hook::get('editor')){ ?>
    <label class="textarea">
        <textarea name="<?php echo $name; ?>" id="<?php echo $id; ?>"><?php echo (isset($value) && ($value !== '')?$value:''); ?></textarea>
        <?php echo hook('editor', array('id'=>$id,'value'=>$value)); ?>
    </label>
<?php }else{

 if($is_load_script): ?>
    <link rel="stylesheet" type="text/css" href="/static/libs/wangeditor/wangEditor-plugins.css">
    <script type="text/javascript" src="/static/libs/wangeditor/wangEditor.min.js"></script>
    <script type="text/javascript" src="/static/libs/wangeditor/wangEditor-plugins.js?v=0.0.1"></script>
<?php endif; ?>
<div id="<?php echo $id; ?>_editor" style="<?php echo (isset($style) && ($style !== '')?$style:''); ?>"><?php if(!(empty($value) || (($value instanceof \think\Collection || $value instanceof \think\Paginator ) && $value->isEmpty()))): ?><p><?php echo (isset($value) && ($value !== '')?$value:''); ?></p><?php endif; ?></div>
<textarea id="<?php echo $id; ?>" name="<?php echo $name; ?>" style="display: none;width:<?php echo (isset($width) && ($width !== '')?$width:'100%'); ?>;height:<?php echo (isset($height) && ($height !== '')?$height:'300px'); ?>;"></textarea>

<!--这里引用jquery和wangEditor.js-->
<script type="text/javascript">
    var E = window.wangEditor
    var editor_<?php echo $id; ?> = new E('#<?php echo $id; ?>_editor')
    var $textarea_<?php echo $id; ?> = $('#<?php echo $id; ?>')
    editor_<?php echo $id; ?>.customConfig.onchange = function (html) {
        // 监控变化，同步更新到 textarea
        $textarea_<?php echo $id; ?>.val(html)
    }
    <?php if(!(empty($menus) || (($menus instanceof \think\Collection || $menus instanceof \think\Paginator ) && $menus->isEmpty()))): ?>
        editor_<?php echo $id; ?>.customConfig.menus =[<?php echo $menus; ?>];//配置工具菜单
    <?php else: ?>
        editor_<?php echo $id; ?>.customConfig.menus ="";
    <?php endif; ?>
    // 配置自定义表情，在 create() 之前配置
    // editor_<?php echo $id; ?>.customConfig.emotions = {
    //     // 支持多组表情
    //     // 第一组，id叫做 'default' 
    //     'default': {
    //         title: '默认',  // 组名称
    //         type: 'image',
    //         content: '/static/libs/wangeditor/emotions/default.data'
    //     },
    //     // 第二组，id叫做'weibo'
    //     'weibo': {
    //         title: '微博表情',  // 组名称
    //         type: 'image',
    //         content: '/static/libs/wangeditor/emotions/weibo.data'
    //     }
    //     // 下面还可以继续，第三组、第四组、、、
    // };
    editor_<?php echo $id; ?>.customConfig.zIndex = 10;
    editor_<?php echo $id; ?>.customConfig.uploadImgShowBase64 = true   // 使用 base64 保存图片
    editor_<?php echo $id; ?>.customConfig.uploadImgServer = "<?php echo $upload['upload_img_server']; ?>";  // 上传图片到服务器
    // 限制一次最多上传 5 张图片
    editor_<?php echo $id; ?>.customConfig.uploadImgMaxLength = 5
    editor_<?php echo $id; ?>.customConfig.uploadFileName = 'file'
    editor_<?php echo $id; ?>.customConfig.uploadImgParams = {
        path_type:'<?php echo (isset($upload['path_type']) && ($upload['path_type'] !== '')?$upload['path_type']:"wangeditor"); ?>',
        uploadtype: 'picture',
        upload_from:'wangeditor'//请求来源
    };
    editor_<?php echo $id; ?>.customConfig.uploadImgHooks = {
        before: function (xhr, editor, files) {
            // 图片上传之前触发
            // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象，files 是选择的图片文件
            
            // 如果返回的结果是 {prevent: true, msg: 'xxxx'} 则表示用户放弃上传
            // return {
            //     prevent: true,
            //     msg: '放弃上传'
            // }
        },
        success: function (xhr, editor, result) {
            // 图片上传并返回结果，图片插入成功之后触发
            // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象，result 是服务器端返回的结果
        },
        fail: function (xhr, editor, result) {
            // 图片上传并返回结果，但图片插入错误时触发
            // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象，result 是服务器端返回的结果
        },
        error: function (xhr, editor) {
            // 图片上传出错时触发
            // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象
        },
        timeout: function (xhr, editor) {
            // 图片上传超时时触发
            // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象
        },

        // 如果服务器端返回的不是 {errno:0, data: [...]} 这种格式，可使用该配置
        // （但是，服务器端返回的必须是一个 JSON 格式字符串！！！否则会报错）
        customInsert: function (insertImg, result, editor) {
            // 图片上传并返回结果，自定义插入图片的事件（而不是编辑器自动插入图片！！！）
            // insertImg 是插入图片的函数，editor 是编辑器对象，result 是服务器端返回的结果

            // 举例：假如上传图片成功后，服务器端返回的是 <?php echo url("","",true,false);?> 这种格式，即可这样插入图片：
            var url = result.data.url
            insertImg(url)

            // result 必须是一个 JSON 格式字符串！！！否则报错
        }
    }
    // 通过 url 参数配置 debug 模式。url 中带有 wangeditor_debug_mode=1 才会开启 debug 模式
    editor_<?php echo $id; ?>.customConfig.debug = location.href.indexOf('wangeditor_debug_mode=1') > 0;
    editor_<?php echo $id; ?>.create();
    // 初始化 textarea 的值
    $textarea_<?php echo $id; ?>.val(editor_<?php echo $id; ?>.txt.html());
    E.fullscreen.init('#<?php echo $id; ?>_editor');
    //E.switchCode.init('#<?php echo $id; ?>_editor');
    <?php if($picturesModal == '1'): ?>
        E.picturesModal.init('#<?php echo $id; ?>_editor',"<?php echo (isset($pictures_dialog['url']) && ($pictures_dialog['url'] !== '')?$pictures_dialog['url']:''); ?>");
        var EditorObj = editor_<?php echo $id; ?>;//定义wangeditor编辑器对象
    <?php endif; ?>
     
     
</script>

<?php } ?>