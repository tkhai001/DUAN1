<?php
    function checkuser($email, $matkhau){
        global $conn;
        $sql = "SELECT * FROM `taikhoan` where email = '".$email."' AND matkhau = '".$matkhau."'";
        
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetch();
    }
    function login(){
        if(isset($_POST['login']) && $_POST['login']){
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];

            $thongtin = checkuser($email,$matkhau);

            if(!empty($thongtin)){
                $_SESSION['hoten'] = $thongtin['hoten'];
                $_SESSION['maNguoiDung'] = $thongtin['maNguoiDung'];
                $_SESSION['email'] = $thongtin['email'];
                $_SESSION['hinhanh'] = $thongtin['hinhanh'];
                // $_SESSION['quyentruycap'] = $thongtin['quyentruycap'];
                // if((isset($_SESSION['matk']) && ($_SESSION['matk'] > 0) && ($_SESSION['quyentruycap'] == "100"))){
                //     header("Location: ?mod=page&act=dashboard");
                // }else{
                //     header("Location: ?mod=page&act=home");
                // }
                header("Location: ?mod=page&act=home");
            }else{
                echo("Email hoặc mật khẩu không chính xác!");
            }
        }
    }
?>