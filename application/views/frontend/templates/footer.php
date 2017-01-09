<section id="bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div id="text-2" class="widget widget_text"><h2 class="widgettitle">About Us</h2>
                    <div class="textwidget">Trang web bóng đá với mong muốn đem lại các thông tin hữu ích nhất cho bạn đọc.
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div id="latest_posts_widget-2" class="widget widget_latest_posts_widget"><h2 class="widgettitle">
                        Bài viết mới</h2>
                    <div class="latest-posts">
                        <div class="media">
                            <div class="pull-left">
                                <a href="<?php echo base_url('view/article/' . $popular_news[8]->alias); ?>">
                                    <img width="64" height="64"
                                       src="<?php echo base_url();?><?php echo $popular_news[8]->img;?>"
                                       class="img-responsive wp-post-image"
                                       alt="39"
                                       sizes="(max-width: 64px) 100vw, 64px"/>
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="entry-title">
                                    <a href="<?php echo base_url('view/article/' . $popular_news[8]->alias); ?>">
                                        <?php echo $popular_news[8]->title; ?>
                                    </a>
                                </h3>
                                <div class="entry-meta small">
                                    <i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($popular_news[8]->post_on));?>
                                    <i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime($popular_news[8]->post_on));?>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left"><a href="<?php echo base_url('view/article/' . $popular_news[6]->alias); ?>">
                                    <img width="64" height="64"
                                       src="<?php echo base_url();?><?php echo $popular_news[6]->img ?>"
                                       class="img-responsive wp-post-image"
                                       alt="28"
                                       sizes="(max-width: 64px) 100vw, 64px"/>
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="entry-title">
                                    <a href="<?php echo base_url('view/article/' . $popular_news[6]->alias); ?>">
                                        <?php echo $popular_news[6]->title; ?>
                                    </a>
                                </h3>
                                <div class="entry-meta small">
                                    <i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($popular_news[6]->post_on));?>
                                    <i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime($popular_news[6]->post_on));?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div id="tag_cloud-2" class="widget widget_tag_cloud"><h2 class="widgettitle">Tags</h2>
                    <div class="tagcloud">
                        <a href='<?php echo base_url('view/article/' . $popular_news[5]->alias); ?>' class='tag-link-11' title='4 topics'
                                             style='font-size: 15.333333333333pt;'>
                            Barcelona
                        </a>
                        <a href='<?php echo base_url('view/article/' . $popular_news[4]->alias); ?>' class='tag-link-12' title='2 topics'
                           style='font-size: 8pt;'>
                            Manchester United
                        </a>
                        <a href='<?php echo base_url('view/article/' . $popular_news[0]->alias); ?>' class='tag-link-37' title='3 topics'
                           style='font-size: 12pt;'>Ngoại hạng Anh</a>
                        <a href=<?php echo base_url('view/article/' . $popular_news[1]->alias); ?>' class='tag-link-42' title='3 topics'
                           style='font-size: 12pt;'>Việt Nam</a>
                        <a href='<?php echo base_url('view/article/' . $popular_news[2]->alias); ?>' class='tag-link-47' title='5 topics'
                           style='font-size: 18pt;'>AFF Cup</a>
                        <a href='<?php echo base_url('view/article/' . $popular_news[3]->alias); ?>' class='tag-link-54' title='3 topics'
                           style='font-size: 12pt;'>World Cup</a></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div id="social_widget-2" class="widget widget_social_widget"><h2 class="widgettitle">Social Icons</h2>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="clearfix">
    <div class="container">
        <div class="row">
            <div id="footer1" class="col-sm-6">
                <div class="footer1">
	          	<span class="copyright">
	          		© 2016 Bongda l All Rights Reserved. </span>
                </div>
            </div>
            <div id="footer2" class="col-sm-6">
                <a id="gototop" class="gototop" href="#"><i class="fa fa-angle-up"></i></a><!--#gototop-->
                <span class="brand-info">Thiết kế bởi Đỗ Nguyệt Anh</span>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</footer><!--/#footer-->
<script type='text/javascript'
        src='<?php echo base_url();?>assets/frontend/wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {
        "loaderUrl": "http:\/\/demo.themeum.com\/wordpress\/sportsline\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
        "recaptchaEmpty": "Please verify that you are not a robot.",
        "sending": "Sending ...",
        "cached": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url();?>assets/frontend/wp-content/plugins/contact-form-7/includes/js/scripts5b31.js?ver=4.3.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wordpress\/sportsline\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/wordpress\/sportsline\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View Cart",
        "cart_url": "http:\/\/demo.themeum.com\/wordpress\/sportsline\/?page_id=1346",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='<?php echo base_url();?>assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min18f6.js?ver=2.4.12'></script>
<script type='text/javascript'
        src='<?php echo base_url();?>assets/frontend/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wordpress\/sportsline\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/wordpress\/sportsline\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='<?php echo base_url();?>assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min18f6.js?ver=2.4.12'></script>
<script type='text/javascript'
        src='<?php echo base_url();?>assets/frontend/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wordpress\/sportsline\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/wordpress\/sportsline\/?wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='<?php echo base_url();?>assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min18f6.js?ver=2.4.12'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/frontend/wp-content/themes/sportsline/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/frontend/wp-content/themes/sportsline/assets/js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/frontend/wp-content/themes/sportsline/assets/js/jquery.fitvids.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/frontend/wp-content/themes/sportsline/assets/js/main.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/frontend/wp-content/themes/sportsline/assets/js/socialcount.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/frontend/wp-includes/js/wp-embed.min4235.js?ver=4.4.5'></script>
</body>

<!-- Mirrored from demo.themeum.com/wordpress/sportsline/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2016 04:51:52 GMT -->
</html>