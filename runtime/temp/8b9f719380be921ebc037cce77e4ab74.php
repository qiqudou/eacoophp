<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"D:\phpStudy\WWW\homedatas\public/../apps//common/view/builder/listbuilder.html";i:1534502324;s:68:"D:\phpStudy\WWW\homedatas\public/../apps/admin/view/public/base.html";i:1534502324;s:46:"../apps/admin/view/public/document_header.html";i:1534502324;s:38:"../apps/common/view/builder/style.html";i:1519388616;s:43:"../apps/common/view/builder/javascript.html";i:1519388616;}*/ ?>
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/static/libs/bootstrap-table/bootstrap-table.min.css">

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
            
        

                    
<div class="builder listbuilder-box">
    
    <!-- 顶部工具栏按钮 -->
    <!-- 数据列表 -->
    <div class="builder-container">
        <div class="row">

            <div class="builder-table col-sm-12">
                <div id="builder-toolbar" class="toolbar">
                   
                    <!-- 工具栏按钮 -->
                    <?php if(!(empty($top_button_list) || (($top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator ) && $top_button_list->isEmpty()))): ?>
                        <!--<div class="form-group">-->
                        <?php if(is_array($top_button_list) || $top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $top_button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                            <a <?php if(isset($row['attribute'])): ?><?php echo $row['attribute']; endif; ?>><?php if(!(empty($row['icon']) || (($row['icon'] instanceof \think\Collection || $row['icon'] instanceof \think\Paginator ) && $row['icon']->isEmpty()))): ?><i class="<?php echo (isset($row['icon']) && ($row['icon'] !== '')?$row['icon']:''); ?>"></i><?php endif; ?> <?php echo $row['title']; ?></a>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                       <!-- </div>-->
                    <?php endif; if(!(empty($selects) || (($selects instanceof \think\Collection || $selects instanceof \think\Paginator ) && $selects->isEmpty()))): ?>
                        <form id="selectForm" method="get" action="<?php echo (isset($action_url) && ($action_url !== '')?$action_url:$default_url); ?>" class="form-dont-clear-url-param form-inline ml-20">            
                            <?php if(is_array($selects) || $selects instanceof \think\Collection || $selects instanceof \think\Paginator): $i = 0; $__LIST__ = $selects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;?>
                            <div class="form-group">    
                                <?php if(!(empty($select['title']) || (($select['title'] instanceof \think\Collection || $select['title'] instanceof \think\Paginator ) && $select['title']->isEmpty()))): ?>
                                    <label for="<?php echo $select['name']; ?>"  class=" pr-0"><?php echo $select['title']; ?>:</label>          
                                <?php endif; ?>

                                <select name="<?php echo $select['name']; ?>" data-role="select_text" class="form-control pl-20">
                                    <?php $list_builder_selected = input('get.'.$select['name']); if(is_array($select['arrvalue']) || $select['arrvalue'] instanceof \think\Collection || $select['arrvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $select['arrvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i;if(is_array($svo)): ?>
                                            <option value="<?php echo $svo['id']; ?>" <?php if($svo['id'] == $list_builder_selected): ?>selected<?php endif; ?>><?php echo $svo['value']; ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo $key; ?>" <?php if($key == $list_builder_selected): ?>selected<?php endif; ?>><?php echo $svo; ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </form>
                    <?php endif; if($search['type'] == 'custom'): ?>
                    <!-- 搜索框 -->
                        <div class="col-xs-12 col-sm-3 clearfix fr pr0">
                            <form class="form form-inline" method="get" action="<?php echo $search['url']; ?>">
                                <div class="form-group">
                                    <div class="input-group search-form">
                                        <input type="text" name="keyword" class="form-control search-input pull-right" value="<?php echo (\think\Request::instance()->param('keyword') ?: ''); ?>" placeholder="<?php echo $search['title']; ?>">
                                        <span class="input-group-btn"><button type="button" class="btn btn-success search-btn"><i class="fa fa-search"></i></button></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
                <table id="builder-table" class="table table-responsive table-bordered table-hover dataTable" 
                        data-pagination="true" 
                        data-toolbar="#builder-toolbar"
                        data-show-refresh="true"
                        data-show-toggle="true"
                        data-show-columns="true"
                        width="100%">
                       <thead>
                        <tr>
                            <th width="50" class="checkbox-toggle" 
                                data-field="state" 
                                data-checkbox="true">
                            </th>
                            <?php if(is_array($table_columns) || $table_columns instanceof \think\Collection || $table_columns instanceof \think\Paginator): $i = 0; $__LIST__ = $table_columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                <th data-field="<?php echo $column['name']; ?>" <?php echo (isset($column['extra_attr']) && ($column['extra_attr'] !== '')?$column['extra_attr']:""); ?> data-sortable="true"><?php echo $column['title']; ?></th>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                    </thead>
                </table>

            </div>
            </div>
    </div>

    <!-- 额外功能代码 -->
    <?php echo $extra_html; ?>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="/static/libs/bootstrap-table/bootstrap-table.min.js"></script>
<script type="text/javascript" src="/static/libs/tableExport/libs/FileSaver/FileSaver.min.js"></script>
<script type="text/javascript" src="/static/libs/tableExport/libs/html2canvas/html2canvas.min.js"></script>
<script src="/static/libs/tableExport/tableExport.min.js"></script>
<script src="/static/libs/bootstrap-table/extensions/export/bootstrap-table-export.min.js"></script>
<!-- Latest compiled and minified Locales -->
<script src="/static/libs/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script type="text/javascript">
    var $table = $('#builder-table');
    $table.bootstrapTable({
        url:'<?php echo (isset($action_url) && ($action_url !== '')?$action_url:''); ?>',
        //method: 'get',  //请求方式（*）
        cache: false,  //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
        striped: false,  //表格显示条纹  
        showExport: true,     //是否显示导出
        exportDataType: "basic", //basic', 'all', 'selected'.
        exportTypes:[ 'json','xml','csv', 'txt', 'sql', 'doc', 'excel','png'],  //导出文件类型
        selectItemName:'ids[]',
        <?php if($search['type'] == 'basic'): ?>
            search: true,  //是否启用查询                 
            searchOnEnterKey:true,
        <?php endif; ?>
        clickToSelect: true, //是否启用点击选中行
        pagination: true, //启动分页
        //dataType : "json",
        pageSize: <?php echo (isset($table_data_page['page_size']) && ($table_data_page['page_size'] !== '')?$table_data_page['page_size']:'5'); ?>,  //每页显示的记录数  
        pageNumber:1, //初始化加载第一页，默认第一页
        pageList: [5, 10, 12, 20, 25,50],  //记录数可选列表  
        sidePagination: "server", //表示服务端请求  
        //showPaginationSwitch: true,       //是否显示选择分页数按钮
        uniqueId:'id',
        idField:'<?php echo $table_primary_key; ?>',
        //设置为undefined可以获取pageNumber，pageSize，searchText，sortName，sortOrder  
        //设置为limit可以获取limit, offset, search, sort, order  
        queryParamsType : "undefined",   
        queryParams: function queryParams(params) {   //设置查询参数  
          var param = {
              keyword:params.searchText,
              paged: params.pageNumber,    
              page_size: params.pageSize,  
              sort_name:params.sortName,
              //orderNum : $("#orderNum").val()  
          };
          if (params.sortName!=undefined) {
            param.order = params.sortName+" "+params.sortOrder;
          }
          //console.log(param);
          //console.log(params);
          return param;                   
        },
        // onLoadSuccess: function(res){  //加载成功时执行  
        //     console.log(res);
        //   layer.msg("加载成功");  
        // },  
        onLoadError: function(res){  //加载失败时执行  
          layer.msg("加载数据失败", {time : 1500, icon : 2});  
        }
        
    })
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
            
        

              <div class="box-body">
                        
<div class="builder listbuilder-box">
    
    <!-- 顶部工具栏按钮 -->
    <!-- 数据列表 -->
    <div class="builder-container">
        <div class="row">

            <div class="builder-table col-sm-12">
                <div id="builder-toolbar" class="toolbar">
                   
                    <!-- 工具栏按钮 -->
                    <?php if(!(empty($top_button_list) || (($top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator ) && $top_button_list->isEmpty()))): ?>
                        <!--<div class="form-group">-->
                        <?php if(is_array($top_button_list) || $top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $top_button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                            <a <?php if(isset($row['attribute'])): ?><?php echo $row['attribute']; endif; ?>><?php if(!(empty($row['icon']) || (($row['icon'] instanceof \think\Collection || $row['icon'] instanceof \think\Paginator ) && $row['icon']->isEmpty()))): ?><i class="<?php echo (isset($row['icon']) && ($row['icon'] !== '')?$row['icon']:''); ?>"></i><?php endif; ?> <?php echo $row['title']; ?></a>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                       <!-- </div>-->
                    <?php endif; if(!(empty($selects) || (($selects instanceof \think\Collection || $selects instanceof \think\Paginator ) && $selects->isEmpty()))): ?>
                        <form id="selectForm" method="get" action="<?php echo (isset($action_url) && ($action_url !== '')?$action_url:$default_url); ?>" class="form-dont-clear-url-param form-inline ml-20">            
                            <?php if(is_array($selects) || $selects instanceof \think\Collection || $selects instanceof \think\Paginator): $i = 0; $__LIST__ = $selects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;?>
                            <div class="form-group">    
                                <?php if(!(empty($select['title']) || (($select['title'] instanceof \think\Collection || $select['title'] instanceof \think\Paginator ) && $select['title']->isEmpty()))): ?>
                                    <label for="<?php echo $select['name']; ?>"  class=" pr-0"><?php echo $select['title']; ?>:</label>          
                                <?php endif; ?>

                                <select name="<?php echo $select['name']; ?>" data-role="select_text" class="form-control pl-20">
                                    <?php $list_builder_selected = input('get.'.$select['name']); if(is_array($select['arrvalue']) || $select['arrvalue'] instanceof \think\Collection || $select['arrvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $select['arrvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i;if(is_array($svo)): ?>
                                            <option value="<?php echo $svo['id']; ?>" <?php if($svo['id'] == $list_builder_selected): ?>selected<?php endif; ?>><?php echo $svo['value']; ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo $key; ?>" <?php if($key == $list_builder_selected): ?>selected<?php endif; ?>><?php echo $svo; ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </form>
                    <?php endif; if($search['type'] == 'custom'): ?>
                    <!-- 搜索框 -->
                        <div class="col-xs-12 col-sm-3 clearfix fr pr0">
                            <form class="form form-inline" method="get" action="<?php echo $search['url']; ?>">
                                <div class="form-group">
                                    <div class="input-group search-form">
                                        <input type="text" name="keyword" class="form-control search-input pull-right" value="<?php echo (\think\Request::instance()->param('keyword') ?: ''); ?>" placeholder="<?php echo $search['title']; ?>">
                                        <span class="input-group-btn"><button type="button" class="btn btn-success search-btn"><i class="fa fa-search"></i></button></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
                <table id="builder-table" class="table table-responsive table-bordered table-hover dataTable" 
                        data-pagination="true" 
                        data-toolbar="#builder-toolbar"
                        data-show-refresh="true"
                        data-show-toggle="true"
                        data-show-columns="true"
                        width="100%">
                       <thead>
                        <tr>
                            <th width="50" class="checkbox-toggle" 
                                data-field="state" 
                                data-checkbox="true">
                            </th>
                            <?php if(is_array($table_columns) || $table_columns instanceof \think\Collection || $table_columns instanceof \think\Paginator): $i = 0; $__LIST__ = $table_columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                <th data-field="<?php echo $column['name']; ?>" <?php echo (isset($column['extra_attr']) && ($column['extra_attr'] !== '')?$column['extra_attr']:""); ?> data-sortable="true"><?php echo $column['title']; ?></th>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                    </thead>
                </table>

            </div>
            </div>
    </div>

    <!-- 额外功能代码 -->
    <?php echo $extra_html; ?>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="/static/libs/bootstrap-table/bootstrap-table.min.js"></script>
<script type="text/javascript" src="/static/libs/tableExport/libs/FileSaver/FileSaver.min.js"></script>
<script type="text/javascript" src="/static/libs/tableExport/libs/html2canvas/html2canvas.min.js"></script>
<script src="/static/libs/tableExport/tableExport.min.js"></script>
<script src="/static/libs/bootstrap-table/extensions/export/bootstrap-table-export.min.js"></script>
<!-- Latest compiled and minified Locales -->
<script src="/static/libs/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script type="text/javascript">
    var $table = $('#builder-table');
    $table.bootstrapTable({
        url:'<?php echo (isset($action_url) && ($action_url !== '')?$action_url:''); ?>',
        //method: 'get',  //请求方式（*）
        cache: false,  //是否使用缓存，默认为true，所以一般情况下需要设置一下这个属性（*）
        striped: false,  //表格显示条纹  
        showExport: true,     //是否显示导出
        exportDataType: "basic", //basic', 'all', 'selected'.
        exportTypes:[ 'json','xml','csv', 'txt', 'sql', 'doc', 'excel','png'],  //导出文件类型
        selectItemName:'ids[]',
        <?php if($search['type'] == 'basic'): ?>
            search: true,  //是否启用查询                 
            searchOnEnterKey:true,
        <?php endif; ?>
        clickToSelect: true, //是否启用点击选中行
        pagination: true, //启动分页
        //dataType : "json",
        pageSize: <?php echo (isset($table_data_page['page_size']) && ($table_data_page['page_size'] !== '')?$table_data_page['page_size']:'5'); ?>,  //每页显示的记录数  
        pageNumber:1, //初始化加载第一页，默认第一页
        pageList: [5, 10, 12, 20, 25,50],  //记录数可选列表  
        sidePagination: "server", //表示服务端请求  
        //showPaginationSwitch: true,       //是否显示选择分页数按钮
        uniqueId:'id',
        idField:'<?php echo $table_primary_key; ?>',
        //设置为undefined可以获取pageNumber，pageSize，searchText，sortName，sortOrder  
        //设置为limit可以获取limit, offset, search, sort, order  
        queryParamsType : "undefined",   
        queryParams: function queryParams(params) {   //设置查询参数  
          var param = {
              keyword:params.searchText,
              paged: params.pageNumber,    
              page_size: params.pageSize,  
              sort_name:params.sortName,
              //orderNum : $("#orderNum").val()  
          };
          if (params.sortName!=undefined) {
            param.order = params.sortName+" "+params.sortOrder;
          }
          //console.log(param);
          //console.log(params);
          return param;                   
        },
        // onLoadSuccess: function(res){  //加载成功时执行  
        //     console.log(res);
        //   layer.msg("加载成功");  
        // },  
        onLoadError: function(res){  //加载失败时执行  
          layer.msg("加载数据失败", {time : 1500, icon : 2});  
        }
        
    })
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

    <script type="text/javascript">
    $(function() {
        //给数组增加查找指定的元素索引方法
        Array.prototype.indexOf = function(val) {
            for (var i = 0; i < this.length; i++) {
                if (this[i] == val) return i;
            }
            return -1;
        };

        //给数组增加删除方法
        Array.prototype.remove = function(val) {
            var index = this.indexOf(val);
            if (index > -1) {
                this.splice(index, 1);
            }
        };
        //筛选框变化触发表单提交
        $('[data-role="select_text"]').change(function(){
            $('#selectForm').submit();
        });
    });
    //筛选
    $(document).on('submit', '.form-dont-clear-url-param', function(e){
        e.preventDefault();

        var seperator = "&";
        var form = $(this).serialize();
        var action = $(this).attr('action');
        if(action == ''){
            action = location.href;
        }
        var new_location = action +'?'+ seperator + form;
        location.href = new_location;

        return false;
    });
</script>


</body>
</html>