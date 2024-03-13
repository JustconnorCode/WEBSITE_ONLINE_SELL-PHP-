<?php
// $check=$kh->check($user,$email);
$act = "signin";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'signin':
        include_once "./View/signin.php";
        break;
    case 'dangky_action':
        $tenkh = '';
        $dc = ' ';
        $sodt = ' ';
        $user = ' ';
        $pass = ' ';
        $email = ' ';
        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh'];
            $dc = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpass'];
            $email = $_POST['txtemail'];
            //ma hoa pass
            $f = "sadda#";
            $l = "121212";
            $passnew = md5($f . $pass . $l);
            $kh = new user();
            $check = $kh->checkkh($user, $email);
            $count = $check->rowCount();
            if ($count > 0) {
                echo '<script> alert("Đăng ký thất bại!!!") </script>';
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=signin"/>';
            } else {
                $kq = $kh->inserKhachhang($tenkh, $user, $passnew, $email, $dc, $sodt);
                if ($kq != false) {
                    echo '<script> alert("Đăng ký thành công!!!") </script>';
                    echo '<meta http-equiv="refresh" content="0;url=index.php?action=login"/>';
                } else {
                    echo '<script> alert("Đăng ký thất bại!!!") </script>';
                    echo '<meta http-equiv="refresh" content="0;url=index.php?action=signin"/>';
                }
            }
        }
        break;
}
