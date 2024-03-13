<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case 'search':
        include_once "./View/search.php";
        break;
}
