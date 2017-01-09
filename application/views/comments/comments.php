
<?php foreach ($comments as $comment) { ?>
        <table class="table">
            <tr>
                <td>
                    <div class="row">
                        <strong><?php echo $comment->username; ?></strong>
                        &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
                        <?php echo $comment->posted_on; ?>
                    </div>
                    <div class="row">
                        <?php echo $comment->content; ?>
                    </div>
                </td>
            </tr>
        </table>
<?php } ?>
