<?php
$images = rwmb_meta( 'image' );
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['full_url'];
endforeach;
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[40vh] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>
</section>