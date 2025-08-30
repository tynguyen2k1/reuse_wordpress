<?php
get_header();
?>

<?php get_template_part( 'template-parts/content-hero' ); ?>

<section class="max-w-7xl mx-auto px-6 py-16">
	<div class="section">
	  <div class="image-wrapper">
		<img src="<?php echo get_template_directory_uri(); ?>/img/Group%201261154280.png" alt="woman with clothes" />
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

  <section class="py-16">
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

<script src="https://unpkg.com/alpinejs" defer></script>
<?php get_footer();
