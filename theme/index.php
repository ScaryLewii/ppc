<?php
$images = rwmb_meta( 'image_news', ['object_type' => 'setting'], 'custom-settings' );
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['full_url'];
endforeach;
$title = rwmb_meta( 'title_news', ['object_type' => 'setting'], 'custom-settings' );
$tags = get_tags([
  'hide_empty' => false
]);

get_header();
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[40vh] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>
<div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30"></div>

	<div class="container z-[1]">
		<h1 class="flex items-center gap-3 text-[36px] font-[400] text-white w-[950px] max-w-full">
			<img src="<?= PPC_IMG . '/heading-tag-white.svg' ?>" class="mt-3" alt="tag" width="66px" height="63px">
			<?= $title ?>
		</h1>
	</div>
</section>

<section class="py-20 bg-light">
	<div class="container mb-20">
		<h2 class="text-green font-[400]">Từ khóa</h2>

		<div class="flex gap-3 mt-10">
			<?php foreach ($tags as $t) : ?>
				<a href="<?= get_tag_link( $t->term_id ) ?>"
					class="font-[400] text-[16px] uppercase tracking-[1.6px] bg-blue cursor-pointer hover:bg-orange rounded px-4 py-3 text-white"
				>
					#<?= $t->name ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="container grid grid-cols-4 gap-[10px]">
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
					<div class="uppercase font-[400] text-green">
						<a href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>" class="hover:text-orange text-[14px]">tin tức</a>
					</div>

					<a rel="noopener" href="<?= get_permalink() ?>">
						<h2 class="text-blue text-[20px] font-[400] hover:text-orange line-clamp-3"><?= get_the_title() ?></h2>
					</a>
				</div>
			</article>

		<?php endwhile; ?>
	</div>
</section>

<?php
get_footer();
