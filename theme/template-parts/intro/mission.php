<?php
$title = rwmb_meta('title_mission');
$content = rwmb_meta('content_mission');
?>

<section class="py-20 bg-light">
	<div class="max-w-[800px] mx-auto">
		<div class="flex flex-col gap-[100px]">
			<h2 class="flex items-start gap-3 text-[55px] leading-[78px] font-semibold text-blue -ml-[76px]">
				<img src="<?= PPC_IMG . '/heading-tag-green.svg' ?>" class="mt-3" alt="tag" width="66px" height="63px">
				<?= $title ?>
			</h2>

			<div class="grid lg:grid-cols-2 gap-10">
				<?php foreach ($content as $c) : ?>
					<div class="bg-orange text-white rounded-2xl p-10 text-xl relative">
						<div class="absolute top-0 -translate-y-1/2 left-1/2 -translate-x-1/2
							rounded-full bg-green w-16 h-16
						">
							<img src="<?= PPC_IMG . '/tick.svg' ?>" width="50px"
								class="absolute bottom-4 left-3"
							/>
						</div>
						<?= $c ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>