<?php
$images = rwmb_meta( 'image_news', ['object_type' => 'setting'], 'custom-settings' );
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['full_url'];
endforeach;
$title = rwmb_meta( 'title_news', ['object_type' => 'setting'], 'custom-settings' );

get_header();
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[40vh] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>
	<div class="max-w-[950px] mx-auto ">
		<h1 class="flex items-center gap-3 text-4xl font-semibold text-white">
			<img src="<?= PPC_IMG . '/heading-tag-white.svg' ?>" alt="tag" width="30px" height="30px">
			<?= $title ?>
		</h1>
	</div>
</section>

<section class="py-20 bg-light">
	<div class="max-w-[950px] mx-auto  grid grid-cols-4 gap-5">
		<?php
		while (have_posts()) :
			the_post();
		?>

			<article class="flex flex-col rounded-xl overflow-hidden bg-white">
				<a rel="noopener" class="group overflow-hidden block border-b-8 border-orange" href="<?= get_permalink() ?>">
					<img class="group-hover:scale-110 w-full object-cover h-[183px]" 
						src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="<?= get_the_title() ?>">
				</a>

				<div class="pt-5 px-5 pb-8 flex flex-col gap-3">
					<div class="uppercase font-semibold text-green">
					<?php
					$posttags = get_the_tags();
					if ($posttags) :
						foreach($posttags as $tag) : 
					?>
						<a href="<?= get_tag_link( $tag->term_id ) ?>" class="hover:text-orange text-[14px] font-semibold"><?= $tag->name ?></a>
					<?php
						endforeach;
					endif;
					?>
					</div>

					<a rel="noopener" href="<?= get_permalink() ?>">
						<h2 class="text-blue text-[20px] font-semibold hover:text-orange line-clamp-3"><?= get_the_title() ?></h2>
					</a>
				</div>
			</article>

		<?php endwhile; ?>
	</div>
</section>

<?php
get_footer();
