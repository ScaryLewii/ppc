<?php
$images = rwmb_meta( 'image_become_member', ['object_type' => 'setting'], 'custom-settings' );
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['full_url'];
endforeach;
$title = rwmb_meta( 'title_become_member', ['object_type' => 'setting'], 'custom-settings' );
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[680px] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>
	<div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30"></div>
	<div class="container lg:max-w-[950px] mx-auto z-[1]">
		<h1 class="text-[36px] lg:text-[55px] lg:leading-[66px] tracking-[1.1px] font-[400] text-white text-center">
			<?= $title ?>
		</h1>
	</div>
</section>
