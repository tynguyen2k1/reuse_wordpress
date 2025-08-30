<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reuse
 */

?>
	<footer class="footer">
		<div class="max-w-7xl mx-auto px-6 py-16">
			<div class="footer-top">
				<div class="footer-info">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_tst%201.png" alt="logo" class="footer-logo" />
					<p><img src="<?php echo get_template_directory_uri(); ?>/img/Map%20Point.png"> Tầng 3, Số 6A Vũ Phạm Hàm, Cầu Giấy, Hà Nội</p>
					<p><img src="<?php echo get_template_directory_uri(); ?>/img/Phone%20Calling.png"> +84 904 475 822</p>
					<p><img src="<?php echo get_template_directory_uri(); ?>/img/Letter.png"> cseglobal@greatminds.vn</p>
				</div>

				<div class="footer-col">
					<h4>Chính sách</h4>
					<ul>
						<li><a href="#">Chính sách bảo mật</a></li>
						<li><a href="#">Chính sách vận chuyển</a></li>
						<li><a href="#">Chính sách đổi trả</a></li>
					</ul>
				</div>

				<div class="footer-col">
					<h4>Về chúng tôi</h4>
					<ul>
						<li><a href="#">Trang chủ</a></li>
						<li><a href="#">Giới thiệu</a></li>
						<li><a href="#">Điều khoản</a></li>
						<li><a href="#">Trách nhiệm cộng đồng</a></li>
					</ul>
				</div>
			</div>

			<hr />

			<div class="footer-bottom">
				<p>Copyright © 2025 Reuse. All Rights Reserved.</p>
				<div class="footer-social">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Insta.png" alt="IG" /></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Fb.png" alt="FB" /></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Twiter.png" alt="TW" /></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Pintrest.png" alt="PT" /></a>
				</div>
			</div>

			<div class="scan-container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Barcode%20qr%201.png" alt="QR" class="qr" />
				<p class="label">QUÉT MÃ</p>
				<img src="<?php echo get_template_directory_uri(); ?>/img/Frame.png" alt="Chat" />
				<img src="<?php echo get_template_directory_uri(); ?>/img/Frame%201000004284.png" alt="Up" />
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
