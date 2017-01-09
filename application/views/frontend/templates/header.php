<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <?php $this->load->view('frontend/templates/head')?>
</head>
<body class="home page page-id-26 page-template-default">
<header role="banner">
    <div class="container">
        <div id="header" class="row" style="padding-bottom: 30px; padding-top: 10px;">
            <div class="col-xs-6">
                <h1 class="logo">
                    <a href="<?php echo base_url()?>">
                        <img class="img-responsive"
                             src="<?php echo base_url();?>assets/frontend/logo.png" alt="logo">
                    </a>
                </h1>
            </div><!-- /.col-sm-6 -->

            <div class="col-xs-6 vertical-middle">
                <div id="image_widget-3" class="widget widget_image_widget">
                    <?php if(check_login()== true):?>
                        <span>Xin chào: <?php echo $this->session->userdata('username') ?></span>
                        <a href="<?php echo base_url();?>account/logout" class="btn btn-warning">
                            Đăng xuất
                        </a>
                    <?php else:?>
                        <a href="<?php echo base_url();?>account/login" class="btn btn-success">
                            Đăng nhập
                        </a>
                        <a href="<?php echo base_url();?>account/signup" class="btn btn-info">
                            Đăng ký
                        </a>
                    <?php endif;?>
                </div>
            </div><!-- /.col-sm-6 -->

        </div><!-- /.row -->

        <nav class="navbar-main clearfix" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div><!--/.navbar-header-->

<!--            <form class="navbar-form navbar-right" role="search" method="get" id="searchform"-->
<!--                  action="http://demo.themeum.com/wordpress/sportsline/">-->
<!--                <input type="text" value="" name="s" id="s" class="form-control" placeholder="Search"/>-->
<!--                <i class="fa fa-search"></i>-->
<!--            </form>-->
            <div class="collapse navbar-collapse">
                <ul id="menu-main-menu" class="nav navbar-nav">
                    <li id="menu-item-1"
                        class=" menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-26 current_page_item">
                        <a href="<?php echo base_url()?>">Trang chủ</a>
                    </li>
                    <li id="menu-item-2" class=" menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="<?php echo base_url('view/all_videos'); ?>">
                            Video
                        </a>
                    </li>
                    <li id="menu-item-3" class=" menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="<?php echo base_url('view/ranking'); ?>">
                            Bảng xếp hạng
                        </a>
                    </li>
                    <li id="menu-item-4" class=" menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="<?php echo base_url('view/guess'); ?>">
                            Dự đoán
                        </a>
                    </li>
                    <li id="menu-item-5"
                        class=" menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="<?php echo base_url();?>shopping">
                            Đặt vé
                        </a>
                    </li>

                    <?php if(check_admin()):?>
                        <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo base_url();?>admin/articles_manager">Quản lý</a>
                        </li>
                    <?php endif;?>
                    <?php if(check_ArticleManager()):?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo base_url();?>articlemanager/articles_manager">Quản lý bài viết</a>
                        </li>
                    <?php endif;?>
                    <?php if(check_TicketManager()):?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo base_url();?>ticketmanager/tickets_manager">Quản lý Vé</a>
                        </li>
                    <?php endif;?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav><!--/.navbar-->
    </div><!--/.container-->
</header><!--/header-->