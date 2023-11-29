<?php
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case "pay_online":
                include_once 'model/conect.php';

                include_once 'view/page_pay.php';
                break;
            case "payUrl":
                include_once 'model/conect.php';
                include_once 'model/momo_onl_checkout.php';

                include_once 'view/momo_onl_checkout.php';
                break;
            case "payok":
                include_once 'model/conect.php';

                include_once 'view/template_header.php';
                include_once 'view/page_payok.html';
                include_once 'view/template_footer.php';
                break;
            default:
                // include_once 'view/home.php';
                break;
        }
    }
?>