<div class="box_log_reg">
    <div class="box_form_log_reg">
        <div class="form_top">
            <img src="/upload/icon/logo.png" alt="">
            <p>Welcome to OCEAN FURNITURE store 👋🏻</p>
        </div>
        <form action="" method="POST">
            <input class="input_log_reg" type="email" placeholder="Email" name="email"><br>
            <input class="input_log_reg" type="password" placeholder="Password" name="matkhau"><br>
            <input class="input_submit" type="submit" value="ĐĂNG NHẬP" name="login"><br>
            <p class="thongbao"><?php login(); ?></p>
        </form>
        <div class="form_bottom">
            <p>Bạn chưa có tài khoản? </p>
            <a href="index.php?mod=user&act=register">Đăng kí</a>
        </div>
    </div>
</div>