<?php get_header(); ?>

<main class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-4xl font-bold mb-4">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    the_author();
                } elseif (is_date()) {
                    echo get_the_date();
                } else {
                    echo 'Tất cả bài viết';
                }
                ?>
            </h1>
            <p class="text-xl opacity-90">
                <?php
                if (is_category()) {
                    echo category_description();
                } else {
                    echo 'Khám phá các bài viết mới nhất từ chúng tôi';
                }
                ?>
            </p>
        </div>
    </section>

    <!-- Posts Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <?php if (have_posts()) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="aspect-w-16 aspect-h-9">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                         alt="<?php the_title_attribute(); ?>"
                                         class="w-full h-48 object-cover">
                                </div>
                            <?php endif; ?>

                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <span class="mr-4">
                                        <i class="far fa-calendar mr-1"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                    <span>
                                        <i class="far fa-user mr-1"></i>
                                        <?php the_author(); ?>
                                    </span>
                                </div>

                                <h2 class="text-xl font-semibold mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-blue-600 transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="text-gray-600 mb-4 line-clamp-3">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex flex-wrap gap-2">
                                        <?php
                                        $categories = get_the_category();
                                        foreach ($categories as $category) {
                                            echo '<span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">' . $category->name . '</span>';
                                        }
                                        ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-800 font-medium">
                                        Đọc thêm →
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <?php
                    echo paginate_links(array(
                        'prev_text' => '<i class="fas fa-chevron-left"></i> Trước',
                        'next_text' => 'Sau <i class="fas fa-chevron-right"></i>',
                        'class' => 'flex items-center space-x-2',
                        'type' => 'list'
                    ));
                    ?>
                </div>

            <?php else : ?>
                <div class="text-center py-16">
                    <div class="text-gray-400 mb-4">
                        <i class="far fa-newspaper text-6xl"></i>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">Không có bài viết nào</h2>
                    <p class="text-gray-500">Hiện tại chưa có bài viết nào được đăng.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
