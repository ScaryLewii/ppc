<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ppc
 */

?>

<section class="bg-green text-white py-20 text-lg">
	<div class="container">
		<h2 class="font-semibold text-[36px]">Cập nhật tin tức</h2>
	</div>
	<div class="container mt-10 flex flex-wrap gap-5 lg:gap-0">
		<div class="w-full lg:w-1/2">
			<p class="text-[20px]">
				Để lại thông tin của bạn để theo dõi
				<br/>
				tin tức mới nhất từ chúng tôi
			</p>
		</div>
		<form class="w-full lg:w-1/2 flex flex-col gap-10">
			<label class="flex flex-col gap-2">
				<span class="text-[20px]">Họ và tên *</span>
				<input placeholder="Tên của bạn" class="bg-orange px-4 py-3 rounded placeholder-white font-semibold hover:bg-transparent hover:border hover:border-white" />
			</label>

			<label class="flex flex-col gap-2">
				<span class="text-[20px]">Email *</span>
				<input placeholder="Email của bạn" class="bg-orange px-4 py-3 rounded placeholder-white font-semibold hover:bg-transparent hover:border hover:border-white" />
			</label>

			<div class="flex justify-end">
				<button type="submit" class="font-semibold text-[24px] bg-sea hover:bg-orange rounded flex justify-center items-center w-[200px] h-[50px]
					hover:bg-transparent hover:border hover:border-white
				">Gửi thông tin</button>
			</div>
		</form>
	</div>
</section>

<section class="py-20 text-blue bg-light">
	<div class="container grid grid-cols-2 gap-[100px]">
		<div>
			<img class="w-28" src="<?= site_url('/wp-content/uploads/2024/01/Logo-Unilever-Te.png') ?>" alt="UNILEVER">
			<div class="text-18px font-semibold my-5">Thông tin liên hệ của Unilever</div>
			<h2 class="text-[18px] uppercase my-4">UNILEVER (VIỆT NAM)</h2>
			<div>
			Số 156 Nguyễn Lương Bằng, Phường Tân Phú,<br/>
			Quận 7, TP. Hồ Chí Minh, Việt Nam
			</div>
			<a href="tel:02854135686">Điện thoại: (028) 54135686</a>

			<div class="flex items-center gap-4 [&>a>img]:w-[30px] mt-5">
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>
				</a>
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M282 256.2l-95.2-54.1V310.3L282 256.2zM384 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm14.4 136.1c7.6 28.6 7.6 88.2 7.6 88.2s0 59.6-7.6 88.1c-4.2 15.8-16.5 27.7-32.2 31.9C337.9 384 224 384 224 384s-113.9 0-142.2-7.6c-15.7-4.2-28-16.1-32.2-31.9C42 315.9 42 256.3 42 256.3s0-59.7 7.6-88.2c4.2-15.8 16.5-28.2 32.2-32.4C110.1 128 224 128 224 128s113.9 0 142.2 7.7c15.7 4.2 28 16.6 32.2 32.4z"/></svg>
				</a>
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg>
				</a>
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg>
				</a>
			</div>
		</div>

		<div>
			<img class="w-28" src="<?= site_url('/wp-content/uploads/2024/01/99e640_36546d8ca1a04158882123d76ea285ffmv2.webp') ?>" alt="Tai nguyen va moi truong">
			
			<div class="text-18px font-semibold my-5">Thông tin liên hệ của Bộ TNMT</div>
			
			<h2 class="text-[18px] uppercase my-4">BỘ TÀI NGUYÊN VÀ MÔI TRƯỜNG</h2>
			<div>Số 10 Tôn Thất Thuyết, Nam Từ Liêm,<br/> Hà Nội, Việt Nam</div>
			<a href="tel:02437956868">Điện thoại: (0243) 7956868</a>

			<div class="flex items-center gap-4 [&>a>img]:w-[30px] mt-5">
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>
				</a>
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M282 256.2l-95.2-54.1V310.3L282 256.2zM384 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm14.4 136.1c7.6 28.6 7.6 88.2 7.6 88.2s0 59.6-7.6 88.1c-4.2 15.8-16.5 27.7-32.2 31.9C337.9 384 224 384 224 384s-113.9 0-142.2-7.6c-15.7-4.2-28-16.1-32.2-31.9C42 315.9 42 256.3 42 256.3s0-59.7 7.6-88.2c4.2-15.8 16.5-28.2 32.2-32.4C110.1 128 224 128 224 128s113.9 0 142.2 7.7c15.7 4.2 28 16.6 32.2 32.4z"/></svg>
				</a>
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg>
				</a>
				<a href="" target="_blank" class="group">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" class="fill-blue group-hover:fill-orange" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg>
				</a>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="">
	<div class="bg-green">
		<div class="container text-white text-[15px] py-2 font-[100]">
			<a href="<?= site_url() ?>">PPC VIETNAM</a>. All rights reserved &copy; <?= date("Y") ?>.
		</div>
	</div>

</footer><!-- #colophon -->
