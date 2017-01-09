<?php $this->load->view('backend/templates/header')?>
    <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('backend/templates/leftside')?>

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
                <div class="col-xs-offset-3 col-xs-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Chỉnh sửa tài khoản</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <!-- Hiển thị nếu nhập dữ liệu lỗi -->
                        <?php echo validation_errors(); ?>
                        <form enctype="multipart/form-data" action="" method="post" autocomplete="off">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                          name="username" value="<?php if(isset($user['username'])) echo $user['username']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                                           name="email" value="<?php if(isset($user['email'])) echo $user['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                    name="password" value="<?php if(isset($user['password'])) echo $user['password']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phân quyền</label>
                                    <select class="form-control" name="user_level">
                                        <option value="0" <?php if ($user['user_level'] == 0) { echo "selected";}?>>User</option>
                                        <option value="1" <?php if ($user['user_level'] == 1) { echo "selected";}?>>Admin</option>
                                        <option value="2" <?php if ($user['user_level'] == 2) { echo "selected";}?>>TicketManger</option>
                                        <option value="3" <?php if ($user['user_level'] == 3) { echo "selected";}?>>ArticleManager</option>
                                    </select>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <a href="<?php echo base_url('admin/users_manager')?>" class="btn btn-warning">
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