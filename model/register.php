<?php
    function checkemail($email){
        global $conn;
        $sql = "SELECT * FROM taikhoan where email = '".$email."'";
        
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        return $stmt -> fetch();
    }
    function register(){      
        if(isset($_POST['register']) && $_POST['register']){
            $check_email = checkemail($_POST['email']);
            if(empty($check_email)){
                if($_POST['matkhau'] == $_POST['matkhau']){
                    $sql = "INSERT INTO `taikhoan`(`email`, `hoten`, `matkhau`) VALUES (
                        :email,
                        :hoten,
                        :matkhau
                    )";

                    global $conn;
                    
                    $stmt = $conn->prepare($sql);
    
                    $stmt->bindParam(':email', $_POST['email']);
                    $stmt->bindParam(':hoten', $_POST['hoten']);
                    $stmt->bindParam(':matkhau', $_POST['matkhau']);
    
                    $stmt->execute();

                    echo("Đăng kí thành công!");
                }else{
                    echo("Mật khẩu không trùng khớp!");
                }
            }else{
                echo("Tài khoản đã tồn tại!");
            }
        }
    }
?>