<section class="pt-20 pb-24">
	<div class="max-w-[950px] mx-auto text-white">
		<div class="bg-green rounded-t-3xl py-10 border-b-8 border-orange">
			<h2 class="text-[55px] font-[400] text-center">Trở thành thành viên</h2>
		</div>
		<div class="bg-blue rounded-b-3xl text-center text-[20px] leading-[32px] pt-8 pb-16 px-32">
			<?= rwmb_meta('content-become-member', get_the_ID()) ?>
		</div>

		<a class="font-[400] text-[24px] bg-sea hover:bg-orange rounded h-[50px] w-[318px]
			flex items-center justify-center mx-auto -translate-y-1/2
		"
			href="<?= site_url('/tro-thanh-thanh-vien') ?>"
		>
			Đăng ký thành viên
		</a>
	</div>
</section>