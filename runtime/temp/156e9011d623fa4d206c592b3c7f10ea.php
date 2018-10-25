<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\phpStudy\WWW\homedatas\public/../apps//common/view/builder/formbuilder.html";i:1520660938;s:68:"D:\phpStudy\WWW\homedatas\public/../apps/admin/view/public/base.html";i:1534502324;s:46:"../apps/admin/view/public/document_header.html";i:1534502324;s:38:"../apps/common/view/builder/style.html";i:1519388616;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (isset($meta_title) && ($meta_title !== '')?$meta_title:''); ?>|<?php echo config('web_site_title'); ?>后台管理</title>   
    <link type="text/css" rel="stylesheet" href="/static/assets/css/bootstrap.min.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
   <link rel="stylesheet" type="text/css" href="/static/admin/css/AdminLTE.min.css" /><link rel="stylesheet" type="text/css" href="/static/admin/css/_all-skins.min.css" /><link rel="stylesheet" type="text/css" href="/static/assets/css/base.css" /><link rel="stylesheet" type="text/css" href="/static/libs/iCheck/all.css" /><link rel="stylesheet" type="text/css" href="/static/libs/toastr/toastr.min.css" />
   <link type="text/css" href="/static/admin/css/style.css?v=<?php echo EACOOPHP_V; ?>" rel="stylesheet" >
    <script type="text/javascript" src="/static/assets/js/jquery-1.12.4.min.js"></script>
    <!-- <script type="text/javascript" src="/static/assets/js/jquery-3.2.1.min.js"></script> -->  
    <script type="text/javascript">
        var EacooPHP = window.EacooPHP = {
            "eacoophp_version":"<?php echo EACOOPHP_V; ?>",
            "url_model":<?php echo (isset($url_model) && ($url_model !== '')?$url_model:'1'); ?>,//1重写模式，2兼容模式
            "root":'',
            "root_domain": "<?php echo \think\Request::instance()->domain(); ?>/admin.php", //当前网站地址
            "static": "/static", //静态资源地址
            "public": "/static/assets", //项目公共目录地址
            "uploads_url" :'/uploads/',
            "upload_driver":"<?php echo config('attachment_options.driver'); ?>",
            "cdn_domain":"<?php echo get_cdn_domain(); ?>",
            "eacoo_api_url":"<?php echo config('eacoo_api_url'); ?>",
        }
    </script>

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

    <style type="text/css">
