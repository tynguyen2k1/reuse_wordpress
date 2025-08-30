<?php
get_header();
?>

<?php get_template_part( 'template-parts/content-hero' ); ?>

<section class="max-w-7xl mx-auto px-6 py-16">
    <div class="section">
        <div class="image-wrapper">
            <img src=" [theme_img src='Group%201261154280.png' ]" alt="woman with clothes" />
        </div>
        <div class="content">
            <h2>Mang đến cho quần áo của bạn <br>vòng đời mới</h2>
            <p>
                Bạn muốn thanh lọc dọn dẹp bớt tủ đồ? Đang không biết cho ai, làm gì và xử lý nhưng thế nào để không phát thải <br> ra môi trường.
            </p>
            <p>
                Gửi ngay đến RU, chúng tôi sẽ giúp bạn phân loại, làm sạch để tái sử dụng và xửlý không phát thải thay bạn.
            </p>
            <p>
                Chúng tôi làm việc này với mong muốn giúp nhiều người mặc đẹp mà tiết kiệm chi tiêu, giúp cuộc sống tốt đẹp hơn.
            </p>
            <button class="create-billing">Tạo đơn</button>
        </div>
    </div>
</section>

<section class="section-3 flex flex-col items-center justify-center p-16">
    <div class="text-center text-white mb-12">
        <h3 class="text-[#24AA4B] text-[40px] font-[600]">Làm thế nào để cho tặng?</h3>
        <h2 class="text-[#253739] text-[40px] font-[600]">Hãy để Reuse giúp bạn!</h2>
    </div>

    <div class="progress-container">
        <div class="step">01</div>
        <div class="line"></div>
        <div class="step">02</div>
        <div class="line"></div>
        <div class="step">03</div>
    </div>

    <div class="flex gap-6 max-w-6xl px-4">
        <div class="bg-white rounded-2xl shadow-md p-6 flex-1 text-center">
            <img src="[theme_img src='eccb67c148f80878f06b81ea2b3c50bb63d2659d.png' ]" alt="" width="60px" height="60px" />
            <h3 class="font-[600] text-[22px] mt-2 leading-[1.4]">
                Chuẩn bị quần áo cho vào túi<br/>và chụp lại hình ảnh túi đồ
            </h3>
            <p class="text-[#1A1919] text-[16px] font-[400] mt-4">
                Bạn chỉ cần đóng gói và chụp hình túi đồ để Reuse biết nhé.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 flex-1 text-center">
            <img src="[theme_img src='62daa73d8213b798e11511f7583220b2b2947a69.png' ]" alt="" width="60px" height="60px" />
            <h3 class="font-[600] text-[22px] mt-2 leading-[1.4]">
                Điền các thông tin<br/>cần thiết
            </h3>
            <p class="text-[#1A1919] text-[16px] font-[400] mt-4">
                Nhập thông tin của bạn để Reuse có thể liên hệ hỗ trợ bạn.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 flex-1 text-center">
            <img src="[theme_img src='4390d7f5a45b9378260b199a5b245f5a98fa39ed.png' ]" alt="" width="60px" height="60px" />
            <h3 class="font-[600] text-[22px] mt-2 leading-[1.4]">
                Nhấn tạo đơn cho tặng
            </h3>
            <p class="text-[#1A1919] text-[16px] font-[400] mt-4">
                Sau khi tạo đơn bạn sẽ nhận được mã đơn hàng,
                bạn hãy ghi mã lên túi đồ của mình và gửi về Reuse theo hình thức lựa chọn vận chuyển.
                Sau 3 bước, bạn đã giúp cho quần áo có thêm vòng đời mới.
            </p>
        </div>
    </div>
</section>

