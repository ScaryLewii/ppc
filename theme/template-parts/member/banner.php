<?php
$images = rwmb_meta( 'image_become_member', ['object_type' => 'setting'], 'custom-settings' );
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['full_url'];
endforeach;
$title = rwmb_meta( 'title_become_member', ['object_type' => 'setting'], 'custom-settings' );
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[40vh] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>
	<div class="container">
		<h1 class="text-[55px] font-semibold text-white text-center max-w-[800px]">
			<?= $title ?>
		</h1>
	</div>
</section>
