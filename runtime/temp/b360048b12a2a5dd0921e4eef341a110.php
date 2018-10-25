<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\homedatas\public/../apps/admin\view\extension\themes.html";i:1531545640;s:68:"D:\phpStudy\WWW\homedatas\public/../apps/admin/view/public/base.html";i:1534502324;s:46:"../apps/admin/view/public/document_header.html";i:1534502324;}*/ ?>
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
    .theme-item{padding:10px;}
    .block-content{background-color: #f5f5f5!important;margin:0 10px;border-radius: 3px;color: #666;border:1px solid #f0f0f0;}
    .theme-cover img{height: 230px;}
    .theme-logo {width: 100%;}
    .block-content h3{font-size: 16px;margin: 0 auto;padding: 20px 0;margin-bottom: 15px;color: #656565;border-bottom: 1px solid #d5d5d5;position: relative;white-space: nowrap;text-align: center;}
    .block-content h3::before {
        content: '';
        bottom: -10%;
        background: #ccc;
        left: 43%;
        width: 10px;
        height: 10px;
        position: absolute;
        border-radius: 50%;
    }

    .block-content h3::after {
        content: '';
        bottom: -10%;
        background: #ccc;
        right: 43%;
        width: 10px;
        height: 10px;
        position: absolute;
        border-radius: 50%;
    }

    .item-metas,.item-description{padding:0 10px;line-height: 26px;color: #888;}
    .item-description{font-size: 13px;height: 40px;}
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
            
<?php echo logic('admin/AppStore')->getAppStoreTabs('theme'); ?>
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">温馨提示</h3>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <p class="f13 color-6 pt-5">
        可在线安装、卸载、禁用、启用主题，同时支持本地安装。EacooPHP已上线应用市场，你可以发布你的免费或付费主题：<a href="<?php echo config('eacoo_api_url'); ?>/appstore/themes" target="_blank" ><?php echo config('eacoo_api_url'); ?>/appstore/themes</a>
     </p>
    </div>
    <div class="box-body no-padding">

    </div>
  </div>

             
    <div class="eacoo-tabs builder-form-tabs">
        <ul class="nav nav-tabs">
            <?php if(is_array($tab_list) || $tab_list instanceof \think\Collection || $tab_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                <li class="<?php if($from_type == $key) echo 'active'; ?>"><a class="reset-appstore-conent" href="<?php echo $tab['href']; ?>" <?php echo (isset($tab['extra_attr']) && ($tab['extra_attr'] !== '')?$tab['extra_attr']:''); ?>><?php echo $tab['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="form-group"></div>
    </div>
    <div class="builder-toolbar mt-10 oh">
       <div class="col-xs-12 col-sm-12 button-list clearfix">
          <button class="btn btn-info btn-sm " id="app-localupload"><i class="fa fa-cloud-upload"></i> 本地安装</button>
          <a class="btn btn-success btn-sm ajax-get" href="<?php echo url('admin/Theme/refresh'); ?>"><i class="fa fa-refresh"></i> 刷新缓存</a>
          <a title="重置主题" class="btn btn-primary btn-sm ajax-get confirm" confirm-info="重置主题后，将会取消所有正在使用的主题。" href="<?php echo url('admin/Theme/cancel'); ?>"> 重置主题</a>
          <button class="btn btn-default btn-sm" id="eacoo-userinfo" ><i class="fa fa-user"></i> 会员信息</button>
      </div>
    </div>

    <div class="builder formbuilder-box panel-body">

    <div class="row" id="appstore-content">    
      
   </div><!--row-->
 </div>
<script id="appstore_tpl" type="text/html">
  <% for (var i = 0; i < data.length; i ++) { %>
   <% var row = data[i]; %>
   <div class="col-md-4 theme-item"> 
    <div class="block-content">     
        <div class="theme-cover view-app-detail" data-name="<%= row.name %>" data-type="theme" style="cursor: pointer;">{{@row.logo}}</div>
        <h3><%= row.title %></h3>
        <div class="item-metas"><span class="meta-author"><i class="fa fa-user"></i> <a href="<?php echo config('eacoo_api_url'); ?>/appstore_theme/<%= row.name %>" target="_blank"><%= row.author %></a></span>
          <% if (row.status && row.status!='undefined') { %><span class="meta-status text-success pull-right">{{@row.status}}</span><% } %></div>
        <div class="item-description"><%= row.description %></div>
        <div class="ml-10 mt-10 mb-10">
            {{@row.right_button}}
        </div>
      </div>
  </div>

  <% } %>
  <% if(data.length==0){ %>
    <div class="tc no-found">
      <p>暂无主题，请前往<a href="<?php echo url('index',['from_type'=>'oneline']); ?>">主题市场</a>下载</p>
    </div>
  <% } %>
</script>

         <?php  }else{  ?>
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
            
<?php echo logic('admin/AppStore')->getAppStoreTabs('theme'); ?>
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">温馨提示</h3>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <p class="f13 color-6 pt-5">
        可在线安装、卸载、禁用、启用主题，同时支持本地安装。EacooPHP已上线应用市场，你可以发布你的免费或付费主题：<a href="<?php echo config('eacoo_api_url'); ?>/appstore/themes" target="_blank" ><?php echo config('eacoo_api_url'); ?>/appstore/themes</a>
     </p>
    </div>
    <div class="box-body no-padding">

    </div>
  </div>

              <div class="box-body">
                 
    <div class="eacoo-tabs builder-form-tabs">
        <ul class="nav nav-tabs">
            <?php if(is_array($tab_list) || $tab_list instanceof \think\Collection || $tab_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                <li class="<?php if($from_type == $key) echo 'active'; ?>"><a class="reset-appstore-conent" href="<?php echo $tab['href']; ?>" <?php echo (isset($tab['extra_attr']) && ($tab['extra_attr'] !== '')?$tab['extra_attr']:''); ?>><?php echo $tab['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="form-group"></div>
    </div>
    <div class="builder-toolbar mt-10 oh">
       <div class="col-xs-12 col-sm-12 button-list clearfix">
          <button class="btn btn-info btn-sm " id="app-localupload"><i class="fa fa-cloud-upload"></i> 本地安装</button>
          <a class="btn btn-success btn-sm ajax-get" href="<?php echo url('admin/Theme/refresh'); ?>"><i class="fa fa-refresh"></i> 刷新缓存</a>
          <a title="重置主题" class="btn btn-primary btn-sm ajax-get confirm" confirm-info="重置主题后，将会取消所有正在使用的主题。" href="<?php echo url('admin/Theme/cancel'); ?>"> 重置主题</a>
          <button class="btn btn-default btn-sm" id="eacoo-userinfo" ><i class="fa fa-user"></i> 会员信息</button>
      </div>
    </div>

    <div class="builder formbuilder-box panel-body">

    <div class="row" id="appstore-content">    
      
   </div><!--row-->
 </div>
<script id="appstore_tpl" type="text/html">
  <% for (var i = 0; i < data.length; i ++) { %>
   <% var row = data[i]; %>
   <div class="col-md-4 theme-item"> 
    <div class="block-content">     
        <div class="theme-cover view-app-detail" data-name="<%= row.name %>" data-type="theme" style="cursor: pointer;">{{@row.logo}}</div>
        <h3><%= row.title %></h3>
        <div class="item-metas"><span class="meta-author"><i class="fa fa-user"></i> <a href="<?php echo config('eacoo_api_url'); ?>/appstore_theme/<%= row.name %>" target="_blank"><%= row.author %></a></span>
          <% if (row.status && row.status!='undefined') { %><span class="meta-status text-success pull-right">{{@row.status}}</span><% } %></div>
        <div class="item-description"><%= row.description %></div>
        <div class="ml-10 mt-10 mb-10">
            {{@row.right_button}}
        </div>
      </div>
  </div>

  <% } %>
  <% if(data.length==0){ %>
    <div class="tc no-found">
      <p>暂无主题，请前往<a href="<?php echo url('index',['from_type'=>'oneline']); ?>">主题市场</a>下载</p>
    </div>
  <% } %>
</script>

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

<script type="text/javascript" src="/static/libs/artTemplate/template.js"></script>
<script type="text/javascript" src="/static/admin/js/eacoo.extension.js?v=<?php echo EACOOPHP_V; ?>" ></script>
<link href="/static/libs/webuploader/css/webuploader.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/static/libs/webuploader/js/webuploader.min.js"></script>
<script>
    var apptype = 'theme';
    var from_type = '<?php echo $from_type; ?>';
</script>

</body>
</html>