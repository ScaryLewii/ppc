<?php
$images = rwmb_meta( 'image-intro', ['size' => 'full'] ); 
$bg = '';
foreach ( $images as $image ) :
	$bg = $image['url'];
endforeach;
?>


<section class="grid lg:grid-cols-2">
<div class="bg-fixed bg-cover bg-center bg-no-repeat"
		style="background-image: url(<?= $bg ?>)"
	>

	</div>

	<div class="bg-blue text-white px-[20px] py-[40px] lg:p-20 min-h-[100vh] flex items-center">
		<div>
			<span class="text-[16px] tracking-[1.6px] font-[400]">GIỚI THIỆU</span>
			<h3 class="text-[36px] font-[400] leading-[47px] mt-[10px]">Hợp tác Công - Tư (PPC) thúc đẩy xây dựng nền kinh tế tuần hoàn để xử lý vấn đề rác thải nhựa tại Việt Nam</h3>
			<div class="text-[20px] leading-[30px] mt-[50px]">
				Hình thành từ thỏa thuận thiết lập Hợp tác công tư (PPC) về xây dựng kinh tế tuần hoàn trong quản lý rác thải nhựa tại Việt Nam, Tổ công tác thúc đẩy xây dựng nền kinh tế tuần hoàn cho rác thải nhựa theo mô hình hợp tác công tư được thành lập theo quyết định số 1150/QĐ-BTNMT ngày 21/05/2020.
			</div>
			<div class="text-[20px] leading-[30px] mt-[50px]">
Tổ công tác có nhiệm vụ tư vấn cho Bộ trưởng Bộ Tài nguyên và Môi trường các chính sách,  giải pháp thực hiện xây dựng nền kinh tế tuần hoàn cho rác thải nhựa theo mô hình hợp tác công tư.
			</div>

			<div class="mt-[55px]">
				<a href="<?= site_url('/gioi-thieu') ?>"
					class="font-[400] text-[24px] bg-sea cursor-pointer rounded h-[50px] w-[200px] flex items-center justify-center text-white
					hover:bg-transparent hover:border horver:border-white"
				>
					Xem thêm
				</a>
			</div>
		</div>
	</div>
</section>
