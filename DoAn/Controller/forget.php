<?php
$act = 'forget';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'forget':
        include_once "./View/forgetpassword.php";
        break;
    case 'forget_action':
        if (isset($_POST['submit_email'])) {
            $email = $_POST['email'];
            $_SESSION['email'] = array();
            $kh = new user();
            $checkemail = $kh->checkEmail($email)->rowCount();
            if ($checkemail > 0) {
                $code = random_int(10000, 1000000);
                $item = array(
                    'id' => $code,
                    'email' => $email,
                );
                $_SESSION['email'][] = $item;
                // tiến hành gửi mail
                $mail = new PHPMailer();
                $mail->CharSet = "utf-8";
                $mail->IsSMTP();
                // enable SMTP authentication
                $mail->SMTPAuth = true;
                // GMAIL username to:
                // $mail->Username = "php22023@gmail.com";//
                $mail->Username = "nguyentan382004@gmail.com"; // địa chỉ của trang web
                // GMAIL password
                // $mail->Password = "php22023ngoc";
                $mail->Password = "kwvb omwk dpgk etoq"; //mật khẩu ứng dụng
                $mail->SMTPSecure = "tls";  // ssl
                // sets GMAIL as the SMTP server
                $mail->Host = "smtp.gmail.com";
                // set the SMTP port for the GMAIL server
                $mail->Port = "587"; // 465
                $mail->From = 'nguyentan382004@gmail.com';
                $mail->FromName = 'Tấn';
                // $getemail là địa chỉ mail mà người nhập vào địa chỉ của họ đã đăng ký trong trang web
                $mail->AddAddress($email, 'reciever_name');
                $mail->Subject = 'Reset Password';
                $mail->IsHTML(true);
                $mail->Body = 'Cấp lại mã code ' . $code . '';
                if ($mail->Send()) {
                    echo '<script> alert("Mã code đã được gửi qua email của bạn");</script>';
                    include "./View/resetpw.php";
                } else {
                    echo "Mail Error - >" . $mail->ErrorInfo;
                    include "./View/forgetpassword.php";
                }
                // include "./View/resetpw.php";
            } else {
                echo '<script> alert("Địa chỉ email ko tồn tại");</script>';
                include "./View/forgetpassword.php";
            }
        }
        break;
    case 'reset':
        if (isset($_POST['submit'])) {
            $pass = $_POST['password'];
            foreach ($_SESSION['email'] as $key => $item) {
                if ($item['id'] == $pass) {
                    $emailold = $item['email'];
                    $saltF = "sadda#";
                    $salfL = "121212";
                    $passnew = md5($saltF . $pass . $salfL);
                    $kh = new user();
                    $kh->updateEmailPass($emailold, $passnew);
                    include "./View/login.php";
                } else {
                    echo '<script> alert("Mật khẩu được không hợp lệ");</script>';
                    include "./View/resetpw.php";
                }
            }
        }
        break;
    case 'change':
        include "./View/change.php";
        break;
    case 'change_action':
        if (isset($_POST['submit'])) {
            $oldpass = $_POST['oldpass'];
            $newpass = $_POST['newpass'];
            $saltF = "sadda#";
            $salfL = "121212";
            $oldpass = md5($saltF . $oldpass . $salfL);
            $newpass = md5($saltF . $newpass . $salfL);
            if (isset($_SESSION['makh'])) {
                $makh = $_SESSION['makh'];
                $kh = new user();
                $checkpass = $kh->checkpass($oldpass, $makh)->rowCount();
                if ($checkpass > 0) {
                    $kh->updatepass($newpass, $makh);
                    echo '<script> alert("Thay đổi nhật khẩu thành công");</script>';
                    include "./View/login.php";
                    break;
                }
                echo '<script> alert("Mật khẩu không đúng");</script>';
                include "./View/change.php";
                break;
            }
            echo '<script> alert("dsdsdsdsd");</script>';
        }
        break;
}
