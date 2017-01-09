<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title><?php if (isset($title)) echo $title . ' | '; echo 'Trang bóng đá' ?></title>

        <link rel="shortcut icon" href="assets/favicon.ico" />

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style1.css" rel="stylesheet">

        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/shopping.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="container">

            <!-- Navigation bar -->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">Trang bóng đá</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">

                        <!-- Menu bên trái -->
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('view/all_articles'); ?>"><span class="glyphicon glyphicon-globe"></span> News</a></li>
                            <li><a href="<?php echo base_url('view/all_videos'); ?>"><span class="glyphicon glyphicon-facetime-video"></span> Clip</a></li>
                            <li><a href="<?php echo base_url('view/ranking'); ?>"><span class="glyphicon glyphicon-sort"></span> BXH</a></li>
                            <li><a href="<?php echo base_url('shopping'); ?>"><span class="glyphicon glyphicon-list-alt"></span> Vé</a></li>
                             <li><a href="<?php echo base_url('view/guess'); ?>"><span class="glyphicon glyphicon-list-alt"></span> Dự đoán</a></li>
                            
                        </ul>

                        <!-- Menu bên phải -->
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (check_admin() == true) { ?>
                                <li><a href="<?php echo base_url();?>admin/articles_manager"><span class="glyphicon glyphicon-th-list"></span> Quản lý</a></li>
                            <?php } ?>
                            <?php if (check_TicketManager() == true) { ?>
                                <li><a href="<?php echo base_url();?>ticketmanager/tickets_manager"><span class="glyphicon glyphicon-th-list"></span> Quản lý Vé</a></li>
                            <?php } ?>
                            <?php if (check_ArticleManager() == true) { ?>
                                <li><a href="<?php echo base_url();?>articlemanager/articles_manager"><span class="glyphicon glyphicon-th-list"></span> Quản lý bài viết</a></li>
                            <?php } ?>
                            <?php if (check_login() == true) { ?>
                                <li><a><span class="glyphicon glyphicon-user"></span> Xin chào <?php echo $this->session->userdata('username') ?></a></li>
                                <li><a href="account/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo base_url();?>account/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="<?php echo base_url();?>account/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navigation bar -->

        h    <div class="row">
