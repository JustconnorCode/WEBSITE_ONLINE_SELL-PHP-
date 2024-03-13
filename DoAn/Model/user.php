<?php
class user
{
    function inserKhachhang($tenkh, $username, $matkhau, $email, $diachi, $sodt)
    {
        //B1: kết nối đc với dữ liệu
        $db = new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai) VALUES (NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$sodt')";
        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result = $db->exec($query);
        return $result; // lấy được dữ liệu về
    }
    function checkkh($user, $email)
    {
        //B1: kết nối đc với dữ liệu
        $db = new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $select = "SELECT * FROM khachhang WHERE username='$user' OR email='$email'";

        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result = $db->getList($select);
        return $result; // lấy được dữ liệu về
    }
    function logKhachHang($user, $passnew)
    {
        //B1: kết nối đc với dữ liệu
        $db = new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $select = "SELECT * FROM khachhang WHERE username='$user' and matkhau='$passnew'";

        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result = $db->getInstance($select);
        return $result; // lấy được dữ liệu về
    }
    function checkEmail($email)
    {
        $db = new connect();
        $select = "select * from khachhang where email = '$email'";
        $result = $db->getList($select);
        return $result;
    }
    function updateEmailPass($emailold, $passnew)
    {
        $db =  new connect();
        $query = "update khachhang set matkhau ='$passnew' where email = '$emailold'";
        $db->exec($query);
    }
    function checkpass($oldpass, $makh)
    {
        $db = new connect();
        $select = "select * from khachhang where matkhau = '$oldpass' and  makh ='$makh'";
        $result = $db->getList($select);
        return $result;
    }
    function updatepass($newpass, $makh)
    {
        $db =  new connect();
        $query = "update khachhang set matkhau ='$newpass' where makh = '$makh'";
        $db->exec($query);
    }
}
