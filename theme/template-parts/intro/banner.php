<?php
$images = rwmb_meta( 'image_intro', ['object_type' => 'setting'], 'custom-settings' );
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['full_url'];
endforeach;
$title = rwmb_meta( 'title_intro', ['object_type' => 'setting'], 'custom-settings' );
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[40vh] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>
	<div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30"></div>
	<div class="max-w-full lg:max-w-[800px] mx-auto z-[1]">
		<h1 class="flex items-center gap-3 flex-col lg:flex-row text-[36px] font-[400] text-white w-[950px] max-w-full lg:-ml-[76px]">
			<img src="<?= PPC_IMG . '/heading-tag-white.svg' ?>" class="mt-3 rotate-90 lg:rotate-0" alt="tag" width="66px" height="63px">
			<?= $title ?>
		</h1>
	</div>
</section>