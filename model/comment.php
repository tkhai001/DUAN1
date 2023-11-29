<?php
    function get_comments(){
        global $conn;
        
        $sql = "SELECT MIN(bl.ngay) AS old_date, MAX(bl.ngay) AS new_date, COUNT(*) AS total_comments, 
        bl.masp, sp.masp, sp.tensp AS ten_sp, sp.hinhanh_sp AS hinh_anh
        FROM binhluan bl
        JOIN sanpham sp ON sp.masp = bl.masp
        WHERE bl.masp = sp.masp
        GROUP BY sp.masp";
        
        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
?>