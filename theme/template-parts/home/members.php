<section class="py-20">
	<header class="flex items-center justify-between max-w-[950px] mx-auto text-blue mb-10">
		<h2 class="flex items-center gap-3 text-[55px] font-semibold">
			<img src="<?= PPC_IMG . '/heading-tag-green.svg' ?>" alt="tag" width="60px" height="60px">
			Thành viên
		</h2>
	</header>

	<div class="max-w-[950px] mx-auto text-blue flex flex-col gap-20">
		<?php
		$members = rwmb_meta( 'member' );
		
		foreach ($members as $m) :
		?>
		<div>
			<?php if ( isset($m['title']) ) : ?>
				<h3 class="font-semibold text-[20px] mb-10 uppercase text-center border-b-2 border-blue pb-1"><?= $m['title'] ?></h3>
			<?php endif; ?>

			<?php if ( isset($m['subtitle']) ) : ?>
				<h4 class="text-green text-center mb-[50px] font-semibold text-[20px]">
					<?= $m['subtitle'] ?>
				</h4>
			<?php endif; ?>

			<?php if (count($m['logo']) > 4) : ?>
			<div class="splide">
				<div class="splide__track">
					<div class="splide__list">
						<?php foreach ( $m['logo'] as $l ) : ?>
							<div class="splide__slide">
								<img src="<?= wp_get_attachment_image_url( $l, 'full' ); ?>"
									class="block"
								/>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>


			<?php if (count($m['logo']) <= 4) : ?>
				<div class="flex justify-center items-center gap-[20px]">
				<?php foreach ( $m['logo'] as $l ) : ?>
					<div class="w-[177px] h-[177px] flex items-center justify-center">
						<img src="<?= wp_get_attachment_image_url( $l, 'full' ); ?>"
							class="block"
						/>
					</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>

	<?php endforeach; ?>
	</div>
</section>