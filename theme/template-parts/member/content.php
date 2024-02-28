<?php
$title = rwmb_meta( 'subtitle_member' );
$items = rwmb_meta( 'item_member' );
?>

<section class="py-20 bg-blue relative px-[20px] lg:px-0">
	<div class="flex justify-center items-center absolute left-1/2 -translate-x-1/2 -translate-y-1/2 top-0">
		<img src="<?= PPC_IMG . '/heading-tag-orange.svg' ?>" alt="tag" width="66px" height="63px">
		<span class="block w-[20px] h-[20px] rounded-full bg-green"></span>
		<img src="<?= PPC_IMG . '/heading-tag-orange.svg' ?>" class="rotate-180" alt="tag" width="66px" height="63px">
	</div>

	<div class="max-w-[950px] mx-auto">
		<div class="flex flex-col gap-[80px]">
			<h2 class="text-center text-[36px] leading-[46px] font-[400] text-white max-w-[655px] mx-auto">
				<?= $title ?>
			</h2>

			<div class="max-w-[800px] mx-auto flex flex-col gap-[80px]">
				<?php foreach ($items as $item) : ?>
					<figure class="rounded-xl bg-light overflow-hidden">
						<h3 class="bg-orange text-center font-[400] text-white text-[20px] py-2 px-2"><?= $item['title'] ?></h3>

						<?php if (isset($item['description'])) : ?>
							<div class="px-[40px] lg:px-20 italic text-orange text-[20px] text-center leading-[30px] <?= isset($item['content']) ? 'pt-10' : 'py-10' ?>">
								<?= $item['description'] ?>
							</div>
						<?php endif; ?>

						<?php if (isset($item['content'])) : ?>
							<ul class="flex flex-col gap-5 px-[40px] lg:px-20 py-10 list-disc">
								<?php foreach ($item['content'] as $c) : ?>
									<li class="text-[20px] text-green list-disc border-b pb-5 border-b-green last-of-type:border-0 last-of-type:pb-0">
										<?= $c ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</figure>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
