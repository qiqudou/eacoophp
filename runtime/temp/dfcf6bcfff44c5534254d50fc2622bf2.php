<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy\WWW\homedatas\public/../apps/cms/view/admin/widget/hooks/tool.html";i:1537239010;}*/ ?>
<div class="admin-tool">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="<?php echo url('user/User/index'); ?>" class="color-5 opentab" data-iframe="true" tab-name="navtab-collapse-7" data-selftabhtml='<i class="fa fa-user"></i> 用户列表'>
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text color-5">用户数</span>
              <span class="info-box-number"><?php echo $generalize['usercount']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
      </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-archive"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><a href="<?php echo url('cms/Posts/index'); ?>" class="color-5 opentab" data-iframe="true" >文章数</a></span>
          <span class="info-box-number"><?php echo $generalize['postcount']; ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><a href="<?php echo url('cms/page/index'); ?>" class="color-5 opentab" data-iframe="true" >页面数</a></span>
          <span class="info-box-number"><?php echo $generalize['pagecount']; ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><a href="#" class="color-5">评论数</a></span>
          <span class="info-box-number"><?php echo $generalize['commentcount']; ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
