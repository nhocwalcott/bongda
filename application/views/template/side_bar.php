
<div class="col-md-3">

    <!-- hiển thị link bài viết -->
    <div class="list-group">
        <a class="list-group-item active">Tin tức cập nhật</a>
        <?php foreach ($articles_sidebar as $article) { ?>
            <a href="<?php echo base_url('view/article/' . $article->alias); ?>" class="list-group-item">
                <?php echo $article->title; ?>
            </a>
        <?php } ?>
    </div>

    <!-- hiển thị link video -->
    <div class="list-group">
        <a class="list-group-item active">Tường thuật trận đấu</a>
        <?php foreach ($videos_sidebar as $video) { ?>
            <a href="<?php echo base_url('view/video/' . $video->alias); ?>" class="list-group-item">
                <?php echo $video->title; ?>
            </a>
        <?php } ?>
    </div>

</div>
