<?php
$title = rwmb_meta('title_specialize');
$subtitle = rwmb_meta('subtitle_specialize');
$items = rwmb_meta('item_specialize');
?>

<section class="py-20 bg-green relative">
	<div class="flex justify-center items-center absolute left-1/2 -translate-x-1/2 -translate-y-1/2 top-0">
		<img src="<?= PPC_IMG . '/heading-tag-orange.svg' ?>" alt="tag" width="66px" height="63px">
		<span class="block w-[20px] h-[20px] rounded-full bg-blue"></span>
		<img src="<?= PPC_IMG . '/heading-tag-orange.svg' ?>" class="rotate-180" alt="tag" width="66px" height="63px">

	</div>
	<div class="max-w-[950px] mx-auto">
		<div class="flex flex-col gap-[100px]">
			<header class="text-center text-white">
				<h2 class="text-[55px] leading-[78px] font-semibold">
					<?= $title ?>
				</h2>
				<div class="text-[20px] leading-[30px] mt-8">
					Các thành viên Tổ công tác được tổ chức
					<br>
					thành 04 nhóm chuyên môn
				</div>
			</header>


			<div class="flex flex-col gap-10 max-w-[800px] mx-auto">
				<?php foreach ($items as $item) : ?>
					<figure class="rounded-xl bg-light overflow-hidden">
						<h3 class="bg-orange text-center font-semibold text-white text-[20px] py-[10px] px-2"><?= $item['title'] ?></h3>

						<div class="flex flex-col gap-[30px] my-[30px]">
							<?php foreach ($item['content'] as $c) : ?>
								<div class="flex items-center gap-[40px] text-[20px] px-[50px] text-green">
									<img class="mt-2" src="<?= PPC_IMG . '/heading-tag-orange.svg' ?>" alt="tag" width="66px" height="63px">

									<?= $c ?>
								</div>
							<?php endforeach; ?>
						</div>
					</figure>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>