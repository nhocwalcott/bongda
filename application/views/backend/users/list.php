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
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách người dùng </h3>
                            <div class="box-tools" style="margin-right: 40px;">
                                <a href="<?php echo base_url('admin/add_user')?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-fw fa-user-plus"></i> Tạo tài khoản
                                </a>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phân quyền</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                <?php foreach ($list_users as $user):?>
                                <tr>
                                    <td><?php echo $user['user_id']?></td>
                                    <td><?php echo $user['username']?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td>
                                        <?php
                                            switch ($user['user_level']){
                                                case 0:
                                                    echo '<label class="label label-warning">User</label>';
                                                    break;
                                                case 1:
                                                    echo '<label class="label label-warning">Admin</label>';
                                                    break;
                                                case 2:
                                                    echo '<label class="label label-warning">TicketManager</label>';
                                                    break;
                                                case 3:
                                                    echo '<label class="label label-warning">ArticleManager</label>';
                                                    break;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('admin/edit_user/' . $user['user_id']); ?>" class="btn btn-info btn-xs">
                                                <i class="fa fa-fw fa-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url('admin/delete_user/' . $user['user_id']); ?>"
                                               onclick="return confirm('Are you sure?');" class="btn btn-danger btn-xs">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
<?php $this->load->view('backend/templates/footer')?>