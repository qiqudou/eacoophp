<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\homedatas\public/../apps/admin\view\dashboard\index.html";i:1519388616;s:58:"D:\phpStudy\WWW\homedatas\apps\admin\view\public\base.html";i:1534502324;s:46:"../apps/admin/view/public/document_header.html";i:1534502324;}*/ ?>
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
            
            
  <!--此页面主体内容-->
  <div class="dashboard-container">
  <div class="row">
     <?php echo hook('AdminIndex'); ?>
      <div class="col-md-7">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">系统信息</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
           <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                  <?php if(is_array($server_info) || $server_info instanceof \think\Collection || $server_info instanceof \think\Paginator): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;if($mod == '0'): ?><tr><?php endif; ?>
                      <td><?php echo $key; ?>：<span style="font-weight:normal!important;"><?php echo $info; ?></span></td>
                        <?php if($i == count($server_info)): ?></tr>
                      <?php else: if($mod == '1'): ?></tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
           </div>
                 
        </div>
      </div>  

      <div class="col-md-5">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">官方动态</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body pt-0" id="eacoo_news">
            <table class="table table-condensed f14">
              <tbody>
              <?php if(is_array($eacoo_news_list['data']) || $eacoo_news_list['data'] instanceof \think\Collection || $eacoo_news_list['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $eacoo_news_list['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                  <tr>
                    <td><a href="<?php echo $row['href']; ?>" target="_blank"><?php echo $row['title']; ?></a></td>
                  </tr>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div> 

  </div>

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
            
              <div class="box-body">
                
  <!--此页面主体内容-->
  <div class="dashboard-container">
  <div class="row">
     <?php echo hook('AdminIndex'); ?>
      <div class="col-md-7">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">系统信息</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
           <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                  <?php if(is_array($server_info) || $server_info instanceof \think\Collection || $server_info instanceof \think\Paginator): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;if($mod == '0'): ?><tr><?php endif; ?>
                      <td><?php echo $key; ?>：<span style="font-weight:normal!important;"><?php echo $info; ?></span></td>
                        <?php if($i == count($server_info)): ?></tr>
                      <?php else: if($mod == '1'): ?></tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
           </div>
                 
        </div>
      </div>  

      <div class="col-md-5">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">官方动态</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body pt-0" id="eacoo_news">
            <table class="table table-condensed f14">
              <tbody>
              <?php if(is_array($eacoo_news_list['data']) || $eacoo_news_list['data'] instanceof \think\Collection || $eacoo_news_list['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $eacoo_news_list['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                  <tr>
                    <td><a href="<?php echo $row['href']; ?>" target="_blank"><?php echo $row['title']; ?></a></td>
                  </tr>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div> 

  </div>

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

<script type="text/javascript">
  $(function(){ 
    //驱动提示
    <?php if(config('attachment_options.driver')=='local' || !config('attachment_options.driver')){ ?>
      var eacooadmin_localdriver_tip = sessionStorage.getItem('eacooadmin_localdriver_tip');
      if (eacooadmin_localdriver_tip!=1) {
          parent.layer.alert('欢迎使用EacooPHP系统，请优先配置/开启 上传驱动（Tip:前往插件市场安装对象存储服务插件） ，让您的数据更安全可靠，数据掌握在自己手中。<br/>如因未配置/开启 对象云存储服务，造成的数据丢失，由您自行负责！！快去配置吧~<br/>', {icon: 6,btn: ['去配置','不再提醒'],
          yes: function(index, layero){
            parent.layer.closeAll();
            redirect('<?php echo url("admin/config/attachmentoption"); ?>');
          },
          btn2: function(index, layero){
              var storage_data = 1;
              sessionStorage.setItem('eacooadmin_localdriver_tip',storage_data);
          }}); 
      }
      
    <?php } ?>
  })
</script>

</body>
</html>