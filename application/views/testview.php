<?php

foreach ($history1 as $h ) {
$thang_san_nha = $h['count_Thg'];
$thua_san_nha = $h['count_Thua'];
$hoa_san_nha = $h['count_Hoa'];
}
foreach ($history2 as $h ) {
	$thua_san_khach = $h['count_Thg'];
	$thang_san_khach = $h['count_Thua'];
	$hoa_san_khach = $h['count_Hoa'];
	}
foreach ($team1_recent as $t1) {
$rteam1_fthg_home = $t1['home_fthg'];
$rteam1_fthg_away = $t1['away_fthg'];
$rteam1_ftag_home = $t1['home_ftag'];
$rteam1_ftag_away = $t1['away_ftag'];
$rteam1_fequal_home = $t1['home_equal'];
$rteam1_fequal_away = $t1['away_equal'];

}
 

foreach ($team2_recent as $t1) {
$rteam2_fthg_home = $t1['home_fthg'];
$rteam2_fthg_away = $t1['away_fthg'];
$rteam2_ftag_home = $t1['home_ftag'];
$rteam2_ftag_away = $t1['away_ftag'];
$rteam2_fequal_home = $t1['home_equal'];
$rteam2_fequal_away = $t1['away_equal'];

}
 

foreach ($team1_ranking as $r1) {
	$pteam1 = $r1['points'];
}
foreach ($team2_ranking as $r1) {
	$pteam2 = $r1['points'];
}
	// lich su thi dau
$tong = $thang_san_nha+$thang_san_khach+$thua_san_nha+$thua_san_khach+$hoa_san_nha+$hoa_san_khach;
$x1 =($thang_san_nha+$thang_san_khach)/$tong;
//phong do hien tai trong mua giai ve ty le thang san nha
$tong_mua_giai_home = $rteam1_fthg_home + $rteam1_fequal_home + $rteam1_ftag_home;
$x2 = $rteam1_fthg_home/$tong_mua_giai_home;
//Vi tri tren bang xep hang
$x3 = $pteam1/($pteam1+$pteam2);
echo "Tham so thu 1 la: ".$x1;
echo "</br>";
echo "Tham so thu 2 la: ".$x2;
echo "</br>";
echo "Tham so thu 3 la: ".$x3;
echo "</br>";
?>