<section class="py-16" x-data="">
    <div class="mx-auto max-w-4xl px-6">
        <h2 class="text-center text-[#253739] font-[600] text-[40px] mb-12">
            Câu hỏi thường gặp
        </h2>

        <div class="space-y-4">
            <div x-data="{ open: true }" class="border-b border-[#D7DEF2]">
                <div class="flex items-center justify-between cursor-pointer" @click="open=!open">
                    <div class="flex items-center gap-4">
                        <span class="text-[80px] font-[250] text-[#8D8C8C]">01</span>
                        <div class="w-[87%]">
                            <p class="text-[#1A1919] font-[600] text-[22px] mt-2 leading-[1.4]">
                                Quần áo của tôi sau Cho tặng sẽ được sử dụng vào mục đích gì?
                            </p>
                            <div x-show="open" x-transition class="mt-2 text-[#1A1919] text-[16px] leading-[1.4] pb-6">
                                Quần áo Reuse nhận được từ người Cho tặng sẽ được tiến hành phân loại để xác định lại sản phẩm nào có thể tái sử dụng,
                                không thể tái sử dụng sẽ được xử lý tái chế hoặc xử lý không phát thải có trách nhiệm.
                                Sản phẩm có thể tái sử dụng Reuse sẽ phân phát lại theo 2 hình thức:
                                Một là bán lại với mức giá rất thấp trên website.
                            </div>
                        </div>
                    </div>
                    <button class="text-[#1A1919] text-[42px]">
                        <span x-show="!open">+</span>
                        <span x-show="open">×</span>
                    </button>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-[#D7DEF2]">
                <div class="flex items-center justify-between cursor-pointer" @click="open=!open">
                    <div class="flex items-center gap-4">
                        <span class="text-[80px] font-[250] text-[#8D8C8C]">02</span>
                        <div class="w-[87%]">
                            <p class="text-[#1A1919] font-[600] text-[22px] mt-2 leading-[1.4]">
                                Tôi có phải chụp hình từng sản phẩm để up lên Reuse không?
                            </p>
                            <div x-show="open" x-transition class="mt-2 text-[#1A1919] text-[16px] leading-[1.4] pb-6">
                                Quần áo Reuse nhận được từ người Cho tặng sẽ được tiến hành phân loại để xác định lại sản phẩm nào có thể tái sử dụng,
                                không thể tái sử dụng sẽ được xử lý tái chế hoặc xử lý không phát thải có trách nhiệm.
                                Sản phẩm có thể tái sử dụng Reuse sẽ phân phát lại theo 2 hình thức:
                                Một là bán lại với mức giá rất thấp trên website.
                            </div>
                        </div>
                    </div>
                    <button class="text-[#1A1919] text-[42px]">
                        <span x-show="!open">+</span>
                        <span x-show="open">×</span>
                    </button>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-[#D7DEF2]">
                <div class="flex items-center justify-between cursor-pointer" @click="open=!open">
                    <div class="flex items-center gap-4">
                        <span class="text-[80px] font-[250] text-[#8D8C8C]">03</span>
                        <div class="w-[87%]">
                            <p class="text-[#1A1919] font-[600] text-[22px] mt-2 leading-[1.4]">
                                Reuse xử lý quần áo không phát thải là như thế nào?
                            </p>
                            <div x-show="open" x-transition class="mt-2 text-[#1A1919] text-[16px] leading-[1.4] pb-6">
                                Quần áo Reuse nhận được từ người Cho tặng sẽ được tiến hành phân loại để xác định lại sản phẩm nào có thể tái sử dụng,
                                không thể tái sử dụng sẽ được xử lý tái chế hoặc xử lý không phát thải có trách nhiệm.
                                Sản phẩm có thể tái sử dụng Reuse sẽ phân phát lại theo 2 hình thức:
                                Một là bán lại với mức giá rất thấp trên website.
                            </div>
                        </div>
                    </div>
                    <button class="text-[#1A1919] text-[42px]">
                        <span x-show="!open">+</span>
                        <span x-show="open">×</span>
                    </button>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-[#D7DEF2]">
                <div class="flex items-center justify-between cursor-pointer" @click="open=!open">
                    <div class="flex items-center gap-4">
                        <span class="text-[80px] font-[250] text-[#8D8C8C]">04</span>
                        <div class="w-[87%]">
                            <p class="text-[#1A1919] font-[600] text-[22px] mt-2 leading-[1.4]">
                                Quần áo của tôi sau Cho tặng sẽ được sử dụng vào mục đích gì?
                            </p>
                            <div x-show="open" x-transition class="mt-2 text-[#1A1919] text-[16px] leading-[1.4] pb-6">
                                Quần áo Reuse nhận được từ người Cho tặng sẽ được tiến hành phân loại để xác định lại sản phẩm nào có thể tái sử dụng,
                                không thể tái sử dụng sẽ được xử lý tái chế hoặc xử lý không phát thải có trách nhiệm.
                                Sản phẩm có thể tái sử dụng Reuse sẽ phân phát lại theo 2 hình thức:
                                Một là bán lại với mức giá rất thấp trên website.
                            </div>
                        </div>
                    </div>
                    <button class="text-[#1A1919] text-[42px]">
                        <span x-show="!open">+</span>
                        <span x-show="open">×</span>
                    </button>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-[#D7DEF2]">
                <div class="flex items-center justify-between cursor-pointer" @click="open=!open">
                    <div class="flex items-center gap-4">
                        <span class="text-[80px] font-[250] text-[#8D8C8C]">05</span>
                        <div class="w-[87%]">
                            <p class="text-[#1A1919] font-[600] text-[22px] mt-2 leading-[1.4]">
                                Quần áo của tôi sau Cho tặng sẽ được sử dụng vào mục đích gì?
                            </p>
                            <div x-show="open" x-transition class="mt-2 text-[#1A1919] text-[16px] leading-[1.4] pb-6">
                                Quần áo Reuse nhận được từ người Cho tặng sẽ được tiến hành phân loại để xác định lại sản phẩm nào có thể tái sử dụng,
                                không thể tái sử dụng sẽ được xử lý tái chế hoặc xử lý không phát thải có trách nhiệm.
                                Sản phẩm có thể tái sử dụng Reuse sẽ phân phát lại theo 2 hình thức:
                                Một là bán lại với mức giá rất thấp trên website.
                            </div>
                        </div>
                    </div>
                    <button class="text-[#1A1919] text-[42px]">
                        <span x-show="!open">+</span>
                        <span x-show="open">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
