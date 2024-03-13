<?php
$act = "login";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'login':
        include_once "./View/login.php";
        break;

    case 'dangnhap_action':

        $user = '';
        $pass = '';

        if (isset($_POST['submit'])) {

            $user = $_POST['tendangnhap'];
            $pass = $_POST['matkhau'];

            //ma hoa pass
            $f = "sadda#";
            $l = "121212";
            $passnew = md5($f . $pass . $l);
            $kh = new user();
            $logkh = $kh->logKhachHang($user, $passnew);
            if ($logkh) {
                if ($logkh['cam'] == 0) {
                    $_SESSION['makh'] = $logkh['makh'];
                    $_SESSION['tenkh'] = $logkh['tenkh'];
                    $_SESSION['email'] = $logkh['email'];
                    echo '<script>alert("Đăng nhập thành công")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?"/>';
                } else {
                    echo '<script>alert("Tài khoảng của bạn đã bị cấm do một vài lý do")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?"/>';
                }
            } else {
                echo '<script>alert("Đăng nhập thất bại")</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
            }
        }

        break;
    case 'logout':
        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        echo '<meta http-equiv="refresh" content="0;url=index.php?"/>';
        break;
}
