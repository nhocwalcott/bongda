
<div class="col-md-3">
    <div class="list-group" style="padding-top:20px;">
        <a href="<?php echo base_url('admin/articles_manager'); ?>" class="list-group-item <?php if ($nav_admin == 'articles_manager') echo 'active';?>">Quản lý bài viết</a>
        <a href="<?php echo base_url('admin/add_article'); ?>" class="list-group-item <?php if ($nav_admin == 'add_article') echo 'active';?>">Thêm bài viết</a>
        <a href="<?php echo base_url('admin/videos_manager'); ?>" class="list-group-item <?php if ($nav_admin == 'videos_manager') echo 'active';?>">Quản lý video</a>
        <a href="<?php echo base_url('admin/add_video'); ?>" class="list-group-item <?php if ($nav_admin == 'add_video') echo 'active';?>">Thêm video</a>
        <a href="<?php echo base_url('admin/users_manager'); ?>" class="list-group-item <?php if ($nav_admin == 'users_manager') echo 'active';?>">Quản lí thành viên</a>
        <a href="<?php echo base_url('admin/add_user'); ?>" class="list-group-item <?php if ($nav_admin == 'add_user') echo 'active';?>">Thêm thành viên</a>
        <a href="<?php echo base_url('admin/tickets_manager'); ?>" class="list-group-item <?php if ($nav_admin == 'tickets_manager') echo 'active';?>">Quản lí vé</a>
        <a href="<?php echo base_url('admin/add_ticket'); ?>" class="list-group-item <?php if ($nav_admin == 'add_ticket') echo 'active';?>">Thêm vé</a>
    </div>
</div>
