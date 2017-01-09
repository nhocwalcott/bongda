<?php $this->load->view('frontend/templates/header');?>
<section id="main-body-wrapper" class="container">
    <div class="row" id="main-body">
        <div id="content" class="site-content col-md-8" role="main">
            <ul class="breadcrumb">
                <li>
                    <a href="#" class="breadcrumb_home">Home</a>
                </li>
                <li class="active">
                    <a href="">NFL</a>
                    <span class="raquo">/</span> McNulty: Arsenal&#8217;s draw shows need to goal
                </li>
            </ul>

            <article id="post-330" class="post-330 post type-post status-publish format-standard has-post-thumbnail hentry category-nfl tag-football-2 tag-goals">
                <header class="entry-header">
<!--                    <div class="entry-thumbnail">-->
<!--                        <img width="800" height="445" src="wp-content/uploads/2014/01/30.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="30" srcset="http://demo.themeum.com/wordpress/sportsline/wp-content/uploads/2014/01/30-682x380.jpg 682w, http://demo.themeum.com/wordpress/sportsline/wp-content/uploads/2014/01/30-400x222.jpg 400w, http://demo.themeum.com/wordpress/sportsline/wp-content/uploads/2014/01/30.jpg 800w" sizes="(max-width: 800px) 100vw, 800px" />    -->
<!--                    </div>-->

                    <h2 class="entry-title">
                        <?php echo $article->title;?>
                    </h2>
                    <div class="entry-meta">
                        <ul>
                            <li class="author">
                                <i class="fa fa-pencil"></i> 
                                <a href="indexcd64.html?author=1" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="date"><i class="fa fa-clock-o"></i> 
                                <time class="entry-date" datetime="2013-11-25T10:13:52+00:00">
                                    <?php echo date('d-m-Y', strtotime($article->post_on))?>
                                </time>
                            </li>
                            <li class="category"><i class="fa fa-folder-open-o"></i>
                                <a href="indexaa1e.html?cat=4" rel="category">
                                    NFL
                                </a>
                            </li>
                        </ul>
                    </div><!--/.entry-meta -->
                </header><!--/.entry-header -->

                <div class="entry-content">

                    <h4><?php echo $article->description ?></h4>
                    <?php echo $article->content ?>
                    <div class="entry-tags">Tags: <a href="index3e36.html?tag=football-2" rel="tag">football</a>, <a href="indexb913.html?tag=goals" rel="tag">goals</a></div>

                </div>

                <footer>


                </footer>		    		<nav class="navigation post-navigation" role="navigation">

                </nav><!-- .navigation -->

                <span class='st_sharethis_large' displayText='ShareThis'></span>
                <span class='st_facebook_large' displayText='Facebook'></span>
                <span class='st_twitter_large' displayText='Tweet'></span>
                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                <span class='st_pinterest_large' displayText='Pinterest'></span>
                <span class='st_email_large' displayText='Email'></span>
                <span class='st_googleplus_large' displayText='Google +'></span>

                <div id="comments" class="comments-area">



                </div>
            </article><!--/#post-->

        </div>
        <!--/#content -->
<!--Right-->
        <?php $this->load->view('frontend/templates/sidebar');?>
<!--End Right-->
    </div>
</section>
<?php $this->load->view('frontend/templates/footer');?>