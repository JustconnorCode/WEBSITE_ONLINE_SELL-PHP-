<?php
class khachhang
{
    function getkhachhang()
    {
        $db = new connect();
        $select = "select * from khachhang ";
        $result = $db->getList($select);
        return $result;
    }
    function bankhachhang($makh)
    {
        $db = new connect();
        $select = "delete from khachhang where makh = $makh";
        $result = $db->exec($select);
        return $result;
    }
    function silentkhachhang($makh)
    {
        $db = new connect();
        $test = "select cam from khachhang where makh = $makh";
        $test1 = $db->getInstance($test);
        if ($test1[0] == 0) {
            $check = 1;
        } else {
            $check = 0;
        }
        $test1[0] = 0;
        $query = "Update khachhang set cam = $check where makh = $makh ";
        $result = $db->exec($query);
        return $result;
    }
}
