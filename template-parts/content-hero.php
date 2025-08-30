<?php
$features = $args['features'] ?? [];
$cta_html = $args['cta_html'] ?? '';


$static_page = get_query_var('static_page');

// Nếu đang ở trang chủ và chưa truyền dữ liệu, dùng mặc định
if ( empty( $features ) && is_front_page() && empty($static_page)) {
	$features = [
		'Lan toả nguồn năng lượng mới',
		'Dọn dẹp quần áo cũ nhờ đến RU',
		'Giúp bạn luôn sáng tạo & tiết kiệm tiền',
		'Reuse tuần hoàn quần áo của bạn',
	];
}
if ( empty( $cta_html ) && is_front_page() && empty($static_page) ) {
	$cta_html = '<button class="cta">Liên hệ chúng tôi</button>';
}
?>
<header class="hero-section">
  <div class="max-w-7xl mx-auto px-6 py-16 flex">
    <div class="hero">
      <h1>THU QUẦN ÁO CŨ</h1>
      <p class="subtitle">Tạo vòng đời mới cho quần áo</p>
      <?php if ( ! empty( $features ) ) : ?>
        <ul class="features">
          <?php foreach ( $features as $item ) : ?>
            <li>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/taoanhdep_xoa_nen_anh_63554%201.png' ); ?>" alt="" />
              <?php echo esc_html( $item ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php if ( ! empty( $cta_html ) ) : ?>
        <?php echo $cta_html; // cta_html must be trusted/controlled content ?>
      <?php endif; ?>
    </div>

    <div class="hero-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/2150871136%201.png" alt="Quần áo cũ trên ghế" />
      <div class="bg-flip"></div>
    </div>
  </div>
</header>
