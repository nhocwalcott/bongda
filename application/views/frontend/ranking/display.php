<?php $this->load->view('frontend/templates/header');?>
    <section id="main-body-wrapper" class="container">
        <div class="row" id="main-body">
            <div id="content" class="site-content col-md-8" role="main">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">
                                    <?php echo "BẢNG XẾP HẠNG KHU VỰC ";?>
                                </a>
                                <?php
                                foreach ($regionals as $r) {
                                    echo "<a href='" . base_url() . "view/ranking/" . $r['regional_id'] . "' class='list-group-item'>" . $r['regional_name'] . "</a>";
                                }
                                ?>
                                <form action="<?php echo base_url();?>view/ranking" method="post">
                                <select name = 'mua_giai'>
                                    <?php foreach ($year as $y) {

                                        echo "<option value = '".$y['year']."'>"."Mùa giải ".$y['year']."</option>";

                                    } ?>
                                </select>
                                <input type="submit" name="submit" value="Go"/>
                            </form>
                            </div>
                        </div><!-- /.col-sm-4 -->
                        <div class="col-md-8">
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo "BẢNG XẾP HẠNG BÓNG ĐÁ " . $regional->regional_name." Mùa Giải ".$mua_giai; ?></h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Vị trí BXH</th>
                                            <th>Tên Đội Bóng</th>
                                            <th>Số Trận Thắng</th>
                                            <th>Số Trận Thua</th>
                                            <th>Tổng Điểm</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $position = 1;
                                        foreach ($ranking as $r) {
                                            echo "<tr>";
                                            echo "<td>" . $position++ . "</td>";
                                            echo "<td>" . $r['team'] . "</td>";
                                            echo "<td>" . $r['won'] . "</td>";
                                            echo "<td>" . $r['lost'] . "</td>";
                                            echo "<td>" . $r['points'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="entry-content">

                        
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