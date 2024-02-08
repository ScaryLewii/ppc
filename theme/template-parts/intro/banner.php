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
	<div class="container">
		<h1 class="flex items-center gap-3 text-[36px] font-semibold text-white w-[950px] max-w-full">
			<img src="<?= PPC_IMG . '/heading-tag-white.svg' ?>" class="mt-3" alt="tag" width="66px" height="63px">
			<?= $title ?>
		</h1>
	</div>
</section>