<section class="py-[40px] lg:py-20 px-[20px] lg:px-0">
	<header class="flex items-center justify-center lg:justify-between max-w-[950px] mx-auto text-blue mb-10">
		<h2 class="flex flex-col lg:flex-row items-center gap-3 text-[36px] lg:text-[55px] font-[400]  [&>img]:rotate-90 lg:[&>img]:rotate-0">
			<img src="<?= PPC_IMG . '/heading-tag-green.svg' ?>" alt="tag" width="60px" height="60px">
			Thành viên
		</h2>
	</header>

	<div class="max-w-[950px] mx-auto text-blue flex flex-col gap-20">
		<?php
		$members = rwmb_meta( 'member', null, get_option('page_on_front') );
		
		foreach ($members as $m) :
		?>
		<div>
			<?php if ( isset($m['title']) ) : ?>
				<h3 class="font-[400] text-[20px] mb-10 uppercase text-center border-b-2 border-blue pb-1"><?= $m['title'] ?></h3>
			<?php endif; ?>

			<?php if ( isset($m['subtitle']) ) : ?>
				<h4 class="text-green text-center mb-[50px] font-[400] text-[20px]">
					<?= $m['subtitle'] ?>
				</h4>
			<?php endif; ?>

			<?php if (count($m['logo']) > 4) : ?>
			<div class="hidden lg:block">
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
			</div>

			<div class="grid lg:hidden grid-cols-2">
				<?php foreach ( $m['logo'] as $l ) : ?>
					<div class="w-[177px] h-[177px] flex items-center justify-center">
						<img src="<?= wp_get_attachment_image_url( $l, 'full' ); ?>"
							class="block"
						/>
					</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>


			<?php if (count($m['logo']) <= 4) : ?>
				<div class="<?= count($m['logo']) > 1 ? "grid grid-cols-2" : "flex" ?> lg:flex justify-center items-center gap-[20px]">
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