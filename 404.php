<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package reuse
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="min-h-screen flex flex-col items-center justify-center text-center px-6 py-12 bg-white">
		<div class="robot mb-6">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/img/404.png' ); ?>" alt="Robot Error" class="w-[505px] max-w-[90vw] mx-auto" />
		</div>
		<h1 class="text-2xl font-bold text-[#28a745] mb-2">Oops!</h1>
		<p class="text-base text-gray-700 mb-6">Trang không tìm thấy, vui lòng quay về trang chủ.</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block px-10 py-2 rounded-full font-bold text-white bg-[#28a745] hover:bg-[#218838] transition">
			Về trang chủ
		</a>
	</section>
</main>

<?php
get_footer();
