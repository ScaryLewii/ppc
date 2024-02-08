<?php
$title = rwmb_meta('title_coorperate');
$content = rwmb_meta('content_coorperate');

$items = rwmb_meta('item_coorperate');
?>

<section class="py-20 bg-light">
	<div class="max-w-[800px] mx-auto">
		<div class="flex flex-col gap-[80px]">
			<h2 class="flex items-start gap-3 text-[55px] leading-[78px] font-semibold text-blue -ml-[76px]">
				<img src="<?= PPC_IMG . '/heading-tag-green.svg' ?>" class="mt-3" alt="tag" width="66px" height="63px">
				<?= $title ?>
			</h2>

			<div class="bg-green text-white rounded-2xl px-[50px] py-[65px] text-[20px]">
				<?= $content ?>
			</div>
		</div>

		<div class="flex flex-col gap-[50px] mt-[50px]">
			<?php foreach ($items as $item) : ?>

				<figure class="bg-blue text-white relative px-[50px] py-[65px] flex flex-col gap-[30px] rounded-2xl">
					<span class="block rounded-full bg-orange w-[50px] h-[50px] absolute left-1/2 -translate-x-1/2 top-0 -translate-y-1/2"></span>
					<h3 class="text-[24px] uppercase text-center"><?= $item['title'] ?></h3>

					<p class="text-[20px]"><?= $item['content'] ?></p>
				</figure>

			<?php endforeach; ?>
		</div>
	</div>
</section>