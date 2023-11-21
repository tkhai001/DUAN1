<?php
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case "home":
                include_once 'model/conect.php';
                include_once 'model/products.php';
                include_once 'model/categories.php';
                $data['dsspnew'] = get_products_new();
                $data['dsspsale'] = get_products_sale();
                $data['dsdm'] = get_categories();

                include_once 'view/template_header.php';
                include_once 'view/page_home.php';
                include_once 'view/template_footer.php';
                break;
            default:
                // include_once 'view/home.php';
                break;
        }
    }
?>