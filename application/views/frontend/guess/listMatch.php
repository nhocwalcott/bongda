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
            <br>
                <h2>Danh sách trận đấu sắp diễn ra</h2>
            <article id="post-330" class="post-330 post type-post status-publish format-standard has-post-thumbnail hentry category-nfl tag-football-2 tag-goals">
                
                <?php foreach ($list_match as $match):?>
                    <div id="post-322" class="post-322 results type-results status-publish has-post-thumbnail hentry result_cat-uefa-champions-league">

                        <div class="result-item">
                            <div class="result-info clearfix">
                                <p class="pull-left match-date">
                                    <?php echo $match['date']."-".$match['month']."-".$match['year'];?>
                                </p>
                                <p class="pull-right league-name">UEFA Champions League</p>
                            </div>

                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="media">
                                        <div class="pull-left hidden">
                                            <img src="<?php echo base_url()?>assets/frontend/wp-content/uploads/2013/11/011.png" alt="Liverpool">
                                        </div>
                                        <div class="media-body">
                                            <h4><?php echo $match['team1']?></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-4 score">
                                    <form action="<?php echo base_url();?>view/guess_result" method="post">
                                        <input type="hidden" name="trandau" value="<?php echo $match['match_id']?>">
                                        <button type="submit" class="btn btn-success">Dự đoán</button>
                                    </form>

                                </div>

                                <div class="col-xs-4">
                                    <div class="media">
                                        <div class="pull-right hidden">
                                            <img src="<?php echo base_url()?>assets/frontend/wp-content/uploads/2013/11/181.png" alt="Liverpool">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="pull-right"><?php echo $match['team2']?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/#post-->
                <?php endforeach;?>



                <div class="entry-content">


                    <div class="entry-tags">Tags: <a href="index3e36.html?tag=football-2" rel="tag">football</a>, <a href="indexb913.html?tag=goals" rel="tag">goals</a></div>

                </div>

                <footer>


                </footer>                   <nav class="navigation post-navigation" role="navigation">

            </article><!--/#post-->

        </div>
        <!--/#content -->
<!--Right-->
        <?php $this->load->view('frontend/templates/sidebar');?>
<!--End Right-->
    </div>
</section>
<?php $this->load->view('frontend/templates/footer');?>