
<div class="col-md-9">

<div class="row">
    <div class="col-sm-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                CÁC TRẬN ĐẤU ĐANG CHUẨN BỊ DIỄN RA
            </a>
            <?php
            foreach ($matchs as $match) {
                echo "<a href='" . base_url() . "view/ticket/" . $match['match_id'] . "' class='list-group-item'>" . $match['match_name'] . "</a>";
            }
            ?>
        </div>
    </div><!-- /.col-sm-4 -->
    <div class="col-md-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo "TRẬN ĐẤU " . $match['match_name'] ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nơi Diễn Ra Trận Đấu</th>
                            <th>Số Vé Hiện Có</th>
                            <th>Mô Tả Trận Đấu</th>
                            <th>Thời Gian</th>
                            <th>Kiểu Vé</th>
                            <th>Giá vé</th>
                           <th>Đặt vé</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tickets as $ticket) {
                            echo "<tr>";
                            echo "<td>" . $ticket['location'] . "</td>";
                            echo "<td>" . $ticket['number'] . "</td>";
                            echo "<td>" . $ticket['description'] . "</td>";
                            echo "<td>" . $ticket['date'] . "</td>";
                            echo "<td>" . $ticket['type'] . "</td>";
                            echo "<td>" . $ticket['price']."</td>";
                            echo "<td>" . "<input type='checkbox' value = 'book' name = 'book_ticket'/>" . "</td>";
                           
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <button><a href="details_book">Thanh toán</a></button>
            </div>
        </div>
    </div>
</div>

</div>