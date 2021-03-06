<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\WWW\homedatas\public/../apps/micro_topics\view\my\edit.html";i:1537239039;s:66:"D:\phpStudy\WWW\homedatas\public/themes/default/public/layout.html";i:1530290812;}*/ ?>
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
<link rel="stylesheet" href="/static/libs/layer/skin/layer.css">
<style>
    .form-group {
        margin: 15px;
    }
    .upload {
        position: relative;
    }
    .upload img {
        width: 90px;
    }
    .upload input[type=file] {
        position: absolute;
        width: 90px;
        height: 100%;
        top: 0;
        opacity: 0;
        z-index: 999;
    }
    #cover {
        display: none;
    }
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

<div class="bbs_main">
    <div class="bbs_content">
        <div class="bbs-detail-edit">
            <from id="form-edit" method="post" action="<?php echo $form_url; ?>">
                <?php if(!(empty($info['id']) || (($info['id'] instanceof \think\Collection || $info['id'] instanceof \think\Paginator ) && $info['id']->isEmpty()))): ?>
                <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:'0'); ?>" />
                <?php endif; ?>
                <div class="form-group" style="overflow: hidden;">
                    <div class="col-md-2">
                        <select name="category_id" class="form-control">
                            <option value="" selected>选择分类</option>
                            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $key; ?>" <?php if($key==$info['category_id']){echo 'selected';} ?>><?php echo $val; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="<?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?>" placeholder="请输入标题">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">正文内容：</label>
                    <?php echo widget('common/Editor/wangeditor',
                    [
                    [
                    'id'=>'content',
                    'name'=>'content',
                    'value'=>$info['content'],
                    'width'=>'100%',
                    'height'=>'200px',
                    'config'=>'all',
                    'is_load_script'=>1,
                    'picturesModal' =>1
                    ]
                    ]); ?>
                </div>
                <div class="form-group">
                    <label for="respond_visible">隐藏内容：</label>
                    <?php echo widget('common/Editor/wangeditor',
                    [
                    [
                    'id'=>'respond_visible',
                    'name'=>'respond_visible',
                    'value'=>$info['respond_visible'],
                    'width'=>'100%',
                    'height'=>'200px',
                    'config'=>'all',
                    'is_load_script'=>1,
                    'picturesModal' =>1
                    ]
                    ]); ?>
                </div>
                <div class="form-group" style="overflow: hidden;">
                    <label class="control-label col-md-1" for="cover">封面:</label>
                    <div class="col-md-offset-1 upload">
                        <input type="file" onchange="changepic(this)" accept="image/*">
                        <input type="text" id="cover" name="cover" value="<?php echo (isset($info['cover']) && ($info['cover'] !== '')?$info['cover']:''); ?>">
                        <img src="<?php echo !empty($info['cover'])?get_image($info['cover']):'/static/micro_topics/img/upload.png'; ?>" class="default-upload">
                    </div>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button class="btn btn-primary" onclick="subForm();" type="submit">保存并发布</button>
                    <button onclick="javascript:history.back(-1);return false;" class="btn btn-default return">返回</button>
                </div>
            </from>
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

<script type="application/javascript" src="/static/libs/layer/layer.js"></script>
<script type="application/javascript">
    function changepic(obj){
        var reader = new FileReader();
        reader.readAsDataURL(obj.files[0]);
        reader.onload = function(e){
            file = e.target.result
            console.log(file)
            $.ajax({
                type: 'POST',
                url: "<?php echo url('micro_topics/my/upload'); ?>",
                data: {file:file},
                async : true,
                success: function (data ,textStatus, jqXHR) {
                    if(data.code == 1){
                        $('#cover').val(data.data.id);
                        $('.default-upload').attr('src',data.data.path);
                    }
                }
            });
        };
    }

    /*
    *   表单提交
    * */
    function subForm(){
        var res = $('#form-edit').find('input,select,textarea,button').serialize();
        $.ajax({
            type: 'POST',
            url: "<?php echo url('micro_topics/my/edit'); ?>",
            data: res,
            async : false,
            success: function (data ,textStatus, jqXHR) {
                if(data.code == 0){
                    layer.msg(data.msg);
                }else{
                    layer.msg('发布成功，正在跳转...');
                    setTimeout(function () {
                        window.history.back()
                    },2000);
                }
            }
        });
    }
</script>



</body>
</html>