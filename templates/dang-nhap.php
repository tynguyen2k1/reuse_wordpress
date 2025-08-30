<style>
  body {
    margin: 0;
    font-family: "Manrope", sans-serif;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url("<?php echo get_template_directory_uri(); ?>/img/freepik_10002644.png") no-repeat center center/cover;
  }

  .login-container {
    position: relative;
    z-index: 1;
    background: #fff;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    width: 360px;
  }

  .login-container h2 {
    margin: 0 0 20px;
    text-align: center;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    display: block;
    font-size: 14px;
    margin-bottom: 6px;
  }

  .form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
  }

  .forgot {
    text-align: right;
    margin-bottom: 15px;
  }

  .forgot a {
    color: #06c;
    font-size: 13px;
    text-decoration: none;
  }

  .btn {
    width: 100%;
    padding: 12px;
    background: linear-gradient(90deg, #00c851, #00e676);
    border: none;
    color: white;
    font-size: 15px;
    border-radius: 25px;
    cursor: pointer;
    margin-bottom: 15px;
  }

  .social-login {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 15px;
  }

  .social-login img {
    width: 36px;
    height: 36px;
    cursor: pointer;
  }

  .signup {
    text-align: center;
    font-size: 14px;
  }

  .signup a {
    color: #06c;
    text-decoration: none;
  }
</style>

<div class="login-container">
  <h2>Đăng nhập</h2>
  <div class="form-group">
    <label>Email</label>
    <input type="email" placeholder="Email của bạn">
  </div>
  <div class="form-group">
    <label>Mật khẩu</label>
    <input type="password" placeholder="******">
  </div>
  <div class="forgot">
    <a href="<?php echo home_url('/quen-mat-khau'); ?>">Quên mật khẩu?</a>
  </div>
  <button class="btn">Đăng nhập ngay</button>
  <div class="social-login">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logos_facebook.png" alt="Facebook">
    <img src="<?php echo get_template_directory_uri(); ?>/img/flat-color-icons_google.png" alt="Google">
    <img src="<?php echo get_template_directory_uri(); ?>/img/basil_apple-solid.png" alt="Apple">
  </div>
  <div class="signup">
    Bạn chưa có tài khoản? <a href="<?php echo home_url('/dang-ky'); ?>">Đăng ký ngay</a>
  </div>
</div>
