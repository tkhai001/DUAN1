<?php
    function get_products_new(){
        global $conn;
        
        $sql = "SELECT * FROM sanpham ORDER BY ngay_nhap_hang DESC LIMIT 8";
        
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);

        $products = $stmt->fetchAll();

        foreach ($products as &$product) {
            $product['gia_ban'] = number_format($product['gia_ban'], 0, ',', ',');
        }

        return $products;
    }
    function get_products_sale(){
        global $conn;
        
        $sql = "SELECT * FROM sanpham Where gia_goc > 0 LIMIT 8";
        
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);

        $products = $stmt->fetchAll();

        foreach ($products as &$product) {
            $product['gia_ban'] = number_format($product['gia_ban'], 0, ',', ',');
        }
        foreach ($products as &$product) {
            $product['gia_goc'] = number_format($product['gia_goc'], 0, ',', ',');
        }

        return $products;
    }
?>