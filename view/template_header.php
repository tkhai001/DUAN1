<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style_page_home.css">
    <title>Trang Chủ</title>
</head>
<body>
    <header>
        <div class="div_header_top">
            <div class="div_social_media">
                <a href="#"><img class="social_media_icon" src="/upload/icon/Logo Facebook.png" alt=""></a>
                <a href="#"><img class="social_media_icon" src="/upload/icon/Logo IN.png" alt=""></a>
                <a href="#"><img class="social_media_icon" src="/upload/icon/Logo Instagram.png" alt=""></a>
                <a href="#"><img class="social_media_icon" src="/upload/icon/Logo Google.png" alt=""></a>
            </div>
            <div class="div_header_top_right_box">
                <div class="user_option">
                        <?php
                            if(isset($_SESSION['maNguoiDung']) && ($_SESSION['maNguoiDung'] > 0)){
                                echo'<img src="/upload/avt/'.$_SESSION['hinhanh'].'" alt="">';
                                echo'<a class="view-name" href="#">'.$_SESSION['hoten'].'</a>';
                            }else{
                                echo'
                                    <a href="index.php?mod=user&act=login"><button class="btn-log">Đăng nhập</button></a>
                                    <a href="index.php?mod=user&act=register"><button class="btn-reg">Đăng kí</button></a>
                                ';
                            }
                        ?>
                    <!-- <a href="index.php?mod=page&act=login"><button class="btn-log">Đăng nhập</button></a>
                    <a href="index.php?mod=page&act=register"><button class="btn-reg">Đăng kí</button></a> -->
                </div>
                <div class="lang_option">
                    <img src="/upload/icon/lang.png" alt="">
                </div>
            </div>
        </div>
        <img src="/upload/icon/Kẻ 1.png" alt="">
        <div class="div_header_bot">
            <a href="index.php?mod=page&act=home"><div class="logo"><img src="/upload/icon/logo.png" alt=""></div></a>
            <div class="div_header_bot_right">
                <div class="div_search">
                    <input type="text" placeholder="Tìm sản phẩm">
                    <img class="search-icon" src="/upload/icon/search icon.png" alt="">
                </div>
                <div class="div_cart">
                    <img src="/upload/icon/cart icon.png" alt="">
                    <p>(5)</p>
                </div>
            </div>
        </div>
        <div class="div_header_nav">
            <div>
                <a href="">TRANG CHỦ</a>
                <a href="">SẢN PHẨM</a>
                <a href="">GIỚI THIỆU</a>
                <a href="">LIÊN HỆ</a>
            </div>
        </div>
    </header>