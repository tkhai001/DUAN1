<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case "login":
                include_once 'model/conect.php';
                include_once 'model/login.php';
                
                include_once 'view/template_header.php';
                include_once 'view/page_login.php';
                include_once 'view/template_footer.php';
                break;
            case "register":
                include_once 'model/conect.php';
                include_once 'model/register.php';
                
                include_once 'view/template_header.php';
                include_once 'view/page_register.php';
                include_once 'view/template_footer.php';
                break;
            default:
                include_once 'view/home.php';
                break;
        }
    }
?>