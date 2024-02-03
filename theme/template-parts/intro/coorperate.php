<?php
$title = rwmb_meta('title_coorperate');
$content = rwmb_meta('content_coorperate');
?>

<section class="py-20 bg-light">
	<div class="max-w-[800px] mx-auto">
		<div class="flex flex-col gap-[80px]">
			<h2 class="flex items-start gap-3 text-[55px] leading-[78px] font-semibold text-blue -ml-[76px]">
				<img src="<?= PPC_IMG . '/heading-tag-green.svg' ?>" class="mt-3" alt="tag" width="66px" height="63px">
				<?= $title ?>
			</h2>

			<div class="bg-green text-white rounded-2xl p-10 text-xl">
				<?= $content ?>
			</div>
		</div>
	</div>
</section>