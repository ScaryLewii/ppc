<section class="py-20">
	<header class="flex items-center justify-between max-w-[950px] mx-auto text-blue mb-10">
		<h2 class="flex items-center gap-3 text-[55px] font-semibold">
			<img src="<?= PPC_IMG . '/heading-tag-orange.svg' ?>" alt="tag" width="60px" height="60px">
			Thành viên
		</h2>
	</header>

	<div class="max-w-[950px] mx-auto text-blue flex flex-col gap-20">
		<?php
		$members = rwmb_meta( 'member' );
		
		foreach ($members as $m) :
			$count = 0;
		?>
		<div>
			<?php if ( isset($m['title']) ) : ?>
				<h3 class="font-semibold text-[20px] mb-10 uppercase"><?= $m['title'] ?></h3>
			<?php endif; ?>

			<?php if ( isset($m['subtitle']) ) : ?>
				<a class="block w-full border border-blue text-center py-3 mb-5 font-semibold text-[24px]"
					href="<?= get_post_type_archive_link( 'projects' ) ?>">
					<?= $m['subtitle'] ?>
				</a>
			<?php endif; ?>

			<div class="splide">
				<div class="splide__track">
					<div class="splide__list">
						<?php foreach ( $m['logo'] as $l ) : ?>
							<div class="splide__slide">
								<img src="<?= wp_get_attachment_image_url( $l, 'full' ); ?>"
									class="max-w-[70%] block"
								/>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

	<?php endforeach; ?>
	</div>
</section>