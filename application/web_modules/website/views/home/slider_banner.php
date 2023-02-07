<section id="slider" class="slider-element boxed-slider">

	<div class="container clearfix">

		<div class="fslider" data-animation="fade">
			<div class="flexslider">
				<div class="slider-wrap">
					<?php foreach($banner as $key=>$item):?>
					<div class="slide" data-thumb="<?php echo 'https://lifelong.crru.ac.th/assets/images/banners/' . $item->lifelong_banner_image; ?>">
						<a href="#" class="d-block position-relative">
							<img src="<?php echo 'https://lifelong.crru.ac.th/assets/images/banners/' . $item->lifelong_banner_image; ?>" alt="">
						</a>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>

	</div>

</section>