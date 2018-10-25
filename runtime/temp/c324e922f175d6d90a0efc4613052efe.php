<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\phpStudy\WWW\homedatas\public/themes/default/home/index\index.html";i:1520096418;s:66:"D:\phpStudy\WWW\homedatas\public/themes/default/public/layout.html";i:1530290812;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="zh-CN" class="ie8"> <![endif]-->
<html lang="zh-CN">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo (isset($meta_title) && ($meta_title !== '')?$meta_title:"EacooPHP系统"); ?></title>
<meta content="telephone=no,email=no,address=no" name="format-detection" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="wap-font-scale" content="no" />
<meta name="Keywords" content="<?php echo config('web_site_keyword'); ?>" />
<meta name="Description" content="<?php echo config('web_site_description'); ?>" />
<meta name="frontend-mobile" content="yes" />
<link type="text/css" rel="stylesheet" href="/static/assets/css/bootstrap.min.css"/>
<!-- Font Awesome -->
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/static/admin/css/AdminLTE.min.css" /><link rel="stylesheet" type="text/css" href="/static/admin/css/_all-skins.min.css" /><link rel="stylesheet" type="text/css" href="/static/assets/css/animate.min.css" /><link rel="stylesheet" type="text/css" href="/static/assets/css/base.css" />
<link type="text/css" rel="stylesheet" href="/themes/default/public/css/style.css?v=1.0.1"/>

