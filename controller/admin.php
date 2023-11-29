<?php
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case "comment":
                include_once 'model/conect.php';
                include_once 'model/comment.php';
                $data['dsbl'] = get_comments();

                include_once 'view/template_header_admin.php';
                include_once 'view/page_admin_comment.php';
                include_once 'view/template_footer_admin.php';
                break;
            default:
                // include_once 'view/home.php';
                break;
        }
    }
?>