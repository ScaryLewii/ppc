<?php
$images = rwmb_meta( 'image_projects', ['object_type' => 'setting'], 'custom-settings' );
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['full_url'];
endforeach;
$title = rwmb_meta( 'title_projects', ['object_type' => 'setting'], 'custom-settings' );


get_header();
?>

<section class="py-20 bg-fixed bg-cover bg-[40%] bg-no-repeat min-h-[40vh] flex items-center relative"
	style="background-image: url(<?= $bg ?>)"
>
	<div class="max-w-[950px] mx-auto ">
		<h1 class="flex items-center gap-3 text-[36px] font-semibold text-white w-[950px] max-w-full">
			<img src="<?= PPC_IMG . '/heading-tag-white.svg' ?>" alt="tag" width="50px" height="30px">
			<?= $title ?>
		</h1>
	</div>
</section>

<section class="py-20 bg-light">
	<div class="max-w-[950px] mx-auto  mb-20">
		<h2 class="text-green font-semibold">Dự án điển hình</h2>
	</div>
	<div class="max-w-[950px] mx-auto grid gap-[60px]">
		<?php
		while (have_posts()) :
			the_post();
		?>

			<article class="flex rounded-xl overflow-hidden max-h-[416px]">
				<a rel="noopener" class="group overflow-hidden block w-1/3 border-r-8 border-blue" href="<?= get_permalink() ?>">
					<img class="group-hover:scale-110 h-full w-full object-cover" 
						src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="<?= get_the_title() ?>">
				</a>

				<div class="flex flex-col justify-between w-2/3">
					<span class="bg-orange text-white text-center text-xl font-semibold py-3">
						<?= rwmb_meta('year') ?>
					</span>

					<div class="bg-white px-10 py-5 grow flex flex-col justify-center gap-4">
						<a rel="noopener" class="" href="<?= get_permalink() ?>">
							<h2 class="text-blue text-[36px] font-semibold hover:text-orange line-clamp-3 leading-[46px]"><?= get_the_title() ?></h2>
						</a>
						<p class="line-clamp-3 text-green"><?= get_the_excerpt() ?></p>
					</div>

					<a rel="noopener" 
						class="bg-orange text-white text-center text-xl font-semibold py-3 hover:bg-blue" 
						href="<?= get_permalink() ?>"
					>
						Xem chi tiết
					</a>
				</div>
			</article>

		<?php endwhile; ?>
	</div>
</section>

<?php
get_footer();