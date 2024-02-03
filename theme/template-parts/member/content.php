<?php
$title = rwmb_meta( 'subtitle_member' );
$items = rwmb_meta( 'item_member' );
?>

<section class="py-20 bg-blue"
>
	<div class="max-w-[950px] mx-auto ">
		<div class="max-w-[800px] mx-auto flex flex-col gap-10">
			<h2 class="text-center text-[36px] font-semibold text-white max-w-[90%] mx-auto">
				<?= $title ?>
			</h2>

			<div class="flex flex-col gap-10">
				<?php foreach ($items as $item) : ?>
					<figure class="rounded-xl bg-light overflow-hidden">
						<h3 class="bg-orange text-center font-semibold text-white text-2xl py-2 px-2"><?= $item['title'] ?></h3>

						<?php if (isset($item['description'])) : ?>
							<div class="px-20 py-10 italic text-orange text-xl">
								<?= $item['description'] ?>
							</div>
						<?php endif; ?>

						<?php if (isset($item['content'])) : ?>
							<ul class="flex flex-col gap-5 px-20 py-10 list-disc">
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
