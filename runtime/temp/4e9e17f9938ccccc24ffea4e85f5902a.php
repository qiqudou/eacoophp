<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\phpStudy\WWW\homedatas\public/themes/LightMakeup-No1/cms/index\detail.html";i:1537239231;s:74:"D:\phpStudy\WWW\homedatas\public/themes/LightMakeup-No1/public/layout.html";i:1537239230;s:72:"D:\phpStudy\WWW\homedatas\public\themes\LightMakeup-No1\cms\sidebar.html";i:1537239231;}*/ ?>
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
    <link type="text/css" rel="stylesheet" href="/themes/LightMakeup-No1/public/css/style.css?v=1.0.1"/>
    

    <script type="text/javascript" src="/static/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/themes/LightMakeup-No1/public/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript">
        var EacooPHP = window.EacooPHP = {
            "root_domain": "<?php echo \think\Request::instance()->domain(); ?>", //当前网站地址
            "static": "/static", //静态资源地址
            "public": "/static/assets", //项目公共目录地址
            "uploads_url" :'/uploads/',
            "cdn_url":"<?php echo config('aliyun_oss.domain'); ?>",
        }
    </script>
<![endif]-->
<?php echo hook('PageHeader'); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="/themes/LightMakeup-No1/public/img/logo.png" alt="">
            </a>
        </div>
        <div class="nav">
            <ul>
                <?php if(is_array($header_menus) || $header_menus instanceof \think\Collection || $header_menus instanceof \think\Paginator): $i = 0; $__LIST__ = $header_menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                <li>
                    <?php if(empty($row['_child']) || (($row['_child'] instanceof \think\Collection || $row['_child'] instanceof \think\Paginator ) && $row['_child']->isEmpty())): ?>
                        <a href="<?php echo (eacoo_url($row['value'],[],$row['depend_type']) ?: ''); ?>" target="<?php echo (isset($row['target']) && ($row['target'] !== '')?$row['target']:''); ?>" title="<?php echo (isset($row['title']) && ($row['title'] !== '')?$row['title']:''); ?>">
                            <?php if(!(empty($row['icon']) || (($row['icon'] instanceof \think\Collection || $row['icon'] instanceof \think\Paginator ) && $row['icon']->isEmpty()))): ?>
                            <i class="<?php echo $row['icon']; ?>"></i>
                            <?php endif; ?>
                            <?php echo (isset($row['title']) && ($row['title'] !== '')?$row['title']:'未知'); ?>
                        </a>
                    <?php else: ?>
                        <a href="javascript:void(0);">
                            <?php if(!(empty($row['icon']) || (($row['icon'] instanceof \think\Collection || $row['icon'] instanceof \think\Paginator ) && $row['icon']->isEmpty()))): ?>
                            <i class="<?php echo $row['icon']; ?>"></i>
                            <?php endif; ?>
                            <?php echo (isset($row['title']) && ($row['title'] !== '')?$row['title']:'未知'); ?>
                        </a>
                    <?php endif; if(!(empty($row['_child']) || (($row['_child'] instanceof \think\Collection || $row['_child'] instanceof \think\Paginator ) && $row['_child']->isEmpty()))): ?>
                        <ul class="dropdown-menu">
                            <?php if(is_array($row['_child']) || $row['_child'] instanceof \think\Collection || $row['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $row['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <a href="<?php echo $child['depend_type']==1?url($child['value']):plugin_url($child['value']); ?>">
                                        <?php echo $child['title']; ?>
                                    </a>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</header>


<div class="container">
    <div class="content">
        <div class="warp_full">
            <h1>
                <?php echo $info['title']; ?>
            </h1>
            <ul class="breadcrumb">
                <li>
                    <?php echo date('Y-m-d',(strtotime($info['create_time']))); ?>
                </li>
            </ul>
            <article>
                <?php echo $info['content']; ?>
            </article>
        </div>
    </div>
    <aside class="sidebar">
    <div class="side_block">
        <h3>
            文章分类
        </h3>
        <div class="tags">
            <a href="<?php echo url('cms/index/index'); ?>">
                所有分类
            </a>
            <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('cms/index/index',['cat_id'=>$category['term_id']]); ?>">
                    <?php echo $category['name']; ?>
                </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

    <div class="side_block">
        <h3>
            热门标签
        </h3>
        <div class="tags">
            <?php if(is_array($tag_list) || $tag_list instanceof \think\Collection || $tag_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('cms/index/index',['tag_id'=>$tag['term_id']]); ?>">
                    <?php echo $tag['name']; ?>
                </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</aside>
</div>


<footer class="footer">
    <p class="bq">
        Copyright© 2017-2018
        <span class="pipe">|</span>
        <a class="banquan" target="_blank" href="http://www.eacoophp123.com">Powered by EacooPHP</a>
        <span class="pipe">|</span>
        <a href="http://www.miitbeian.gov.cn/" target="_blank"> 蜀ICP备10000000号</a>
        <span class="pipe">|</span>
        <a href="#" target="_blank">BY: yyyvy</a>
        </span>
    </p>
</footer>

<?php echo hook('PageFooter'); ?>
<?php echo config('web_site_statistics'); ?>

 


</body>
</html>