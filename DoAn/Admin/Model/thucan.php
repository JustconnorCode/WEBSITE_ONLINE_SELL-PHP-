<?php
class thucan
{
    function getthucan()
    {
        $db = new connect();
        $select = "select * from thucan";
        $result = $db->getList($select);
        return $result;
    }
    function insertthucan($tenta, $hinhta, $maloaita, $motata, $giata)
    {
        $db = new connect();
        $query = "insert into thucan(mata,tenta,hinhta,maloaita,motata,giata) 
        values (NULL, '$tenta', '$hinhta', $maloaita, '$motata', $giata)";

        $result = $db->exec($query);
        return $result;
    }
    // phường thức lấy thông tin dựa vào id
    function getthucanID($id)
    {
        $db = new connect();
        $select = "select * from thucan where mata=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function updatethucan($mata, $tenta, $hinhta, $maloaita, $motata, $giata)
    {
        $db = new connect();
        $query = "update thucan 
        set tenta='$tenta',hinhta='$hinhta',maloaita=$maloaita,motata='$motata', giata = $giata
        where mata=$mata";

        $result = $db->exec($query);
        return $result;
    }
    function hiddenthucan($mata)
    {
        $db = new connect();
        $test = "select hidden from thucan where mata = $mata";
        $test1 = $db->getInstance($test);
        $check = '';
        if ($test1[0] == 0) {
            $check = 1;
        } else {
            $check = 0;
        }
        $query = "Update thucan set hidden = $check where mata = $mata ";
        $result = $db->exec($query);
        return $result;
    }
}
