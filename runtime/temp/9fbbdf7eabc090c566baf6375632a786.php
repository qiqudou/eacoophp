<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\phpStudy\WWW\homedatas\public/../apps/micro_topics/view/admin/index\edit.html";i:1537239039;s:68:"D:\phpStudy\WWW\homedatas\public/../apps/admin/view/public/base.html";i:1534502324;s:46:"../apps/admin/view/public/document_header.html";i:1534502324;}*/ ?>
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
            
            
<div class="row">
    <form id="form_id" method="post" action="<?php echo $form_url; ?>" class="form-post form-horizontal">
        <div class="col-md-8 ">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $meta_title; ?></h3>
                </div>
                <div class="box-body">
                    <?php if(!(empty($info['id']) || (($info['id'] instanceof \think\Collection || $info['id'] instanceof \think\Paginator ) && $info['id']->isEmpty()))): ?>
                    <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:'0'); ?>" />
                    <?php endif; ?>
                    <div class="form-group w">
                        <!--<label class="col-sm-1 control-label" for="title">标题</label>-->
                        <div class="col-sm-12">
                            <input class="form-control" name="title" value="<?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?>" type="text" placeholder="请输入标题">
                        </div>

                    </div>

                    <!--编辑器-->
                    <div class="form-group col-sm-12">
                        <label class="col-sm-12" style="display: block;">正文内容</label>
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
                    <!--编辑器-->

                    <!--回复可见编辑器-->
                    <div class="form-group col-sm-12">
                        <label class="col-sm-12" style="display: block;">回复可见内容</label>
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
                    <!--编辑器-->

                    <div class="form-group">
                        <label class="control-label col-md-2" for="img">大图赏析:</label>
                        <div class="col-md-offset-1">
                            <?php echo widget('common/Upload/pictures',[
                                [
                                    'id'=>'img',
                                    'class'=>'uploadsingleimg',
                                    'name'=>'img',
                                    'value'=>$info['img'],
                                    'config'=>'',
                                    'width'=>false,
                                    'height'=>false
                                ]
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">扩展面板</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="overhead">置顶:</label>
                        <div class="col-md-8">
                            <div class="radio radio-primary fl mr-10">
                                <label for="overhead">
                                    <input type="radio" name="overhead" value="1" <?php echo !empty($info['overhead'])?'checked':''; ?>><span class="circle"></span><span class="check"></span>
                                    开启
                                </label>
                            </div>
                            <div class="radio radio-primary fl mr-10">
                                <label for="overhead">
                                    <input type="radio" name="overhead" value="0" <?php echo !empty($info['overhead'])?'':'checked'; ?>><span class="circle"></span><span class="check"></span>
                                    关闭
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="recommend">推荐:</label>
                        <div class="col-md-8">
                            <div class="radio radio-primary fl mr-10">
                                <label for="recommend">
                                    <input type="radio" name="recommend" value="1" <?php echo !empty($info['recommend'])?'checked':''; ?>><span class="circle"></span><span class="check"></span>
                                    开启
                                </label>
                            </div>
                            <div class="radio radio-primary fl mr-10">
                                <label for="recommend">
                                    <input type="radio" name="recommend" value="0" <?php echo !empty($info['recommend'])?'':'checked'; ?>><span class="circle"></span><span class="check"></span>
                                    关闭
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="essence">精华:</label>
                        <div class="col-md-8">
                            <div class="radio radio-primary fl mr-10">
                                <label for="essence">
                                    <input type="radio" name="essence" value="1" <?php echo !empty($info['essence'])?'checked':''; ?>><span class="circle"></span><span class="check"></span>
                                    开启
                                </label>
                            </div>
                            <div class="radio radio-primary fl mr-10">
                                <label for="essence">
                                    <input type="radio" name="essence" value="0" <?php echo !empty($info['essence'])?'':'checked'; ?>><span class="circle"></span><span class="check"></span>
                                    关闭
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">分类:</label>
                        <div class="col-md-8">
                            <select name="category_id" class="form-control">
                                <option value="" selected>暂无</option>
                                <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $key; ?>" <?php if($key==$info['category_id']){echo 'selected';} ?>><?php echo $val; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="cover">封面:</label>
                        <div class="col-md-offset-3">
                            <?php echo widget('common/Upload/picture',[
                                [
                                    'id'=>'cover',
                                    'class'=>'uploadsingleimg',
                                    'name'=>'cover',
                                    'value'=>$info['cover'],
                                    'config'=>'',
                                    'width'=>false,
                                    'height'=>false
                                ]
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div><!--box-->
        </div>
        <div class="col-md-12 tc mt-30">
            <div class="box box-solid">

                <div class="box-body">
                    <?php if(!(empty($info['id']) || (($info['id'] instanceof \think\Collection || $info['id'] instanceof \think\Paginator ) && $info['id']->isEmpty()))): ?>
                    <button class="btn btn-primary ajax-post" data-pjax=false id="login" align="center" type="submit" name="status" value="1" target-form="form-post">更新</button>
                    <?php else: ?>
                    <button class="btn btn-primary ajax-post" id="login" align="center" type="submit" name="status" value="1" target-form="form-post">保存并发布</button>
                    <a class="btn btn-default" id="preview" align="center" type="submit" >预览</a>
                    <button class="btn btn-default ajax-post" id="save" name="status" value="0" align="center" type="submit" target-form="form-post">保存草稿</button>
                    <?php endif; ?>
                    <button onclick="javascript:history.back(-1);return false;" class="btn btn-default return">返回</button>
                </div>
            </div>
        </div>
    </form>
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
                
<div class="row">
    <form id="form_id" method="post" action="<?php echo $form_url; ?>" class="form-post form-horizontal">
        <div class="col-md-8 ">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $meta_title; ?></h3>
                </div>
                <div class="box-body">
                    <?php if(!(empty($info['id']) || (($info['id'] instanceof \think\Collection || $info['id'] instanceof \think\Paginator ) && $info['id']->isEmpty()))): ?>
                    <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:'0'); ?>" />
                    <?php endif; ?>
                    <div class="form-group w">
                        <!--<label class="col-sm-1 control-label" for="title">标题</label>-->
                        <div class="col-sm-12">
                            <input class="form-control" name="title" value="<?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?>" type="text" placeholder="请输入标题">
                        </div>

                    </div>

                    <!--编辑器-->
                    <div class="form-group col-sm-12">
                        <label class="col-sm-12" style="display: block;">正文内容</label>
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
                    <!--编辑器-->

                    <!--回复可见编辑器-->
                    <div class="form-group col-sm-12">
                        <label class="col-sm-12" style="display: block;">回复可见内容</label>
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
                    <!--编辑器-->

                    <div class="form-group">
                        <label class="control-label col-md-2" for="img">大图赏析:</label>
                        <div class="col-md-offset-1">
                            <?php echo widget('common/Upload/pictures',[
                                [
                                    'id'=>'img',
                                    'class'=>'uploadsingleimg',
                                    'name'=>'img',
                                    'value'=>$info['img'],
                                    'config'=>'',
                                    'width'=>false,
                                    'height'=>false
                                ]
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">扩展面板</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="overhead">置顶:</label>
                        <div class="col-md-8">
                            <div class="radio radio-primary fl mr-10">
                                <label for="overhead">
                                    <input type="radio" name="overhead" value="1" <?php echo !empty($info['overhead'])?'checked':''; ?>><span class="circle"></span><span class="check"></span>
                                    开启
                                </label>
                            </div>
                            <div class="radio radio-primary fl mr-10">
                                <label for="overhead">
                                    <input type="radio" name="overhead" value="0" <?php echo !empty($info['overhead'])?'':'checked'; ?>><span class="circle"></span><span class="check"></span>
                                    关闭
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="recommend">推荐:</label>
                        <div class="col-md-8">
                            <div class="radio radio-primary fl mr-10">
                                <label for="recommend">
                                    <input type="radio" name="recommend" value="1" <?php echo !empty($info['recommend'])?'checked':''; ?>><span class="circle"></span><span class="check"></span>
                                    开启
                                </label>
                            </div>
                            <div class="radio radio-primary fl mr-10">
                                <label for="recommend">
                                    <input type="radio" name="recommend" value="0" <?php echo !empty($info['recommend'])?'':'checked'; ?>><span class="circle"></span><span class="check"></span>
                                    关闭
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="essence">精华:</label>
                        <div class="col-md-8">
                            <div class="radio radio-primary fl mr-10">
                                <label for="essence">
                                    <input type="radio" name="essence" value="1" <?php echo !empty($info['essence'])?'checked':''; ?>><span class="circle"></span><span class="check"></span>
                                    开启
                                </label>
                            </div>
                            <div class="radio radio-primary fl mr-10">
                                <label for="essence">
                                    <input type="radio" name="essence" value="0" <?php echo !empty($info['essence'])?'':'checked'; ?>><span class="circle"></span><span class="check"></span>
                                    关闭
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">分类:</label>
                        <div class="col-md-8">
                            <select name="category_id" class="form-control">
                                <option value="" selected>暂无</option>
                                <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $key; ?>" <?php if($key==$info['category_id']){echo 'selected';} ?>><?php echo $val; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="cover">封面:</label>
                        <div class="col-md-offset-3">
                            <?php echo widget('common/Upload/picture',[
                                [
                                    'id'=>'cover',
                                    'class'=>'uploadsingleimg',
                                    'name'=>'cover',
                                    'value'=>$info['cover'],
                                    'config'=>'',
                                    'width'=>false,
                                    'height'=>false
                                ]
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div><!--box-->
        </div>
        <div class="col-md-12 tc mt-30">
            <div class="box box-solid">

                <div class="box-body">
                    <?php if(!(empty($info['id']) || (($info['id'] instanceof \think\Collection || $info['id'] instanceof \think\Paginator ) && $info['id']->isEmpty()))): ?>
                    <button class="btn btn-primary ajax-post" data-pjax=false id="login" align="center" type="submit" name="status" value="1" target-form="form-post">更新</button>
                    <?php else: ?>
                    <button class="btn btn-primary ajax-post" id="login" align="center" type="submit" name="status" value="1" target-form="form-post">保存并发布</button>
                    <a class="btn btn-default" id="preview" align="center" type="submit" >预览</a>
                    <button class="btn btn-default ajax-post" id="save" name="status" value="0" align="center" type="submit" target-form="form-post">保存草稿</button>
                    <?php endif; ?>
                    <button onclick="javascript:history.back(-1);return false;" class="btn btn-default return">返回</button>
                </div>
            </div>
        </div>
    </form>
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


</body>
</html>