<section class="bg-light py-[100px]">
	<header class="container flex items-center justify-between text-blue mb-10">
		<h2 class="flex items-center gap-3 text-[55px] font-semibold">
			<img src="<?= PPC_IMG . '/heading-tag-green.svg' ?>" alt="tag" width="60px" height="60px">
			Tin tức
		</h2>

		<span class="text-xl">​Xem những thông tin mới nhất từ PPC</span>
	</header>

	<div class="container grid grid-cols-4 gap-[10px]">
		<?php
		$posts = new WP_Query( [
			'post_type'      => 'post',
			'posts_per_page' => 4
		] );

		if ( $posts->have_posts() ) :
			while( $posts->have_posts() ) :
				$posts->the_post();
		?>

			<article class="flex flex-col rounded-xl overflow-hidden bg-white">
				<a rel="noopener" class="group overflow-hidden block border-b-8 border-orange" href="<?= get_permalink() ?>">
					<img class="group-hover:scale-110 w-full object-cover h-[183px]" 
						src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="<?= get_the_title() ?>">
				</a>

				<div class="pt-5 px-5 pb-8 flex flex-col gap-3">
					<div class="uppercase font-semibold text-green">
						<a href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>" class="hover:text-orange text-[14px]">tin tức</a>
					</div>

					<a rel="noopener" href="<?= get_permalink() ?>">
						<h2 class="text-blue text-[20px] font-semibold hover:text-orange line-clamp-3"><?= get_the_title() ?></h2>
					</a>
				</div>
			</article>

		<?php
			endwhile;
		endif;

		wp_reset_postdata();
		?>
	</div>

	<footer class="text-center mt-20">
		<a href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>"
			class="font-semibold text-[24px] bg-green cursor-pointer rounded h-[50px] w-[200px] flex items-center justify-center mx-auto text-white
			hover:bg-transparent hover:text-green hover:border border-green
			">
			Xem tất cả
		</a>
	</footer>
</section>