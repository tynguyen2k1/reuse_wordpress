<?php
get_header();
?>

<div class="container max-w-7xl mx-auto px-6 py-3">
  <div class="form-box">
    <h2>Nhập OTP</h2>
    <form>
      <label for="exampleInputEmail1">Mã OTP</label>
      <div class="otp-inputs" id="exampleInputEmail1">
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
      </div>
      <button type="submit">Hoàn tất</button>
    </form>
    <p>Bạn chưa nhận được mã OTP? <a href="#">Gửi lại mã</a></p>
  </div>
</div>

<?php
get_footer();
?>