<style type="text/css">
.feature-content{background-color: #fff;}
.box-title{line-height: 36px;margin-bottom: 30px;}
</style>
<style>
.pro_name a{color: #4183c4;}
.osc_git_title{background-color: #fff;}
.osc_git_box{background-color: #f9f9fc;}
.osc_git_box{border-color: #E3E9ED;}
.osc_git_info{color: #666;}
.osc_git_main a{color: #9B9B9B;}
</style>

<script type="text/javascript" src="/static/assets/js/jquery-1.10.2.min.js"></script>    
<script type="text/javascript">
    var EacooPHP = window.EacooPHP = {
        "root_domain": "<?php echo \think\Request::instance()->domain(); ?>", //当前网站地址
        "static": "/static", //静态资源地址
        "public": "/static/assets", //项目公共目录地址
        "uploads_url" :'/uploads/',
        "cdn_url":"<?php echo config('aliyun_oss.domain'); ?>",
    }
</script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php echo hook('PageHeader'); ?>
</head>
<body class="hold-transition skin-blue layout-top-nav">
 <div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand logo"><img class="logo-img" src="/eacoophp_logo_v1.png"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <!--顶部导航 start-->
          <ul class="nav navbar-nav">
            <?php if(!(empty($header_menus) || (($header_menus instanceof \think\Collection || $header_menus instanceof \think\Paginator ) && $header_menus->isEmpty()))): if(is_array($header_menus) || $header_menus instanceof \think\Collection || $header_menus instanceof \think\Paginator): $i = 0; $__LIST__ = $header_menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                <li class="<?php if(!(empty($row['_child']) || (($row['_child'] instanceof \think\Collection || $row['_child'] instanceof \think\Paginator ) && $row['_child']->isEmpty()))): ?>dropdown<?php endif; ?>">
              <?php if(empty($row['_child']) || (($row['_child'] instanceof \think\Collection || $row['_child'] instanceof \think\Paginator ) && $row['_child']->isEmpty())): ?>
                <a <?php echo !empty($row['current'])?'class="current"':''; ?> href="<?php echo (eacoo_url($row['value'],[],$row['depend_type']) ?: ''); ?>" target="<?php echo (isset($row['target']) && ($row['target'] !== '')?$row['target']:''); ?>" title="<?php echo (isset($row['title']) && ($row['title'] !== '')?$row['title']:''); ?>">
                  <?php if(!(empty($row['icon']) || (($row['icon'] instanceof \think\Collection || $row['icon'] instanceof \think\Paginator ) && $row['icon']->isEmpty()))): ?>
                    <i class="<?php echo $row['icon']; ?>"></i>
                  <?php endif; ?>
                  <?php echo (isset($row['title']) && ($row['title'] !== '')?$row['title']:'未知'); ?>
                </a>
              <?php else: ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php if(!(empty($row['icon']) || (($row['icon'] instanceof \think\Collection || $row['icon'] instanceof \think\Paginator ) && $row['icon']->isEmpty()))): ?>
                    <i class="<?php echo $row['icon']; ?>"></i>
                  <?php endif; ?>
                  <?php echo (isset($row['title']) && ($row['title'] !== '')?$row['title']:'未知'); ?>
                  <span class="caret"></span>
                </a>
              <?php endif; if(!(empty($row['_child']) || (($row['_child'] instanceof \think\Collection || $row['_child'] instanceof \think\Paginator ) && $row['_child']->isEmpty()))): ?>
                <ul class="dropdown-menu" role="menu">
                  <?php if(is_array($row['_child']) || $row['_child'] instanceof \think\Collection || $row['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $row['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo $child['depend_type']==1?url($child['value']):plugin_url($child['value']); ?>"><?php echo $child['title']; ?></a></li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              <?php endif; ?>
              </li>
              <?php endforeach; endif; else: echo "" ;endif; else: ?>
                <li class="active"><a href="/">主页 <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo url('user/index/index'); ?>">会员<span class="sr-only">会员</span></a></li>
                <li><a href="https://gitee.com/ZhaoJunfeng/EacooPHP/attach_files" target="_blank">下载</a></li>
                <li><a href="http://forum.eacoo123.com" target="_blank">社区</a></li>
                <li><a href="https://www.kancloud.cn/youpzt/eacoo" target="_blank">文档</a></li>
            <?php endif; ?>
            
          </ul>
          <!--顶部导航 end-->
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>

        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>

            <?php if(empty($current_user) || (($current_user instanceof \think\Collection || $current_user instanceof \think\Paginator ) && $current_user->isEmpty())): ?>
              <li><a href="<?php echo url('user/login/login'); ?>">登录</a></li>
            <?php else: ?>
              <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo $current_user['avatar']; ?>" class="user-image" alt="<?php echo $current_user['nickname']; ?>">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $current_user['nickname']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo $current_user['avatar']; ?>" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $current_user['nickname']; ?>
                    <small>注册时间：<?php echo $current_user['reg_time']; ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!--<li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  &lt;!&ndash; /.row &ndash;&gt;
                </li>-->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo url('user/index/personal'); ?>" class="btn btn-default btn-flat">个人资料</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo url('user/login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                  </div>
                </li>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- 站点 -->

 
  <?php echo hook('ImageGallery'); ?>
  <div class="content-wrapper bg-color-fff">
       <!-- Full Width Column -->
        <section class="feature-content pt-20">
          <div class="container">
              <div class="text-line text-center box-title">
                  <h2> <span>功能特性</span></h2>
                  <div class="subtitle">EacooPHP更高效优雅的开发！</div>
              </div>
              <div class="row">

                  <div class="col-sm-4 fadeInDown text-center animated">
                      <img class="rotate" src="/themes/default/public/img/149074.svg" width="100" alt="Generic placeholder image">
                          <h4>权限管理</h4>
                          <p class="">基于完善的Auth权限控制管理、无限父子级权限分组、可自由分配子级权限、一个管理员可同时属于多个组别</p>
                  </div>

                  <div class="col-sm-4 fadeInDown text-center animated">
                      <img class="rotate" src="/themes/default/public/img/223173.svg" width="100" alt="Generic placeholder image">
                          <h4>多端设备浏览体验</h4>
                          <p class="">基于Bootstrap和AdminLTE进行二次开发,手机、平板、PC均自动适配,无需要担心兼容性问题</p>
                  </div>

                  <div class="col-sm-4 fadeInDown text-center animated">
                      <img class="rotate" src="/themes/default/public/img/148991.svg" width="100" alt="Generic placeholder image">
                          <h4>Builder构建器</h4>
                          <p class="">EacooPHP提供Builder构建器来构建后台表单和列表，内置丰富的表单项组件来构建表单页面。让您开发更简单，高效</p>
                  </div>

              </div>
              <div class="row tworow mt-50">

                  <div class="col-sm-4  fadeInDown text-center animated">
                      <img class="rotate" src="/themes/default/public/img/138849.svg" width="100" alt="Generic placeholder image">
                          <h4>模块化</h4>
                          <p class="">模块化的开发模式，遵循MVC结构，在保证模块独立的同时，大大降低代码、数据的沉余，保证了应用程序的高内聚低耦合。</p>
                  </div>

                  <div class="col-sm-4 fadeInDown text-center animated">
                      <img class="rotate" src="/themes/default/public/img/297462.png" width="100" alt="Generic placeholder image">
                          <h4>插件机制</h4>
                          <p class="">基于钩子行为实现插件化的功能扩展，提供线上插件市场，插件随时安装卸载来增加自己想要的功能。</p>
                  </div>

                  <div class="col-sm-4 fadeInDown text-center animated">
                      <img class="rotate" src="/themes/default/public/img/149064.svg" width="100" alt="Generic placeholder image">
                          <h4>多主题支持</h4>
                          <p class="">系统支持多主题机制，允许用户建立自己的个性化主题，每个主题支持只对部分模块进行个性化。</p>
                  </div>

                  

              </div>
          </div>

      </section>
    <hr>
      <!-- Main content -->
      <section class="demo-content">
        <div class="container">
            <div class="row">
              <script src='//gitee.com/ZhaoJunfeng/EacooPHP/widget_preview'></script>
              <div class="oh hide">
                  <div class="col-md-6 text-center">
                    <img src="http://eacoo123.oss-cn-beijing.aliyuncs.com/static/demo-eacoophp/eacoophp-demo-attachment.png" width="80%">
                  </div>
                  <div class="col-md-6">
                      <div>
                        <h4>附件管理</h4>
                        <p>人性化，更好的交互体验的媒体附件管理器，可自定义裁剪，<br/>添加水印，并已经集成阿里云OSS。上传到云端存储，图片处理更任性。</p>
                      </div>
                      
                  </div>
              </div>

            </div>
        </div>
      
      </section>
      <hr>
      <section>
        <div class="container">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">快速开始</h3>
            </div>
            <div class="box-body">
              <p>使用EacooPHP框架开发定制您的系统前，建议熟悉官方的tp5.0完全开发手册。</p>

              <div>
                <h4>仓库地址：(记得加个star哦！！)</h4>
                <p>
                  GitHub仓库：<a href="https://github.com/fengdou902/EacooPHP.git">https://github.com/fengdou902/EacooPHP.git</a> 
                  <br>
  码云仓库：<a href="https://gitee.com/ZhaoJunfeng/EacooPHP.git">https://gitee.com/ZhaoJunfeng/EacooPHP.git</a> </p>
              </div>

              <div>
                <h4>文档地址：</h4>
                <p><a href="https://www.kancloud.cn/youpzt/eacoo" target="_blank">https://www.kancloud.cn/youpzt/eacoo</a></p>
              </div>

              <div>
                <h4>社区问答：</h4>
                <p><a href="http://forum.eacoo123.com" target="_blank">http://forum.eacoo123.com</a></p>
              </div>

              <div>
                <h4>官方QQ群：</h4>
                <p>436491685</p>
                <p class="text-center">
                  <img src="/themes/default/public/img/EacooPHP-qq-qrcode1.png" title="" alt="EacooPHP-qq-qrcode">
                  <span>手机QQ扫描二维码</span>
                </p>
              </div>

            </div>
          </div>
        </div>
        

      </section>
      <!-- /.content -->
      <div class="show text-center">
          <hr>
        <div class="pb-20">
          <a href="/admin.php?s=/admin/index/login" class="btn btn-primary">登录后台</a>
        </div>
      </div>
  </div>
  <!-- /.content-wrapper -->


<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>Version</b> <?php echo EACOOPHP_V; ?>
</div>
<strong>Copyright &copy; 2016-2018 <a href="http://forum.eacoo123.com" target="_blank">EacooPHP</a>.</strong> 保留所有权利。
</footer>
</div>
<!-- ./wrapper -->

<script type="text/javascript" src="/static/assets/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="/static/libs/slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="/static/libs/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="/static/admin/js/app.min.js" ></script>
  <?php echo hook('PageFooter'); ?>
<?php echo config('web_site_statistics'); ?>

 


</body>
</html>