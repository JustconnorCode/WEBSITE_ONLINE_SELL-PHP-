<?php
if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    $hd = new hoadon();
    $sohd = $hd->insertHoaDon($makh);
    $_SESSION['masohd'] = $sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $hd->insertCTHoaDon($sohd, $item['mahh'], $item['qty'],  $item['ghichu'], $item['total']);
        $total += $item['total'];
    }
    $hd->updateHoaDon($sohd, $makh, $total);
}
include_once "./View/order.php";
unset($_SESSION['cart']);
