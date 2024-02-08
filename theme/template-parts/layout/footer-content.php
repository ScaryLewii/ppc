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
	<div class="max-w-[950px] mx-auto">
		<h2 class="font-semibold text-[36px]">Cập nhật tin tức</h2>
	</div>
	<div class="max-w-[950px] mx-auto mt-10 flex flex-wrap gap-5 lg:gap-0">
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
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/instagram.webp" ?>" />
				</a>
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/youtube.webp" ?>" />
				</a>
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/twitter.webp" ?>" />
				</a>
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/facebook.webp" ?>" />
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
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/instagram.webp" ?>" />
				</a>
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/youtube.webp" ?>" />
				</a>
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/twitter.webp" ?>" />
				</a>
				<a href="" target="_blank">
					<img src="<?= PPC_IMG . "/facebook.webp" ?>" />
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
