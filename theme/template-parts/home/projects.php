<section class="bg-green py-20">
	<header class="flex flex-col lg:flex-row lg:items-center justify-between container text-white mb-10">
		<h2 class="flex items-center gap-3 text-[30px] lg:text-[55px] font-[400]">
			<img src="<?= PPC_IMG . '/heading-tag-orange.svg' ?>" alt="tag" width="60px" height="60px">
			Dự án
		</h2>

		<span class="text-xl">Xem những dự án mới nhất từ PPC</span>
	</header>

	<div class="container grid gap-[60px]">
		<?php
		$projects = new WP_Query( [
			'post_type'      => 'projects',
			'posts_per_page' => 4
		] );

		if ( $projects->have_posts() ) :
			while( $projects->have_posts() ) :
				$projects->the_post();
		?>

			<article class="flex flex-col lg:flex-row rounded-xl overflow-hidden lg:max-h-[416px]">
				<a rel="noopener" class="group overflow-hidden block w-full lg:w-1/3 border-r-0 border-blue max-h-[400px] lg:max-h-0 lg:border-r-8" href="<?= get_permalink() ?>">
					<img class="group-hover:scale-110 h-full w-full object-cover" 
						src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="<?= get_the_title() ?>">
				</a>

				<div class="flex flex-col justify-between w-full lg:w-2/3">
					<span class="bg-orange text-white text-center text-xl font-[400] py-3">
						<?= rwmb_meta('year') ?: date("Y") ?>
					</span>

					<div class="bg-white px-10 py-5 grow flex flex-col justify-center gap-4">
						<a rel="noopener" class="" href="<?= get_permalink() ?>">
							<h2 class="text-blue text-[36px] font-[400] hover:text-orange line-clamp-3 leading-[46px]"><?= get_the_title() ?></h2>
						</a>
						<p class="line-clamp-3 text-green"><?= get_the_excerpt() ?></p>
					</div>

					<a rel="noopener" 
						class="bg-orange text-white text-center text-xl font-[400] py-3 hover:bg-blue" 
						href="<?= get_permalink() ?>"
					>
						Xem chi tiết
					</a>
				</div>
			</article>

		<?php
			endwhile;
		endif;

		wp_reset_postdata();
		?>
	</div>

	<footer class="flex justify-center mt-20">
		<a href="<?= get_post_type_archive_link( 'projects' ) ?>" class="font-[400] text-[24px] bg-sea hover:bg-orange cursor-pointer rounded text-white
			flex items-center justify-center w-[200px] h-[50px]
		">Xem tất cả</a>
	</footer>
</section>