<?php $this->load->view('backend/templates/header')?>
    <!-- Left side column. contains the logo and sidebar -->
<?php if(check_admin()):?>
    <?php $this->load->view('backend/templates/leftside')?>
<?php endif;?>
<?php if(check_TicketManager()):?>
    <?php $this->load->view('backend/templates/leftside2')?>
<?php endif;?>
<?php if(check_ArticleManager()):?>
    <?php $this->load->view('backend/templates/leftside3')?>
<?php endif;?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Người dùng
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10">
                    <!-- general form elements -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm mới Videos</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <!-- Hiển thị nếu thành công -->
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo $this->session->flashdata('message');
                        }
                        ?>

                        <!-- Hiển thị nếu nhập dữ liệu lỗi -->
                        <?php echo validation_errors(); ?>
                        <form enctype="multipart/form-data" action="" method="post" autocomplete="off">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Tên video</label>
                                    <input type="text" name="title" class="form-control" value="<?php echo set_value('title'); ?>" >
                                </div>

                                <!-- Mô tả -->
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description" class="form-control"><?php echo set_value('description'); ?></textarea>
                                </div>

                                <!-- Nội dung -->

                                <div class="form-group">
                                    <label>Video</label>
                                    <input type="file" accept="video/*" name="video" class="form-control" />
                                    <!--
                                    <input type="hidden" name="MAX_FILE_SIZE" value="" />
                                    -->
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <a href="<?php echo base_url('admin/videos_manager')?>" class="btn btn-warning">
                                    Quay lại
                                </a>
                                <button type="submit" class="btn btn-success pull-right">Tạo mới</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
<?php $this->load->view('backend/templates/footer')?>