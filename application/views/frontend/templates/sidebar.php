<div id="sidebar" class="col-md-4 sidebar" role="complementary">
    <div class="sidebar-inner">
        <aside class="widget-area">
            <div id="tab_widget-2" class="widget widget_tab_widget">
                <ul class="nav">
                    <li class="active"><a href="#tab_widget-2-1" data-toggle="tab">Nổi bật</a></li>
                    <li><a href="#tab_widget-2-2" data-toggle="tab">Mới</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab_widget-2-1" class="tab-pane active fade in">
                        <div class="tab-popular-posts">
                            <?php foreach ($popular_articles as $article):?>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('view/article/' . $article->alias); ?>">
                                            <img width="64"
                                                 height="64"
                                                 src="<?php echo base_url();?><?php echo $article->img;?>"
                                                 class="img-responsive wp-post-image"
                                                 alt="30"
                                                 sizes="(max-width: 64px) 100vw, 64px"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="entry-title">
                                            <a href="<?php echo base_url('view/article/' . $article->alias); ?>">
                                                <?php echo $article->title;?>
                                            </a>
                                        </h3>
                                        <div class="entry-meta small">
                                            <i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($article->post_on));?>
                                            <i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime($article->post_on));?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div id="tab_widget-2-2" class="tab-pane fade">
                        <div class="tab-latest-posts">
                            <?php foreach ($lastest_articles as $article):?>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('view/article/' . $article->alias); ?>">
                                            <img width="64"
                                                 height="64"
                                                 src="<?php echo base_url();?><?php echo $article->img;?>"
                                                 class="img-responsive wp-post-image"
                                                 alt="30"
                                                 sizes="(max-width: 64px) 100vw, 64px"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="entry-title">
                                            <a href="<?php echo base_url('view/article/' . $article->alias); ?>">
                                                <?php echo $article->title;?>
                                            </a>
                                        </h3>
                                        <div class="entry-meta small">
                                            <i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($article->post_on));?>
                                            <i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime($article->post_on));?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="image_widget-4" class="widget widget_image_widget"><h2 class="widgettitle">
                    Advertisement</h2>
                <a href="#" target="_blank">
                    <img src="<?php echo base_url();?>assets/frontend/wp-content/uploads/2014/01/sidebar-ad.png"
                                                 class="img-responsive" alt=""></a></div>

        </aside>
    </div>
</div>