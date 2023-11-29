<?php
    session_start();
    if(isset($_GET['mod'])){
        switch($_GET['mod']){
            case "page":
                include_once 'controller/page.php';
                break;
            case "user":
                include_once 'controller/user.php';
                break;
            case "admin":
                include_once 'controller/admin.php';
                break;
            case "pay":
                include_once 'controller/pay.php';
                break;
            default:
                // include_once ;
                break;
        }
    }else{
        header("Location: ?mod=page&act=home");
    }
?>
