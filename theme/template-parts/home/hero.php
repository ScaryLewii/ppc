<?php
$images = rwmb_meta( 'image-hero', ['size' => 'full'] ); 
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['url'];
endforeach;
?>

<section class="bg-fixed bg-cover bg-[40%] bg-no-repeat flex items-center relative py-[100px]"
	style="background-image: url(<?= $bg ?>)"
>
	<div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30"></div>
	<div class="container relative z-10">
		<h2 class="text-white font-semibold text-[55px] leading-[1.2em] lg:max-w-[767px] mb-[51px]">
			<?= rwmb_meta('title-hero') ?>
		</h2>

		<div class="flex gap-10 items-center">
			<a href="<?= site_url('/gioi-thieu') ?>"
				class="font-semibold text-[24px] bg-green cursor-pointer rounded h-[50px] w-[200px] flex items-center justify-center text-white
				hover:bg-transparent hover:border horver:border-white"
			>
				Xem thêm
			</a>
			<a href="#video"
				class="font-semibold text-[24px] bg-orange cursor-pointer rounded h-[50px] w-[200px] flex items-center justify-center text-white
				hover:bg-transparent hover:border horver:border-white"
			>
				Xem video
			</a>
		</div>
	</div>
</section>