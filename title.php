<?php
$title = basename($_SERVER['PHP_SELF']);
switch($title){
    case 'index.php':
        $title ="KDInfoSystems || Home";
        break;
    default:
    $title = "Title Here";
    break;
    }