hr{margin-left: 20px;}
/* Builderform样式 */
.builder .form-horizontal .control-label{color: #333;}
label.checkbox-label{margin-bottom: 15px;}
.webuploader-pick{border: none!important;}

.help-block{font-size: 13px;line-height: 24px;font-weight: 500;color: #777;padding-left: 0;}
.help-block:hover{color: #555;}
.help-block i.fa{font-size: 15px;}

.citys_field{margin-bottom: 10px;}
.citys_field select{border-radius: 0;box-shadow: none;border-color: #d2d6de;height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s}
/*上传个人图像*/
.upload-avatar-box{display: block;margin-top: 20px;width: 135px;height: 130px;line-height: 120px;}
.upload-avatar-box img{max-height: 120px;max-width: 125px;}
/*多图上传*/
.gallery-box-bg{background-color: #f0f0f0;padding: 10px 5px;margin-left:19%!important;}

.uploader-list .col-md-3{padding-left:5px;padding-right: 5px;}
.uploader-list .thumbnail{width: 100%;height: 135px;margin-bottom: 15px;}
.uploader-list .thumbnail img{max-width: 100%;height: 100%;}
/* Builderlist样式 */
#selectForm{display: inline;}
.builder-toolbar .form-group { margin-top: 0px; }
.icon-menu{top:33px;}

.builder_sub_title{font-size:13px;display: inline-block;border-radius:3px;color: #666;margin-top:10px;line-height: 26px;}
/*table*/
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{font-size: 13px;}
</style>


<body class="hold-transition skin-blue" style="background-color:#ecf0f5;">
<div class="iframe-wrapper">
    <section class="content-header">
        <!-- 面包屑导航 -->
         <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> <a href="<?php echo url('admin/dashboard/index'); ?>" class="opentab" tab-title='首页' data-iframe="true" tab-name="navtab-collapse-1">首页</a></a></li>
          <?php if(!(empty($parent_menu_list) || (($parent_menu_list instanceof \think\Collection || $parent_menu_list instanceof \think\Paginator ) && $parent_menu_list->isEmpty()))): if(is_array($parent_menu_list) || $parent_menu_list instanceof \think\Collection || $parent_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $parent_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="text-muted"><?php echo $vo['title']; ?></li>
            <?php endforeach; endif; else: echo "" ;endif; else: ?>
            <li class="active"><?php echo $meta_title; ?> <span class="color-warning eacoo-menu-collect" data-title="<?php echo $meta_title; ?>" data-url="<?php echo \think\Request::instance()->url(); ?>" title="标记为收藏" style="cursor: pointer;font-size: 13px;"> <i class="fa <?php if($is_menu_collected == '1'): ?>fa-star<?php else: ?>fa-star-o<?php endif; ?>"></i></span></li>
          <?php endif; ?>
          <div class="pull-right mr-10" style="margin-top: -10px;">
            <?php if(isset($page_config['self'])): ?><?php echo $page_config['self']; endif; if(isset($page_config['help'])): ?><a href="<?php echo (isset($page_config['help']) && ($page_config['help'] !== '')?$page_config['help']:''); ?>" class="color-6" title="帮助" target="_blank"><i class="fa fa-question-circle f15"></i></a><?php endif; if(isset($page_config['back'])): ?><button type="button" class="btn btn-box-tool f16" onclick="javascript:history.go(-1);"><i class="fa fa-reply"></i></button><?php endif; ?>
              <button type="button" class="btn btn-box-tool f16" onclick="javascript:location.reload();"><i class="fa fa-refresh"></i></button>
          </div>
        </ol>
     </section>
     <!--内容-->
     <section class="content pt-5">
         <?php if(isset($page_config['disable_panel']) && $page_config['disable_panel']===true){  ?>
            
                
    <div class="builder formbuilder-box">
      <div class="row">    
        <?php if(!(empty($page_tips) || (($page_tips instanceof \think\Collection || $page_tips instanceof \think\Paginator ) && $page_tips->isEmpty()))): ?>
            <!-- <div class="col-xs-11 col-sm-11 header-tip">
                <p class="builder_sub_title color-palette"><?php echo (isset($page_tips) && ($page_tips !== '')?$page_tips:""); ?></p>
            </div> -->
        <?php endif; ?>

        <div class="col-md-11" style="padding: 20px;margin-left:30px;border-radius:3px;">      
            <form action="<?php echo (isset($post_url) && ($post_url !== '')?$post_url:''); ?>" method="post" class="form-builder form-horizontal" data-validator-option="{theme:'bootstrap', timely:2, stopOnError:true}">
            <fieldset>
                <?php if(is_array($fieldList) || $fieldList instanceof \think\Collection || $fieldList instanceof \think\Paginator): $k = 0; $__LIST__ = $fieldList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($k % 2 );++$k;?>
                    <?php echo action('common/BuilderForm/fieldType',['field'=>$field],'builder'); endforeach; endif; else: echo "" ;endif; ?>
                <hr/>
                <div class="form-group">
                    <div class="col-md-10 col-xs-offset-2 mt-10 tc">
                     <?php if(is_array($button_list) || $button_list instanceof \think\Collection || $button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;?>
                        <div class="col-md-3 col-xs-6">
                            <button <?php echo $button['attr']; ?>><?php echo $button['title']; ?></button>
                        </div>
                     <?php endforeach; endif; else: echo "" ;endif; ?>

                  </div>
                </div>

                </fieldset>
            </form>

        </div> 
     </div>
 </div>

<?php echo $extra_html;  }else{  ?>
          <div class="box box-solid eacoo-box">
            <?php if(isset($show_box_header)): if($show_box_header == '1'): if(!(empty($tips) || (($tips instanceof \think\Collection || $tips instanceof \think\Paginator ) && $tips->isEmpty()))): ?><div class="box-header with-border">
                    <!-- <h3 class="box-title"><?php echo $meta_title; ?></h3> -->  
                    <p class="f12 color-6 pt-5">提示：<?php echo (isset($tips) && ($tips !== '')?$tips:""); ?></p>
                      
                  </div>
                  <?php endif; endif; endif; ?>
            <!-- Tab导航 -->
            <?php if(!(empty($tab_nav) || (($tab_nav instanceof \think\Collection || $tab_nav instanceof \think\Paginator ) && $tab_nav->isEmpty()))): ?>
                <div class="box-body pb-0">
                    <div class="eacoo-tabs">
                        <div class="">
                            <ul class="nav nav-tabs">
                                <?php if(is_array($tab_nav['tab_list']) || $tab_nav['tab_list'] instanceof \think\Collection || $tab_nav['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_nav['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                                    <li class="<?php if($tab_nav['current'] == $key) echo 'active'; ?>"><a href="<?php echo $tab['href']; ?>" <?php echo (isset($tab['extra_attr']) && ($tab['extra_attr'] !== '')?$tab['extra_attr']:''); ?>><?php echo $tab['title']; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
              <div class="box-body">
                    
    <div class="builder formbuilder-box">
      <div class="row">    
        <?php if(!(empty($page_tips) || (($page_tips instanceof \think\Collection || $page_tips instanceof \think\Paginator ) && $page_tips->isEmpty()))): ?>
            <!-- <div class="col-xs-11 col-sm-11 header-tip">
                <p class="builder_sub_title color-palette"><?php echo (isset($page_tips) && ($page_tips !== '')?$page_tips:""); ?></p>
            </div> -->
        <?php endif; ?>

        <div class="col-md-11" style="padding: 20px;margin-left:30px;border-radius:3px;">      
            <form action="<?php echo (isset($post_url) && ($post_url !== '')?$post_url:''); ?>" method="post" class="form-builder form-horizontal" data-validator-option="{theme:'bootstrap', timely:2, stopOnError:true}">
            <fieldset>
                <?php if(is_array($fieldList) || $fieldList instanceof \think\Collection || $fieldList instanceof \think\Paginator): $k = 0; $__LIST__ = $fieldList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($k % 2 );++$k;?>
                    <?php echo action('common/BuilderForm/fieldType',['field'=>$field],'builder'); endforeach; endif; else: echo "" ;endif; ?>
                <hr/>
                <div class="form-group">
                    <div class="col-md-10 col-xs-offset-2 mt-10 tc">
                     <?php if(is_array($button_list) || $button_list instanceof \think\Collection || $button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;?>
                        <div class="col-md-3 col-xs-6">
                            <button <?php echo $button['attr']; ?>><?php echo $button['title']; ?></button>
                        </div>
                     <?php endforeach; endif; else: echo "" ;endif; ?>

                  </div>
                </div>

                </fieldset>
            </form>

        </div> 
     </div>
 </div>

<?php echo $extra_html; ?>

              </div>
          </div>
         <?php } ?>
    </section>

</div>
<script type="text/javascript" src="/static/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/assets/js/jquery.cookie.js"></script>

<!-- Slimscroll -->
<script src="/static/libs/slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="/static/libs/fastclick/fastclick.min.js"></script>
<script type="text/javascript" src="/static/admin/js/app.min.js" ></script>
<!-- <script  type="text/javascript" src="/static/assets/js/jquery.nestable.js"></script> -->
<script  type="text/javascript" src="/static/libs/nice-validator/jquery.validator.min.js?local=zh-CN"></script>
<!-- <script type="text/javascript" src="/static/assets/js/think.js"></script> -->
<script type="text/javascript" src="/static/libs/layer/layer.js"></script>

<script type="text/javascript" src="/static/libs/iCheck/icheck.min.js"></script>

<script type="text/javascript" src="/static/libs/toastr/toastr.min.js"></script>

<script type="text/javascript" src="/static/admin/js/common.js?v=<?php echo EACOOPHP_V; ?>" ></script>
<script type="text/javascript" src="/static/admin/js/eacoo.js?v=<?php echo EACOOPHP_V; ?>" ></script>
<script type="text/javascript" src="/static/admin/js/base.js?v=<?php echo EACOOPHP_V; ?>" ></script>
    

    <?php if(isset($colorPicker)): if($colorPicker): ?>
            <script type="text/javascript" src="/static/admin/js/jquery.simple-color.js"></script>
            <script>
                $(function(){
                    $('.simple_color_callback').simpleColor({
                        boxWidth:20,
                        cellWidth: 20,
                        cellHeight: 20,
                        chooserCSS:{ 'z-index': 500 },
                        displayCSS: { 'border': 0 ,
                            'width': '32px',
                            'height': '32px',
                            'margin-top': '-32px'
                        },
                        onSelect: function(hex, element) {
                            $('#tw_color').val('#'+hex);
                        }
                    });
                    $('.simple_color_callback').show();
                    $('.simpleColorContainer').css('margin-left','105px');
                    $('.simpleColorDisplay').css('border','1px solid #DFDFDF');
                });
                var setColorPicker=function(obj){
                    var color=$(obj).val();
                    $(obj).parents('.color-picker').find('.simpleColorDisplay').css('background',color);
                }
            </script>
        <?php endif; endif; if(isset($load_select2)): if($load_select2): ?>
        <link rel="stylesheet" type="text/css" href="/static/libs/select2/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="/static/libs/select2/css/select2-bootstrap.min.css">
        <script type="text/javascript" src="/static/libs/select2/js/select2.min.js" charset="utf-8"></script>
        <?php endif; endif; if(isset($magnific_popup)): if($magnific_popup): ?>
            <link type="text/css" rel="stylesheet" href="/static/libs/magnific/magnific-popup.css"/>
            <script type="text/javascript" src="/static/libs/magnific/jquery.magnific-popup.min.js"></script>
        <?php endif; endif; ?>
    <script type="text/javascript">
        //icheck
        $('input').iCheck({
              checkboxClass:'icheckbox_minimal-blue',
              radioClass:'iradio_minimal-blue',
              increaseArea:'20%' // optional
        });
    </script>

</body>
</html>