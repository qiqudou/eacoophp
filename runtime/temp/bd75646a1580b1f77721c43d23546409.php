<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"D:\phpStudy\WWW\homedatas\public/../apps/admin\view\index\index.html";i:1534502324;s:60:"D:\phpStudy\WWW\homedatas\apps\admin\view\public\header.html";i:1519727950;s:46:"../apps/admin/view/public/document_header.html";i:1534502324;s:58:"D:\phpStudy\WWW\homedatas\apps\admin\view\public\left.html";i:1531545640;s:60:"D:\phpStudy\WWW\homedatas\apps\admin\view\public\footer.html";i:1535261370;}*/ ?>
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
<body class="hold-transition skin-purple sidebar-mini fixed">
<!-- <body class="hold-transition skin-blue sidebar-mini fixed"> -->
<div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo url('admin/index/index'); ?>" class="logo" >
       <img class="logo-img" src="/eacoophp_logo_v1.png">  <span class="logo-lg"><b>Eacoo</b>PHP</span>
      </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <?php if(!IS_MOBILE){ ?>
        <script id="collect_top_menus" type="text/html">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-star" style="font-size: 20px!important;"></i></a>
            <ul class="dropdown-menu" role="menu">
                <% for (var i = 0; i < data.length; i ++) { %>
                <% var vo = data[i]; %>
                  <li><a href="<%=vo.url %>" class="opentab" tab-name="navtab-collapse-<%=vo.title %>" style="font-weight:bold!important;"><i class="fa fa-circle-o"></i> <%=vo.title %></a></li>
                <% } %>
                <% if (data.length==0) { %>
                    <li class="f13 ml-10 color-6">Tips: 点击<i class="fa fa-star-o"></i>可添加菜单收藏</li>
                <% } %>
            </ul>
        </script>
        <ul class="nav navbar-nav">
          <li id="top-collect-menus"></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud"></i> 应用中心<span class="label label-danger">新</span> <!-- <span class="caret"></span> --></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo url('admin/modules/index'); ?>" class="opentab" tab-title="应用中心-模块" tab-name="navtab-collapse-app-modules"><img src="/static/admin/img/extension/module.svg" width="16"> 模块</a></li>
                <li><a href="<?php echo url('admin/plugins/index'); ?>" class="opentab" tab-title="应用中心-插件" tab-name="navtab-collapse-app-plugins"><img src="/static/admin/img/extension/plugin.svg" width="16"> 插件</a></li>
                <li><a href="<?php echo url('admin/theme/index'); ?>" class="opentab" tab-title="应用中心-主题" tab-name="navtab-collapse-app-themes"><img src="/static/admin/img/extension/theme.svg" width="16"> 主题</a></li>
              </ul>
            </li>
        </ul>
      <?php } ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo (isset($current_message_count) && ($current_message_count !== '')?$current_message_count:'0'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">你有<?php echo (isset($current_message_count) && ($current_message_count !== '')?$current_message_count:'0'); ?>条消息</li>
              <li class="msg-ul">
                <!-- inner menu: contains the actual data -->
                <ul class="menu msg-list">
                <?php if(isset($current_messages)): if(is_array($current_messages) || $current_messages instanceof \think\Collection || $current_messages instanceof \think\Paginator): $i = 0; $__LIST__ = $current_messages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?>
                      <li>
                      <a href="<?php echo url('User/Message/message_detail',array('to_uid'=>$message['from_uid'])); ?>" class="popover-toggle" tabindex="0" data-trigger="hover" role="button" data-toggle="popover" data-trigger="focus" data-content="<?php echo $message['content']; ?>">
                        <div class="pull-left">
                          <img src="<?php echo root_full_path($message['fromuid_avatar']); ?>" class="img-circle">
                        </div>
                        <h4><?php echo $message['title']; ?><small><i class="fa fa-clock-o"></i> <?php echo $message['create_time']; ?></small>
                        </h4>
                        <p><?php echo cutStr($message['content'],18); ?></p>
                      </a>
                    </li>
                  <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo url('user/Message/messages',['box_type'=>'inbox']); ?>">查看所有消息</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">有0条通知</li>
              <li>

                <ul class="menu">
                <li>
                    <a href="<?php echo url('Sns/Funds/withdrawals'); ?>" class="f13 color-6">
                      <i class="fa fa-info text-yellow"></i> 在申请提现元
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">查看所有</a></li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo (root_full_path($current_user['avatar']) ?: '/static/assets/img/default-avatar.png'); ?>" class="user-image" alt="<?php echo $current_user['nickname']; ?>">
              <span class="hidden-xs"><?php echo $current_user['nickname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (root_full_path($current_user['avatar']) ?: '/static/assets/img/default-avatar.png'); ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $current_user['nickname']; ?> - 
                  <small>注册时间：<?php echo $current_user['reg_time']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--<li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">关注</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">朋友</a>
                  </div>
                </div>

              </li>-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo url('user/user/profile',array('uid'=>$current_user['uid'])); ?>" class="btn btn-default btn-flat opentab" tab-name="navtab-collapse-profile">个人资料</a>
                  <a href="<?php echo url('user/user/resetPassword',['uid'=>$current_user['uid']]); ?>" class="btn btn-default btn-flat opentab" tab-name="navtab-collapse-resetPassword">修改密码</a>
                </div>
                <div class="pull-right">
                  <a href="javascript:void(0);" class="loginout btn btn-default btn-flat">退出</a>
                </div>
              </li>
            </ul>
          </li>
          <li data-toggle="tooltip" data-placement="bottom" title="" data-original-title="清除缓存">
            <a class="ajax-get" href="<?php echo url('admin/index/delcache'); ?>"><i class="fa f16 fa-trash-o"></i></a>
          </li>
          <li data-toggle="tooltip" data-placement="bottom" title="" data-original-title="打开前台">
            <a href="/" target="_blank"><i class="fa fa-desktop"></i></a>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar sidebar-wrapper">
    <section class="sidebar" id="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <a href="<?php echo url('user/User/profile',['uid'=>$current_user['uid']]); ?>" class="opentab" tab-name="navtab-collapse-profile" data-selftabhtml="个人资料"><img src="<?php echo (root_full_path($current_user['avatar']) ?: '/static/assets/img/default-avatar.svg'); ?>" class="img-circle" style="width: 100%;max-width: 45px;height: auto;" alt=""></a>
        </div>
        <div class="pull-left info">
          <p><a href="<?php echo url('user/User/profile',['uid'=>$current_user['uid']]); ?>" class="opentab" tab-title='个人资料' tab-name="navtab-collapse-profile"><?php echo $current_user['nickname']; ?></a></p>
          <i class="fa fa-circle text-success"></i> [<span class="loginout f12">退出</span>]
        </div>
      </div>
      <ul class="sidebar-menu" id="sidebar-menus">
       
      </ul>
    </section>
  </aside>

  <script id="sidebar_menus" type="text/html">
    <li class="header">MAIN NAVIGATION</li>
    <% for (var i = 0; i < data.length; i ++) { %>
        <% var vo = data[i]; %>
        <% var child = data[i]._child; %>
        <li class="<% if(child){ %> treeview <% }else{ %>no_tree<% } %>">
          <a href="<% if(child){ %>#<% }else{ %> <%=vo.url %> <% } %>" <% if(!child){ %> class="opentab" tab-name="navtab-collapse-<%=vo.id %>" <% } %> >
              <i class="fa <% if(vo.icon){ %> {{vo.icon}} <% }else{ %>fa-circle-o <% } %>"></i>
                <span>{{vo.title}}</span>
                <% if(child){ %><i class="fa fa-angle-left pull-right"></i> <% } %>
            </a>
          <% if(child){ %>
          <ul class="treeview-menu">
            <% for (var j = 0; j < child.length; j ++) { %>
                <% var v = child[j]; %>
                <% var _child = child[j]._child; %>
                <% if(!_child){ %>
                  <li ><a href="{{v.url}}" class="opentab" tab-name="navtab-collapse-<%=v.id %>"><i class="fa <% if(v.icon){ %> {{v.icon}} <% }else{ %>fa-circle-o <% } %>"></i> <%=v.title %></a> </li>
                  <% }else{ %>
                   <li ><a href="{{v.url}}" class="opentab" tab-name="navtab-collapse-<%=v.id %>"><i class="fa <% if(v.icon){ %> {{v.icon}} <% }else{ %>fa-circle-o <% } %>"></i> <%=v.title %> <i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu">
                        <% for (var k = 0; k < _child.length; k ++) { %>
                            <% var _v = child[j]; %>
                            <li><a href="{{_v.url}}" class="opentab" tab-name="navtab-collapse-<%=v.id %>"><i class="fa f<% if(_v.icon){ %> {{_v.icon}} <% }else{ %>fa-circle-o <% } %>"></i> <%=_v.title %></a></li>
                        <% } %>
              
                   </ul>
                    </li>
                <% } %>
            <% } %>             
         </ul>
         <% } %>
      </li>
    <% } %>
    <li class="header">LABELS</li>
    <li><a href="https://forum.eacoophp.com" target="_blank"><i class="fa fa-circle-o text-red"></i> <span>交流社区</span></a></li>
    <li><a href="https://www.kancloud.cn/youpzt/eacoo" target="_blank"><i class="fa fa-circle-o text-yellow"></i> <span>开发文档</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>联系我们</span></a></li>

    <% if (data.length==0) { %>
        <div class="no-data-div">
          <div class="no-data-icon">
            <i class="iconfont">&#xe612;</i>
          </div>
          <dl>
            <dt>暂无菜单</dt>
            <dd>数据出错</dd>
          </dl>
          
        </div>
    <% } %>
</script>

<style type="text/css">
    .toast-top-right{top: 56px!important;}
</style>
<div class="content-wrapper">
	<!-- 多标签后台 -->
    <nav class="navbar navbar-default eacoo-tab-nav" role="navigation">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#" id="tab-left"><i class="fa fa-caret-left"></i></a></li>
            </ul>
            <div class="eacoo-tab-wrap clearfix">
                <ul class="nav navbar-nav nav-close eacoo-tab">
                    <li class="active" >
                        <a href="#navtab-collapse-1" role="tab" data-toggle="tab"><i class="fa fa-dashboard"></i> <span>首页</span></a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="tab-right"><i class="fa fa-caret-right"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">操作 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="close-all">关闭所有</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
     <div class="tab-content eacoo-tab-content">

		<div role="tabpanel" class="dashboard-container tab-pane fade in active" id="navtab-collapse-1">
	   		<iframe name="navtab-collapse-1" src="<?php echo url('admin/dashboard/index'); ?>" class="iframe"></iframe>
	  	</div><!--dashboard end-->

	</div>
</div>

<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content" id="control-sidebar-tab-content">

      <!-- /.tab-pane -->
    </div>
  </aside>

<!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2017-2018 <a href="<?php echo config('eacoo_api_url'); ?>" target="_blank">EacooPHP</a>.</strong> 保留所有权利。
    <div class="pull-right hidden-xs">
        <?php if(isset($eacoo_version)): ?><a class="text-danger mr-10 " target="_blank" href="https://forum.eacoophp.com/t/updating">发现了最新版本:V<?php echo (isset($eacoo_version['version']) && ($eacoo_version['version'] !== '')?$eacoo_version['version']:''); ?></a><?php endif; ?>
      <b>Version</b> <?php echo EACOOPHP_V; if($accredit_status != 'yes'): ?><a class="text-warning" href="<?php echo config('eacoo_api_url'); ?>/pricing">[未授权]</a><?php endif; ?>
    </div>
  </footer>
 <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<div id="loading" style="top: 150px;">
    <div class="lbk"></div>
    <div class="lcont"><img src="/static/assets/img/loading.gif" alt="loading...">正在加载...</div>
</div>

<script type="text/javascript" src="/static/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/assets/js/jquery.cookie.js"></script>

<!-- Slimscroll -->
<script src="/static/libs/slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="/static/libs/fastclick/fastclick.min.js"></script>
<script type="text/javascript" src="/static/admin/js/app.min.js" ></script>
<script type="text/javascript" src="/static/admin/js/layout.js" ></script>
<!-- <script type="text/javascript" src="/static/assets/js/think.js"></script> -->
<script type="text/javascript" src="/static/libs/layer/layer.js"></script>
<script type="text/javascript" src="/static/libs/artTemplate/template.js"></script>

<script type="text/javascript" src="/static/libs/toastr/toastr.min.js"></script>

<script type="text/javascript" src="/static/admin/js/common.js?v=<?php echo EACOOPHP_V; ?>" ></script>
<script type="text/javascript" src="/static/admin/js/eacoo.js?v=<?php echo EACOOPHP_V; ?>" ></script>

<script type="text/javascript">
$(function(){
  <?php if(isset($eacoo_version)): ?>
  //检测新版本
    layer.confirm('发现了新版本V<?php echo $eacoo_version['version']; ?>。点击查看<a href="https://forum.eacoophp.com/t/updating">更新详情</a><br>您可以选择安装在线更新插件来更新您的版本。<br>当前版本V<?php echo EACOOPHP_V; ?>', {
      icon:1,
      title:'新版本提醒',
      offset: '100px',
      btn: ['查看更新','以后提醒'],
    }, function(){
        //$('#onlineUpdate').trigger("click");
        //layer.closeAll();
        redirect('https://forum.eacoophp.com/t/updating');
    }, function(){
      $.ajax({
            type: 'get',
            url: "<?php echo url('admin/tools/version'); ?>",
            success: function (res) {
                layer.closeAll();
            }
        });
       
    });
  <?php endif; ?>
  
});

</script>
  </body>
</html>
<script type="text/javascript">
    loadTopMenus();//加载收藏菜单
    loadSidebarMenus();//加载菜单
    var eacoo_tab_content_height = $('.eacoo-tab-content').height();
    (function ($) {
        //加载上次页面窗口
        if (localStorage.getItem('latest_iframe_tab')) {
            refreshIframe();
        }
        $("#navtab-collapse-1 iframe").load(function(){
            //autoHeight(document.getElementById(tab_name));
            //var mainheight = $(this).contents().find("body").height()+30;
            var mainheight = eacoo_tab_content_height+20;
            $(this).height(mainheight);
        });
    })(jQuery);
    
</script>