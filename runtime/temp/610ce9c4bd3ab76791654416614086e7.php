<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\phpStudy\WWW\homedatas\public/../apps/micro_topics\view\index\index.html";i:1537239039;s:66:"D:\phpStudy\WWW\homedatas\public/themes/default/public/layout.html";i:1530290812;s:61:"D:\phpStudy\WWW\homedatas\apps\micro_topics\view\sidebar.html";i:1537239039;}*/ ?>
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

<link rel="stylesheet" href="/static/micro_topics/css/style.css">

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

    <div class="bbs_main">
        <div class="bbs_content">
            <div class="bbs_header">
                <div class="bbs_header_a"></div>
                <div class="bbs_header_b">
                    <div class="bbs_header_avatar">
                        <img src="/static/micro_topics/img/bbs_header_avatar.png" alt="">
                    </div>
                    <div class="bbs_header_des">
                        <div class="bbs_header_top">
                            <h4><?php echo $infomain['forum_name']; ?></h4>
                            <h5>帖子：<i><?php echo $count; ?></i></h5>
                        </div>
                        <div class="bbs_header_bottom">
                            <p><?php echo $infomain['forum_describe']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bbs_mainbody">
                <div class="bbs_cat" id="bbs_cat">
                    <h2 style="margin-top: 0;">
                        <i class="fa fa-bookmark"></i>
                        帖子分类
                        <a href="<?php echo url('micro_topics/My/edit'); ?>" class="add-post">
                            发布帖子
                        </a>
                    </h2>
                    <ul>
                        <li>
                            <a href="<?php echo url('micro_topics/index/index'); ?>">
                                所有
                            </a>
                        </li>
                        <?php if(is_array($cat_list) || $cat_list instanceof \think\Collection || $cat_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cat_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('micro_topics/index/index',['category_id'=>$cat['term_id']]); ?>">
                                <?php echo $cat['name']; ?>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

                <div class="bbs_list_box">
                    <h2 style="margin-top: 0;"><i class="fa fa-thumb-tack"></i> 置顶帖子</h2>
                    <div class="list overhead_list">
                        <ul>
                            <?php if(is_array($overhead_list) || $overhead_list instanceof \think\Collection || $overhead_list instanceof \think\Paginator): $i = 0; $__LIST__ = $overhead_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="avatar">
                                    <a href="<?php echo url('user/index/home',['uid'=>$vo['uid']]); ?>">
                                        <?php if($vo['vip']): ?>
                                            <i class="vip_icon"></i>
                                        <?php endif; ?>
                                        <img src="<?php echo $vo['avatar']; ?>">
                                        <?php if($vo['role'] == 1): ?>
                                            <i class="verify_icon verify_official" title="官方人员"></i>
                                        <?php elseif($vo['author'] == 1): ?>
                                            <i class="verify_icon verify_common" title="<?php echo $vo['author_info']; ?>"></i>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="main">
                                    <h1>
                                        <a href="<?php echo url('micro_topics/index/detail',['id'=>$vo['id']]); ?>">
                                            <span class="cat_name">
                                                <?php echo $vo['cat_name']; ?>
                                            </span>
                                            <i class="title" style="color:<?php echo !empty($vo['vip'])?'red':''; ?>">
                                                <?php echo $vo['title']; ?>
                                            </i>

                                            <?php if($vo['is_img']): ?>
                                                <i class="fa fa-picture-o" style="color:#00af00;"></i>
                                            <?php endif; ?>

                                            <span class="overhead">
                                                置顶
                                            </span>

                                            <?php if($vo['recommend']): ?>
                                                <span class="recommend" style="background:#4fc277">
                                                    推荐
                                                </span>
                                            <?php endif; if($vo['essence']): ?>
                                                <span class="essence" style="background:#f35b4f">
                                                    精华
                                                </span>
                                            <?php endif; ?>
                                        </a>
                                        <div class="comment">
                                            <i class="fa fa-comment-o"></i>
                                            <?php echo $vo['comment']; ?>
                                        </div>
                                    </h1>
                                    <div class="addition">
                                        <div style="float:left;">
                                            <span class="user">
                                                <i class="fa fa-user"></i>
                                                <?php echo $vo['nickname']; ?>
                                            </span>
                                            <span class="time">
                                                <i class="fa fa-calendar"></i>
                                                <?php echo date('Y-m-d',(strtotime($vo['create_time']))); ?>
                                            </span>
                                            <span class="view">
                                                <i class="fa fa-eye"></i>
                                                <?php echo $vo['view']; ?>
                                            </span>
                                        </div>
                                        <div style="float: right">
                                            <?php if($vo['last_nickname']): ?>
                                                <span class="comments_user">
                                                    <i class="fa fa-comments-o"></i>
                                                    <?php echo $vo['last_nickname']; ?>
                                                </span>
                                                <span class="comments_time">
                                                    <?php echo friendly_date(strtotime($vo['last_time'])); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>


                    <h2>
                        <i class="fa fa-comments-o"></i>
                        所有帖子
                        <div class="bbs_type">
                            <ul>
                                <li class="<?php echo !empty($order_type)?'':'bbs_current'; ?>">
                                    <a href="<?php echo url('micro_topics/index/index',['order_type'=>0]); ?>#bbs_cat">
                                        回复
                                    </a>
                                </li>
                                <li class="<?php echo !empty($order_type)?'bbs_current':''; ?>">
                                    <a href="<?php echo url('micro_topics/index/index',['order_type'=>1]); ?>#bbs_cat">
                                        最新
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </h2>
                    <div class="list">
                        <ul>
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <div class="avatar">
                                        <a href="<?php echo url('user/index/home',['uid'=>$vo['uid']]); ?>">
                                            <?php if($vo['vip']): ?>
                                            <i class="vip_icon"></i>
                                            <?php endif; ?>
                                            <img src="<?php echo $vo['avatar']; ?>">
                                            <?php if($vo['role'] == 1): ?>
                                            <i class="verify_icon verify_official" title="官方人员"></i>
                                            <?php elseif($vo['author'] == 1): ?>
                                            <i class="verify_icon verify_common" title="<?php echo $vo['author_info']; ?>"></i>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="main">
                                        <h1>
                                            <a href="<?php echo url('micro_topics/index/detail',['id'=>$vo['id']]); ?>">
                                                <span class="cat_name">
                                                    <?php echo $vo['cat_name']; ?>
                                                </span>
                                                <i class="title" style="color:<?php echo !empty($vo['vip'])?'red':''; ?>">
                                                    <?php echo $vo['title']; ?>
                                                </i>

                                                <?php if($vo['is_img']): ?>
                                                    <i class="fa fa-picture-o" style="color:#00af00;"></i>
                                                <?php endif; if($vo['recommend']): ?>
                                                    <span class="recommend" style="background:#4fc277">
                                                        推荐
                                                    </span>
                                                <?php endif; if($vo['essence']): ?>
                                                    <span class="essence" style="background:#f35b4f">
                                                        精华
                                                    </span>
                                                <?php endif; ?>
                                            </a>
                                            <div class="comment">
                                                <i class="fa fa-comment-o"></i>
                                                <?php echo $vo['comment']; ?>
                                            </div>
                                        </h1>
                                        <div class="addition">
                                            <div style="float:left;">
                                                <span class="user">
                                                    <i class="fa fa-user"></i>
                                                    <?php echo $vo['nickname']; ?>
                                                </span>
                                                    <span class="time">
                                                    <i class="fa fa-calendar"></i>
                                                    <?php echo date('Y-m-d',(strtotime($vo['create_time']))); ?>
                                                </span>
                                                    <span class="view">
                                                    <i class="fa fa-eye"></i>
                                                    <?php echo $vo['view']; ?>
                                                </span>
                                            </div>
                                            <div style="float: right">
                                                <?php if($vo['last_nickname']): ?>
                                                    <span class="comments_user">
                                                        <i class="fa fa-comments-o"></i>
                                                        <?php echo $vo['last_nickname']; ?>
                                                    </span>
                                                    <span class="comments_time">
                                                        <?php echo friendly_date(strtotime($vo['last_time'])); ?>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bbs_sidebar">
                <div class="bbs_sidebar_box">
    <div class="bbs_ranking_user">
        <ul class="tab_title">
            <li class="active">
                日回帖排行
            </li>
            <li>
                周回帖排行
            </li>
        </ul>
        <div class="tab_box">
            <div style="display: block;">
                <ul>
                    <?php if(is_array($day_ranking_list) || $day_ranking_list instanceof \think\Collection || $day_ranking_list instanceof \think\Paginator): $i = 0; $__LIST__ = $day_ranking_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('user/index/home',['uid'=>$vo['uid']]); ?>">
                                <img src="<?php echo $vo['avatar']; ?>" alt="">
                            </a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div>
                <ul>
                    <?php if(is_array($week_ranking_list) || $week_ranking_list instanceof \think\Collection || $week_ranking_list instanceof \think\Paginator): $i = 0; $__LIST__ = $week_ranking_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('user/index/home',['uid'=>$vo['uid']]); ?>">
                                <img src="<?php echo $vo['avatar']; ?>" alt="">
                            </a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="bbs_sidebar_box">
    <h3>热门帖子</h3>
    <div class="hot_post">
        <ul>
            <?php if(is_array($hot_post) || $hot_post instanceof \think\Collection || $hot_post instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_post;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php echo url('micro_topics/index/detail',['id'=>$vo['id']]); ?>">
                        <?php echo $vo['title']; ?>
                    </a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<script type="application/javascript">
    //tab切换
    $('.tab_title li').on('click',function () {
        var index = $(this).index();
        $('.tab_title li').removeClass('active');
        $(this).addClass('active');
        $('.tab_box').children().hide();
        $('.tab_box').children().eq(index).show();
    })
</script>
            </div>
        </div>
    </div>


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