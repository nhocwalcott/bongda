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
  <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lí bài viết
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- general form elements -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm mới bài viết</h3>
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
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title" placeholder="Username"
                                           name="title" value="<?php echo set_value('title');?>">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" accept="images/*" name="img" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phân loại</label>
                                    <select name="category" class="form-control">
                                        <?php
                                        foreach ($dropdownlist as $key => $value) {
                                            if ($key == set_value('category')) {
                                                echo '<option value="' . $key . '" selected="selected">' . $value . '</option>';
                                            } else {
                                                echo '<option value="' . $key . '">' . $value . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description" class="form-control"><?php echo set_value('description'); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea id="editor" name="content" class="form-control"><?php echo set_value('content'); ?></textarea>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <a href="<?php echo base_url('admin/articles_manager')?>" class="btn btn-warning">
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
<!--    <script type="text/javascript">-->
<!--        var editor = CKEDITOR.replace('editor');-->
<!--        CKFinder.setupCKEditor(editor, '--><?php //echo base_url() ?>//assets/ckfinder');
//    </script>
<?php $this->load->view('backend/templates/footer')?>