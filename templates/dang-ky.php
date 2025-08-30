<?php
get_header();
?>

<div class="container max-w-7xl mx-auto px-6 py-10">
    <div class="form-box">
        <h2>Đăng ký tài khoản</h2>
        <form>
            <label for="full_name">Họ và tên</label>
            <input id="full_name" type="text" placeholder="Họ và tên" required>

            <label for="user_email">Email</label>
            <input id="user_email" type="email" placeholder="Email" required>

            <label for="user_password">Mật khẩu</label>
            <input id="user_password" type="password" placeholder="Mật khẩu" required>

            <button type="submit">Tạo tài khoản</button>
        </form>
        <p>Bạn đã có tài khoản? <a href="<?php echo home_url('/dang-nhap'); ?>">Đăng nhập</a></p>
    </div>
</div>

<?php
get_footer();
?>
