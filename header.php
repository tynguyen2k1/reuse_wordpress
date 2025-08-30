<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reuse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'reuse'); ?></a>

		<nav class="navbar max-w-7xl mx-auto px-6 py-3">
			<div class="logo">
				<a href="<?php echo home_url('/'); ?>">
					<?php the_custom_logo(); ?>
				</a>
			</div>

			<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'container' => false,
					'menu_id' => 'primary-menu',
				));
			?>

			<div class="nav-right">
				<input type="text" placeholder="Nhập tên sản phẩm" class="search-box" />
				<img src="<?php echo get_template_directory_uri(); ?>/img/Bell.svg" />
				<div class="cart-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bag-2.svg" />
					<span class="cart-badge">2</span>
				</div>
				    <a href="<?php echo home_url('/dang-nhap'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/User%20Circle.svg" />
                    </a>
			</div>
		</nav>
