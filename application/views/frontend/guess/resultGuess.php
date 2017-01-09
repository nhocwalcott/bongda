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
                <h2 style="color:#000000">Dự đoán kết quả tỷ số</h2>

                </br>
                <?php echo "Kết quả dự đoán: Trận thi đấu giữa 2 đội: ".$doi1." VA ".$doi2 ; ?>

            <?php
               foreach ($history1 as $h ) {
                   $thang_san_nha = $h['count_Thg'];
                    $thua_san_nha = $h['count_Thua'];
                    $hoa_san_nha = $h['count_Hoa'];
                }
//                ?>
                <?php
                foreach ($history2 as $h ) {
                    $thua_san_khach = $h['count_Thg'];
                    $thang_san_khach = $h['count_Thua'];
                    $hoa_san_khach = $h['count_Hoa'];
                }
//                ?>
                <?php
                foreach ($date as $d) {
                    $date = $d['year'];
                    list($ngaydl, $thangdl, $namdl) = explode("/",$date);
                }
//                ?>


                <?php

                foreach ($team1_recent as $t1) {

                    $rteam1_fthg_home = $t1['home_fthg'];
                    $rteam1_fthg_away = $t1['away_fthg'];
                    $rteam1_ftag_home = $t1['home_ftag'];
                    $rteam1_ftag_away = $t1['away_ftag'];
                    $rteam1_fequal_home = $t1['home_equal'];
                    $rteam1_fequal_away = $t1['away_equal'];

                }

                ?>
                <?php

                foreach ($team2_recent as $t1) {
                    $rteam2_fthg_home = $t1['home_fthg'];
                    $rteam2_fthg_away = $t1['away_fthg'];
                    $rteam2_ftag_home = $t1['home_ftag'];
                    $rteam2_ftag_away = $t1['away_ftag'];
                    $rteam2_fequal_home = $t1['home_equal'];
                    $rteam2_fequal_away = $t1['away_equal'];

                }

                ?>
                <?php
                foreach ($team1_ranking as $r1) {
                    $pteam1 = $r1['points'];
                }?>
                <?php
                foreach ($team2_ranking as $r1) {
                    $pteam2 = $r1['points'];
                }
                ?>

                <?php
                // lich su thi dau
                $tong = $thang_san_nha+$thang_san_khach+$thua_san_nha+$thua_san_khach+$hoa_san_nha+$hoa_san_khach;
                $x1 =($thang_san_nha+$thang_san_khach)/($tong+1);
                //phong do hien tai trong mua giai ve ty le thang san nha
                $tong_mua_giai_home = $rteam1_fthg_home + $rteam1_fequal_home + $rteam1_ftag_home;
                $x2 = $rteam1_fthg_home/($tong_mua_giai_home+1);
                $x3 = $pteam1/($pteam1+$pteam2+1);
                $kq = ($x1+$x2+$x3)/3;
                //Vi tri tren bang xep hang
//                echo "<br>";
//                echo "<h3>Tỷ lệ thắng của  ". $doi1." la </h3>".$kq;
//                echo "<br>";
//                echo "<h3> Theo tính toán của hệ thống: </h3>";
//                echo "<br>";
//                echo "<h4>So về Lich su thi dau: Tỷ lệ thắng trên sân nhà của đội chủ nhà là:</h4>".$x1;
//                echo "<br>";
//                echo "<h4>So về Phong độ hiện tại: Tỷ lệ thắng trên sân nhà của đội chủ nhà là:</h4>".$x2;
//                echo "<br>";
//                echo "<h4>So về Vị trí trên bảng xếp hạng: Tỷ lệ thắng trên sân nhà của đội chủ nhà là:</h4>".$x3;
//                echo "<br>";
                ?>

                <div class="results type-results status-publish has-post-thumbnail">

                    <div class="result-item">
                        <div class="result-info clearfix">
                            <p class="pull-left match-date">07 Dec 2014</p>
                            <p class="pull-right league-name">UEFA Champions League</p>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                <div class="media">
                                    <div class="pull-left hidden">
                                        <img src="<?php echo base_url()?>assets/frontend/wp-content/uploads/2013/11/011.png"" alt="Liverpool">
                                    </div>
                                    <div class="media-body">
                                        <h4><?php echo $doi1;?></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4 score">
                                <span class="label label-info"><?php echo round($kq*100,2);?>%</span>
                                -
                                <span class="label label-success"><?php echo 100-round($kq*100,2);?>%</span>
                            </div>

                            <div class="col-xs-4">
                                <div class="media">
                                    <div class="pull-right hidden">
                                        <img src="<?php echo base_url()?>assets/frontend/wp-content/uploads/2013/11/011.png"" alt="Liverpool">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="pull-right"><?php echo $doi2;?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="row" style="padding-top: 20px">
                                <div class="col-xs-4">
                                    <span class="label label-info text-left"><?php echo round($x1*100,2);?>%</span>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <span class="label label-warning">Lịch sử thi đấu</span>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <span class="label label-success pull-right"><?php echo 100-round($x1*100,2);?>%</span>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="col-xs-4">
                                    <span class="label label-info text-left"><?php echo round($x2*100,2);?>%</span>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <span class="label label-warning">Phong độ</span>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <span class="label label-success pull-right"><?php echo 100-round($x2*100,2);?>%</span>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="col-xs-4">
                                    <span class="label label-info text-left"><?php echo round($x3*100,2);?>%</span>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <span class="label label-warning">Bảng xếp hạng</span>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <span class="label label-success pull-right"><?php echo 100-round($x3*100,2);?>%</span>
                                </div>

                            </div>


                        </div>

                    </div>
                </div><!--/#post-->
                <br>
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

            </div>

            <?php $this->load->view('frontend/templates/sidebar');?>

        </div>
    </section>
<?php $this->load->view('frontend/templates/footer');?>