<?php
/*
Template Name: Landing (Hero + Content)
*/
get_header();

get_template_part('template-parts/content-hero');

echo '<main class="max-w-7xl mx-auto px-6 py-16">';
while ( have_posts() ) : the_post();
  the_content();
endwhile;
echo '</main>';

get_footer();
