<?php
    function get_categories(){
        global $conn;
        
        $sql = "SELECT * FROM danhmuc";
        
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
?>