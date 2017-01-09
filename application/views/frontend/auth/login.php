<?php $this->load->view('frontend/templates/header');?>
<section id="main-body-wrapper" class="container">
    <div class="row" id="main-body">
        <div class="col-md-12">
            <div class="posts-container">
                <ul class="breadcrumb">
                    <li>
                        <a href="#" class="breadcrumb_home">Home</a>
                    </li>
                    <li class="active">

                        My Account
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <div id="post-1348" class="clearfix post-1348 page type-page status-publish hentry">
                            <div class="woocommerce">
                                <h2 class="center">Đăng nhập</h2>
                                <?php echo validation_errors(); ?>
                                <?php if ($this->session->flashdata('message')) {
                                    echo $this->session->flashdata('message');
                                } ?>
                                <form method="post" class="login" role="form" autocomplete="off">
                                    <p class="form-row form-row-wide">
                                        <label for="username">Tên đăng nhập<span class="required">*</span></label>
                                        <input type="text" class="input-text" name="username" id="username" value="<?php echo set_value('username'); ?>" />
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <label for="password">Mật khẩu <span class="required">*</span></label>
                                        <input class="input-text" type="password" name="password" id="password" />
                                    </p>
                                    <p class="form-row">
                                        <input type="submit" class="button" name="submit" value="Đăng nhập" />
                                        <label for="rememberme" class="inline">
                                            <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                            Ghi nhớ đăng nhập				
                                        </label>
                                    </p>
                                    <p class="lost_password">
                                        <a href="index852e.html?page_id=1348&amp;lost-password">
                                            Bạn mất tài khoản
                                        </a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('frontend/templates/footer'); ?>