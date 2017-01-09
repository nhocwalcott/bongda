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
                        Đăng ký tài khoản thành công
                        <a href="<?php echo base_url('account/login'); ?>">Đăng nhập tại đây</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('frontend/templates/footer'); ?>