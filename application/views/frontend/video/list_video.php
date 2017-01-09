<?php $this->load->view('frontend/templates/header'); ?>
    <section id="main-body-wrapper" class="container">
        <div class="row" id="main-body">
            <div id="content" class="site-content col-md-8" role="main">
                <ul class="breadcrumb">
                    <li>
                        <a href="#" class="breadcrumb_home">Home</a>
                    </li>
                    <li class="active">

                        <a href="index81ea.html?cat=3">Football</a> <span class="raquo">/</span>Danh sách video
                    </li>
                </ul>
                <div id="carousel-video" class="carousel slide scale">

                    <div class="carousel-inner">
                        <div class="item active">

                                <?php
                                $mount_videos = sizeof($list_videos);
                                for ($i = 0; $i < ($mount_videos + 1) / 2; $i++) { ?>
                                    <div class="row">
                                        <?php for ($j = 0; $j < 2; $j++) {
                                            if (isset($list_videos[$i * 2 + $j])) { ?>
                                                <div class="col-sm-offset-1 col-md-5">

                                                    <div class="row">
                                                        <img src="<?php echo base_url($list_videos[$i * 2 + $j]->image); ?>" class="img-thumbnail">
                                                    </div>
                                                    </br>
                                                    <div class="row">
                                                        <h4><a href="<?php echo base_url('view/video/' . $list_videos[$i * 2 + $j]->alias); ?>"><?php echo $list_videos[$i * 2 + $j]->title; ?></a></h4>
                                                    </div>

                                                    <div class="row">
                                                        <?php echo ($list_videos[$i * 2 + $j]->description); ?>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="col-md-4"></div>
                                            <?php }
                                        } ?>
                                    </div>
                                <?php } ?>

                                <!-- phân trang -->
                                <div class="row">
                                    <div class="pull-right">
                                        <?php echo $this->pagination->create_links(); ?>
                                    </div>
                                </div>
                                <div class="entry-content">


                                    <div class="entry-tags">Tags: <a href="index3e36.html?tag=football-2" rel="tag">football</a>, <a href="indexb913.html?tag=goals" rel="tag">goals</a></div>

                                </div>
                            </div>
                            </div>
                        </div>

                            </div><!--/#content -->

            <!--Right-->
            <?php $this->load->view('frontend/templates/sidebar');?>
            <!--End Right-->

        </div>
    </section>
<?php $this->load->view('frontend/templates/footer'); ?>