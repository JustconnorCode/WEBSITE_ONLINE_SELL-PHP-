<?php
if (isset($_GET['id'])) {
    include_once "View/chitietthucan.php";
} else {
    include_once "View/ThucAn.php";
}
