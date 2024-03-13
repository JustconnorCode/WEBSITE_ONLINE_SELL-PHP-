<?php
// session_unset();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
};
$act = 'cart';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'cart':
        include_once './View/cart.php';
        break;

    case 'cart_action':
        $id = 0;
        $soluong = 0;
        $ghichu = '';
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $soluong = $_POST['soluong'];
            $ghichu = $_POST['ghichu'];
            $gh = new cart();
            $gh->addCart($id, $ghichu, $soluong);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
        }
        break;
    case 'delete':
        $id = $_GET['id'];
        $gh = new cart();
        $gh->delete($id);
        unset($_SESSION['cart'][$id]);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
        break;
    case 'add':
        $soluong = $_GET['soluong'];
        $index = $_GET['index'];
        $gh = new cart();
        $gh->add($soluong, $index);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
        break;
    case 'minus':
        $soluong = $_GET['soluong'];
        $index = $_GET['index'];
        $gh = new cart();
        $gh->minus($soluong, $index);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
        break;
    case 'deleteAll':
        $gh = new cart();
        $gh->deleteAll();
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
        break;
}
