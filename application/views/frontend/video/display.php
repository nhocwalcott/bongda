<?php $this->load->view('frontend/templates/header'); ?>
<section id="main-body-wrapper" class="container">
    <div class="row" id="main-body">
        <div id="content" class="site-content col-md-8" role="main">
            <ul class="breadcrumb">
                <li>
                    <a href="#" class="breadcrumb_home">Home</a>
                </li>
                <li class="active">

                    <a href="index81ea.html?cat=3">Football</a> <span class="raquo">/</span> Brazil vs spain confederation cup 2013
                </li>
            </ul>
            <article id="post-414" class="post-414 post type-post status-publish format-video has-post-thumbnail hentry category-football tag-barcelona tag-brazil tag-premier tag-real-madrid post_format-post-format-video">

                <header class="entry-header">

                    <div class="entry-thumbnail">
                   
                        <video controls preload="auto" width="100%">
                      
                       
                         
                            
                             <source src="<?php echo base_url().$video[0]['link']; ?>" type="video/mp4">
                            
                        
                            Your browser does not support the video tag.
                        </video>
                       
                    </div>

                    <h2 class="entry-title">
                        <?php echo $video[0]['title'];?>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="author"><i class="fa fa-pencil"></i>
                                <a href="indexcd64.html?author=1" title="Posts by admin" rel="author">
                                    admin
                                </a>
                            </li>

                            <li class="date">
                                <i class="fa fa-clock-o"></i>
                                <time class="entry-date" datetime="2013-11-25T12:31:28+00:00">25 Nov 2013</time>
                            </li>
                            <li class="category">
                                <i class="fa fa-folder-open-o"></i>
                                <a href="index81ea.html?cat=3" rel="category">
                                    Football
                                </a>
                            </li>
                        </ul>
                    </div><!--/.entry-meta -->

                </header><!--/.entry-header -->

                <div class="entry-content">
                    <?php echo $video[0]['description']; ?>
                    <div class="entry-tags">Tags: <a href="index8573.html?tag=barcelona" rel="tag">Barcelona</a>, <a href="index7fd1.html?tag=brazil" rel="tag">brazil</a>, <a href="index3b9c.html?tag=premier" rel="tag">premier</a>, <a href="index53fb.html?tag=real-madrid" rel="tag">Real madrid</a></div>    </div>

                <footer>
                </footer>
                <nav class="navigation post-navigation" role="navigation">

                </nav><!-- .navigation -->

                <span class='st_sharethis_large' displayText='ShareThis'></span>
                <span class='st_facebook_large' displayText='Facebook'></span>
                <span class='st_twitter_large' displayText='Tweet'></span>
                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                <span class='st_pinterest_large' displayText='Pinterest'></span>
                <span class='st_email_large' displayText='Email'></span>
                <span class='st_googleplus_large' displayText='Google +'></span>


            </article><!--/#post-->

        </div><!--/#content -->

        <!--Right-->
        <?php $this->load->view('frontend/templates/sidebar');?>
        <!--End Right-->

    </div>
</section>
<?php $this->load->view('frontend/templates/footer'); ?>