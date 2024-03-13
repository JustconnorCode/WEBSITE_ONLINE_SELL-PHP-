<?php
class loai
{
    function getLoai()
    {
        $db = new connect();
        $select = "select distinct maloaita from thucan";
        $result = $db->getList($select);
        return $result;
    }
    function getLoaiNV()
    {
        $db = new connect();
        $select = "select distinct role from nhanvien";
        $result = $db->getList($select);
        return $result;
    }
}
