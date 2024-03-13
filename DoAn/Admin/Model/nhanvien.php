<?php
class nhanvien
{
    function getUserAdmin($user, $pass)
    {
        $db = new connect();
        $select = "select username,matkhau,role from nhanvien where username='$user' and matkhau='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
    function getnhavien()
    {
        $db = new connect();
        $select = "select * from nhanvien ";
        $result = $db->getList($select);
        return $result;
    }
    function insertnhanvien($hoten, $dia, $username, $matkhau, $role)
    {
        $db = new connect();
        $query = "insert into nhanvien(idnv,hoten, dia, username, matkhau, role) 
        values (NULL, '$hoten', '$dia', '$username', '$matkhau', $role)";

        $result = $db->exec($query);
        return $result;
    }
    function getnhanvienID($id)
    {
        $db = new connect();
        $select = "select * from nhanvien where idnv=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function updatenhanvien_action($idnv, $hoten, $dia, $username, $matkhau, $role)
    {
        $db = new connect();
        $query = "update nhanvien
        set hoten='$hoten',dia='$dia',username='$username',matkhau='$matkhau', role = $role
        where idnv=$idnv";

        $result = $db->exec($query);
        return $result;
    }
    function delete_nhavien($idnv)
    {
        $db = new connect();
        $query = "delete from nhanvien where idnv = $idnv";
        $result = $db->exec($query);
        return $result;
    }
}
