<div class= "col-md-9">
 <form action = "<?php $_PHP_SELF ?>" method = "POST">
<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nơi Diễn Ra Trận Đấu</th>
                            <th>Số Vé Hiện Có</th>
                            <th>Mô Tả Trận Đấu</th>
                            <th>Thời Gian</th>
                            <th>Kiểu Vé</th>
                            <th>Giá vé</th>
                           <th>Số lượng đặt</th>
                           
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
                            echo "<td style = 'color: black';>" . "<input type = 'text' name = 'num_of_ticket'/>" . "</td>";
                           	
                            echo "</tr>";

                        }
                        ?>
                    </tbody>


</table>
 <input type="submit" value ="Tổng tiền">

</div>