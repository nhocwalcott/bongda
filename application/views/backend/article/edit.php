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
                Bài viết
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Chỉnh sửa bài viết</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <!-- Hiển thị nếu nhập dữ liệu lỗi -->
                        <?php echo validation_errors(); ?>
                        <form enctype="multipart/form-data" action="" method="post" autocomplete="off">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Tiêu đề: </label>
                                    <input type="text" name="title" class="form-control" value="<?php if(isset($article->description)) echo $article->description; ?>" >
                                </div>

                                <!-- Phân loại -->
                                <div class="form-group">
                                    <label>Nhóm</label>
                                    <select name="category" class="form-control">
                                        <?php
                                        foreach ($dropdownlist as $key => $value) {
                                            if ($key == $article->category_id) {
                                                echo '<option value="' . $key . '" selected="selected">' . $value . '</option>';
                                            } else {
                                                echo '<option value="' . $key . '">' . $value . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!-- Mô tả -->
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description" class="form-control"><?php if(isset($article->description)) echo $article->description; ?></textarea>
                                </div>

                                <!-- Nội dung -->
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea id="editor" name="content" class="form-control"><?php if(isset($article->content)) echo $article->content; ?></textarea>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <a href="<?php echo base_url('admin/articles_manager')?>" class="btn btn-warning">
                                    Quay lại
                                </a>
                                <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->


<?php $this->load->view('backend/templates/footer')?>