<?php
$images = rwmb_meta( 'image-hero', ['object_type' => 'custom-settings'], ['size' => 'full'] ); 
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['url'];
endforeach;
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[30vh] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>

</section>