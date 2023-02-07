<!-- Header
		============================================= -->
<header id="header" class="header-size-sm" data-sticky-shrink="false">
	<div class="container">
		<div class="header-row justify-content-between">
			<!-- Logo
					============================================= -->
			<div id="logo" class="col-auto ms-auto ms-mb-0 me-mb-0 order-md-2">
				<a href="<?php echo site_url(); ?>" class="standard-logo"><img class="mx-auto" src="<?php echo base_url('assets/images/website/logo.png'); ?>" alt="สถาบันการเรียนรู้ตลิดชีวิต"></a>
				<a href="<?php echo site_url(); ?>" class="retina-logo"><img class="mx-auto" src="<?php echo base_url('assets/images/website/logo@2x.png'); ?>" alt="CRRU - Lifelong Learning"></a>
			</div><!-- #logo end -->

			<div class="w-100 d-block d-md-none"></div>

			<div class="col-12 col-sm-6 col-md-4 justify-content-center justify-content-sm-start d-flex order-md-1 mb-4 mb-sm-0" data-bs-toggle="modal" data-bs-target="#modal_facebook">
				<a href="javascript:void(0);" class="social-icon si-small si-rounded si-dark si-mini si-facebook mb-0">
					<i class="icon-facebook" style="font-size:16px"></i>
					<i class="icon-facebook" style="font-size:16px"></i>
				</a>
				<a href="javascript:void(0);" class="social-icon si-small si-rounded si-dark si-mini si-spotify mb-0" data-bs-toggle="modal" data-bs-target="#modal_lineofficial">
					<i class="icon-line" style="font-size:16px"></i>
					<i class="icon-line" style="font-size:16px"></i>
				</a>
				<a href="javascript:void(0);" class="social-icon si-small si-rounded si-dark si-mini si-bitbucket mb-0" data-bs-toggle="modal" data-bs-target="#modal_contact">
					<i class="fa-solid fa-phone" style="line-height:29px !important; "></i>
					<i class="fa-solid fa-phone" style="line-height:29px !important; "></i>
				</a>
			</div>

			<div class="col-12 col-sm-6 col-md-4 order-md-3 mb-4 mb-md-0">
				<ul class="nav align-items-center justify-content-center justify-content-sm-end">
					<li class="nav-item">
						<div class="date-today text-uppercase badge bg-dark rounded-pill py-2 px-3 fw-medium"></div>
					</li>
				</ul>
			</div>

		</div>
	</div>

	<div id="header-wrap" class="border-top border-f5">
		<div class="container">
			<div class="header-row justify-content-between flex-row-reverse flex-lg-row">

				<div id="primary-menu-trigger">
					<svg class="svg-trigger" viewBox="0 0 100 100">
						<path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
						<path d="m 30,50 h 40"></path>
						<path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
					</svg>
				</div>

				<!-- Primary Navigation
						============================================= -->
				<nav class="primary-menu with-arrows">

					<ul class="menu-container">

						<?php $current = ($ACTIVE == "home")? "current":"";?>
						<li class="menu-item menu-color-home <?php echo $current;?>">
							<a class="menu-link" href="<?php echo site_url(''); ?>">
								<div>หน้าหลัก</div>
							</a>
						</li>

						<?php $current = ($ACTIVE == "about" || $ACTIVE == "about_structure" || $ACTIVE == "about_personels")? "current":"";?>
						<li class="menu-item menu-color-tech sub-menu <?php echo $current;?>">
							<a class="menu-link" href="javascript:void(0);">
								<div>เกี่ยวกับหน่วยงาน</div>
							</a>
							<ul class="sub-menu-container border-top-0" style="width:250px;">
								<?php $current = ($ACTIVE == "about")? "current":"";?>
								<li class="menu-item <?php echo $current;?>">
									<a class="menu-link" href="<?php echo site_url('about'); ?>">
										<div><i class="fa-solid fa-building-columns me-2"></i> ข้อมูลหน่วยงาน</div>
									</a>
								</li>
								<?php $current = ($ACTIVE == "about_structure")? "current":"";?>
								<li class="menu-item <?php echo $current;?>">
									<a class="menu-link" href="<?php echo site_url('about/structure'); ?>">
										<div><i class="fa-solid fa-sitemap me-2"></i> โครงสร้างหน่วยงาน</div>
									</a>
								</li>
								<?php $current = ($ACTIVE == "about_personels")? "current":"";?>
								<li class="menu-item <?php echo $current;?>">
									<a class="menu-link" href="<?php echo site_url('about/personels'); ?>">
										<div><i class="fa-solid fa-users me-2"></i> โครงสร้างผู้บริหารและบุคลากร</div>
									</a>
								</li>
							</ul>
						</li>

						
						<?php $current = ($ACTIVE == "news")? "current":"";?>
						<li class="menu-item menu-color-lifestyle <?php echo $current;?>">
							<a class="menu-link" href="<?php echo site_url('news'); ?>">
								<div>ข่าวประชาสัมพันธ์</div>
							</a>
						</li>

						<li class="menu-item menu-color-fashion sub-menu">
							<a class="menu-link" href="javascript:void(0);">
								<div>Lifelong Learning</div>
							</a>
							<ul class="sub-menu-container border-top-0" style="width:250px;">
								<li class="menu-item">
									<a class="menu-link" href="https://lifelong.crru.ac.th/course#tabs-30" target="_blank">
										<div><i class="fa-solid fa-fire me-2"></i> หลักสูตรที่กำลังเปิดรับสมัคร</div>
									</a>
								</li>
								<li class="menu-item">
									<!-- <a class="menu-link" href="<?php echo site_url('lifelong/course'); ?>"> -->
									<a class="menu-link" href="https://lifelong.crru.ac.th/course" target="_blank">
										<div><i class="fa-regular fa-bookmark me-2"></i> หลักสูตรทั้งหมด</div>
									</a>
								</li>
								<li class="menu-item">
								<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('lifelong/cooperates'); ?>"> -->
										<div><i class="fa-regular fa-building me-2"></i> เครือข่ายความร่วมมือ</div>
									</a>
								</li>
								<li class="menu-item">
								<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('lifelong/experts'); ?>"> -->
										<div><i class="fa-solid fa-chalkboard-user me-2"></i> อาจารย์ & วิทยากร</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://lifelong.crru.ac.th/" target="_blank">
										<div><i class="fa-solid fa-arrow-up-right-from-square me-2"></i> เว็บไซต์ Lifelong Learning</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-home sub-menu">
							<a class="menu-link" href="javascript:void(0);">
								<div>Credit bank</div>
							</a>
							<ul class="sub-menu-container border-top-0" style="width:250px;">
								<li class="menu-item">
									<a class="menu-link" href="https://creditbank.crru.ac.th/about" target="_blank">
										<div><i class="fa-solid fa-graduation-cap me-2"></i> สะสมหน่วยกิต</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://creditbank.crru.ac.th/about" target="_blank">
										<div><i class="fa-solid fa-users-rectangle me-2"></i> เรียนรวม</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://creditbank.crru.ac.th/" target="_blank">
										<div><i class="fa-solid fa-arrow-up-right-from-square me-2"></i> เว็บไซต์ Credit bank</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-market sub-menu">
							<a class="menu-link" href="javascript:void(0);">
								<div>CRRU CWIE</div>
							</a>
							<ul class="sub-menu-container border-top-0" style="width:250px;">
								<li class="menu-item">
									<a class="menu-link" href="https://cwie.crru.ac.th/board" target="_blank">
										<div><i class="fa-solid fa-sitemap me-2"></i> คณะกรรมการ</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://cwie.crru.ac.th/operation" target="_blank">
										<div><i class="fa-solid fa-square-poll-vertical me-2"></i> ผลการดำเนินงาน</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://cwie.crru.ac.th/" target="_blank">
										<div><i class="fa-solid fa-arrow-up-right-from-square me-2"></i> เว็บไซต์ CRRU-CWIE</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-travel sub-menu">
							<a class="menu-link" href="javascript:void(0);">
								<div>ศูนย์เซรามิก</div>
							</a>
							<ul class="sub-menu-container border-top-0" style="width:250px;">
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('ceramic/learning'); ?>"> -->
										<div><i class="fa-brands fa-leanpub me-2"></i> แหล่งเรียนรู้ศูนย์เซรามิก</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('ceramic/products'); ?>"> -->
										<div><i class="fa-solid fa-mug-saucer me-2"></i> สั่งผลิตภัณฑ์เซรามิก</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('ceramic'); ?>"> -->
										<div><i class="fa-solid fa-font-awesome me-2"></i> เกี่ยวกับเซรามิก มร.ชร.</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-food sub-menu">
							<a class="menu-link" href="javascript:void(0);">
								<div>CLLI MIS</div>
							</a>
							<ul class="sub-menu-container border-top-0">
								<li class="menu-item">
									<!-- <a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;"> -->
									<a class="menu-link" href="<?php echo site_url('backend'); ?>">
										<div><i class="fa-solid fa-user-group me-2"></i> Personels</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('mis'); ?>"> -->
										<div><i class="fa-solid fa-user-tie me-2"></i> Executives</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('admin'); ?>"> -->
										<div><i class="fa-solid fa-screwdriver-wrench me-2"></i> Administrator</div>
									</a>
								</li>
							</ul>
						</li>
						<!-- <li class="menu-item menu-color-food sub-menu"><a class="menu-link" href="demo-news-category.html">
								<div>OUR EVENTS</div>
							</a>
							<ul class="sub-menu-container border-top-0" style="width:250px;">
								<li class="menu-item">
									<a class="menu-link" href="header-light.html">
										<div>UPCOMING EVENTS</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="header-dark.html">
										<div>PAST EVENTS</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="header-transparent.html">
										<div>UPCOMING WORKSHOP & TRAINING</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="header-semi-transparent.html">
										<div>PAST WORKSHOP & TRAINING</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="header-side-left.html">
										<div>ALL EVENTS</div>
									</a>
								</li>
							</ul>
						</li> -->
					</ul>

					<!-- Mobile Menu
							============================================= -->
					<ul class="menu-container mobile-primary-menu">
						<?php $current = ($ACTIVE == "home")? "current":"";?>
						<li class="menu-item menu-color-home <?php echo $current;?>">
							<a class="menu-link" href="<?php echo site_url(''); ?>">
								<div>หน้าหลัก</div>
							</a>
						</li>
						<?php $current = ($ACTIVE == "about")? "current":"";?>
						<li class="menu-item menu-color-tech <?php echo $current;?>">
							<a class="menu-link" href="javascript:void(0);">
								<div>เกี่ยวกับหน่วยงาน</div>
							</a>
							<ul class="sub-menu-container">
								<li class="menu-item">
									<a class="menu-link" href="<?php echo site_url('about'); ?>">
										<div><i class="fa-solid fa-building-columns me-2"></i> ข้อมูลหน่วยงาน</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="<?php echo site_url('about/structure'); ?>">
										<div><i class="fa-solid fa-sitemap me-2"></i> โครงสร้างหน่วยงาน</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="<?php echo site_url('about/personels'); ?>">
										<div><i class="fa-solid fa-users me-2"></i> โครงสร้างผู้บริหารและบุคลากร</div>
									</a>
								</li>
							</ul>
						</li>
						<?php $current = ($ACTIVE == "news")? "current":"";?>
						<li class="menu-item menu-color-lifestyle <?php echo $current;?>">
							<a class="menu-link" href="<?php echo site_url('news'); ?>">
								<div>ข่าวประชาสัมพันธ์</div>
							</a>
						</li>
						<li class="menu-item menu-color-fashion">
							<a class="menu-link" href="javascript:void(0);">
								<div>Lifelong Learning</div>
							</a>
							<ul class="sub-menu-container">
								<li class="menu-item">
									<a class="menu-link" href="https://lifelong.crru.ac.th/course#tabs-30" target="_blank">
									<!-- <a class="menu-link" href="<?php echo site_url('lifelong/opening'); ?>"> -->
										<div><i class="fa-solid fa-fire me-2"></i> หลักสูตรที่กำลังเปิดรับสมัคร</div>
									</a>
								</li>
								<li class="menu-item">
									<!-- <a class="menu-link" href="<?php echo site_url('lifelong/course'); ?>"> -->
									<a class="menu-link" href="https://lifelong.crru.ac.th/course" target="_blank">
										<div><i class="fa-regular fa-bookmark me-2"></i> หลักสูตรทั้งหมด</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('lifelong/cooperates'); ?>"> -->
										<div><i class="fa-regular fa-building me-2"></i> เครือข่ายความร่วมมือ</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('lifelong/experts'); ?>"> -->
										<div><i class="fa-solid fa-chalkboard-user me-2"></i> อาจารย์ & วิทยากร</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://lifelong.crru.ac.th/" target="_blank">
										<div><i class="fa-solid fa-arrow-up-right-from-square me-2"></i> เว็บไซต์ Lifelong Learning</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-home">
							<a class="menu-link" href="javascript:void(0);">
								<div>Credit bank</div>
							</a>
							<ul class="sub-menu-container">
								<li class="menu-item">
									<a class="menu-link" href="https://creditbank.crru.ac.th/about" target="_blank">
									<!-- <a class="menu-link" href="<?php echo site_url('creditbank'); ?>"> -->
										<div><i class="fa-solid fa-graduation-cap me-2"></i> สะสมหน่วยกิต</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://creditbank.crru.ac.th/about" target="_blank">
									<!-- <a class="menu-link" href="<?php echo site_url('creditbank/predegree'); ?>"> -->
										<div><i class="fa-solid fa-users-rectangle me-2"></i> เรียนรวม</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://creditbank.crru.ac.th/" target="_blank">
										<div><i class="fa-solid fa-arrow-up-right-from-square me-2"></i> เว็บไซต์ Credit bank</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-market">
							<a class="menu-link" href="javascript:void(0);">
								<div>CRRU CWIE</div>
							</a>
							<ul class="sub-menu-container">
								<li class="menu-item">
									<a class="menu-link" href="https://cwie.crru.ac.th/board" target="_blank">
									<!-- <a class="menu-link" href="<?php echo site_url('cwie/board'); ?>"> -->
										<div><i class="fa-solid fa-sitemap me-2"></i> คณะกรรมการ</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://cwie.crru.ac.th/operation" target="_blank">
									<!-- <a class="menu-link" href="<?php echo site_url('cwie'); ?>"> -->
										<div><i class="fa-solid fa-square-poll-vertical me-2"></i> ผลการดำเนินงาน</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="https://cwie.crru.ac.th/" target="_blank">
										<div><i class="fa-solid fa-arrow-up-right-from-square me-2"></i> เว็บไซต์ CRRU-CWIE</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-travel">
							<a class="menu-link" href="javascript:void(0);">
								<div>ศูนย์เซรามิก</div>
							</a>
							<ul class="sub-menu-container">
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('ceramic/learning'); ?>"> -->
										<div><i class="fa-brands fa-leanpub me-2"></i> แหล่งเรียนรู้ศูนย์เซรามิก</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('ceramic/products'); ?>"> -->
										<div><i class="fa-solid fa-mug-saucer me-2"></i> สั่งผลิตภัณฑ์เซรามิก</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('ceramic'); ?>"> -->
										<div><i class="fa-solid fa-font-awesome me-2"></i> เกี่ยวกับศูนย์เซรามิก มร.ชร.</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-color-food">
							<a class="menu-link" href="javascript:void(0);">
								<div>CLLI MIS</div>
							</a>
							<ul class="sub-menu-container">
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('mis'); ?>"> -->
										<div><i class="fa-solid fa-user-group me-2"></i> Personels</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('mis'); ?>"> -->
										<div><i class="fa-solid fa-user-tie me-2"></i> Executives</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-notify-type="warning" data-notify-msg="<i class='icon-warning-sign me-1'></i> กำลังพัฒนาระบบ" onclick="SEMICOLON.widget.notifications({ el: this }); return false;">
									<!-- <a class="menu-link" href="<?php echo site_url('mis'); ?>"> -->
										<div><i class="fa-solid fa-screwdriver-wrench me-2"></i> Administrator</div>
									</a>
								</li>
							</ul>
						</li>
					</ul>

				</nav><!-- #primary-menu end -->

			</div>
		</div>
	</div>
</header><!-- #header end -->

<!-- Modal -->
<div class="modal fade" id="modal_facebook" tabindex="-1" aria-labelledby="modal_facebookLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Facebook Fanpage</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="https://www.facebook.com/crru.clli" target="_blank">
									<img src="<?php echo base_url('assets/images/website/fbfg_cllicrru.jpg') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8">
								<a class="text-dark font-sarabun fw-bold" href="https://www.facebook.com/crru.clli" target="_blank">
									สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย
									<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="https://www.facebook.com/profile.php?id=100070704911059" target="_blank">
									<img src="<?php echo base_url('assets/images/website/fb_cllicrru.jpg') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8">
								<a class="text-dark font-sarabun fw-bold" href="https://www.facebook.com/profile.php?id=100070704911059" target="_blank">
									Clli Crru
									<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="https://www.facebook.com/profile.php?id=100083426347025" target="_blank">
									<img src="<?php echo base_url('assets/images/website/fb_uprenew.jpg') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8">
								<a class="text-dark font-sarabun fw-bold" href="https://www.facebook.com/profile.php?id=100083426347025" target="_blank">
									หลักสูตร Upskill Reskill สถาบันการเรียนรู้ตลอดชีวิต ม.ราชภัฏเชียงราย
									<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
								</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="text-center mt-3">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_lineofficial" tabindex="-1" aria-labelledby="modal_lineofficialLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Line Official Accounts</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="https://lin.ee/PaDws4C" target="_blank">
									<img src="<?php echo base_url('assets/images/website/fbfg_cllicrru.jpg') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8">
								<a class="text-dark font-sarabun fw-bold" href="https://lin.ee/PaDws4C" target="_blank">
									CLLI News
									<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
									<br />
									<span class="text-secondary fw-light">Line ID: @672qowen</span>
								</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="https://lin.ee/SY4Vzp7" target="_blank">
									<img src="<?php echo base_url('assets/images/website/line_lifelong.png') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8">
								<a class="text-dark font-sarabun fw-bold" href="https://lin.ee/SY4Vzp7" target="_blank">
									CRRU Lifelong
									<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
									<br />
									<span class="text-secondary fw-light">Line ID: @lifelong.crru</span>
								</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="https://lin.ee/9TehGBT9" target="_blank">
									<img src="<?php echo base_url('assets/images/website/line_cwie.jpg') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8">
								<a class="text-dark font-sarabun fw-bold" href="https://lin.ee/9TehGBT9" target="_blank">
									CRRU-CWIE Official
									<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
									<br />
									<span class="text-secondary fw-light">Line ID: @174rxhcn</span>
								</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="text-center mt-3">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_contact" tabindex="-1" aria-labelledby="modal_contactLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ติดต่อสอบถาม</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="tel:(+6653776008)" target="_blank">
									<img src="<?php echo base_url('assets/images/website/telephone.png') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8">
								<a class="text-dark font-sarabun fw-bold" href="tel:(+6653776008)" target="_blank">
									สถาบันการเรียนรู้ตลอดชีวิต (สำนักงาน) : 053 776 008
								</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="d-flex align-items-center text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="javascript:void(0);">
									<img src="<?php echo base_url('assets/images/website/telephone.png') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="col col-md-10 col-sm-8 col-xs-8">
								<div class="text-dark font-sarabun fw-bold">เบอร์โทรศัพท์ (ภายใน)</div>
								<div class="text-dark font-sarabun ps-4">
									&bull;&nbsp; งานสำนักงาน : 1001 , 1002<br/>
									&bull;&nbsp; งาน Up-skill , Re-skill , New skill : 1003<br/>
									&bull;&nbsp; งาน Credit bank : 1004 , 1005<br/>
									&bull;&nbsp; งาน CWIE : 1007<br/>
									&bull;&nbsp; งาน IT : 1015<br/>
								</div>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="mailto:clli@crru.ac.th" target="_blank">
									<img src="<?php echo base_url('assets/images/website/email.png') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8" target="_blank">
								<a class="text-dark font-sarabun fw-bold" href="mailto:clli@crru.ac.th">
									Email : clli@crru.ac.th
								</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="text-center col col-md-2 col-sm-4 col-xs-4">
								<a href="https://goo.gl/maps/kFBEH63Paagqg88G6" target="_blank">
									<img src="<?php echo base_url('assets/images/website/map.png') ?>" class="rounded-circle col-12 border border-light">
								</a>
							</div>
							<div class="d-flex align-items-center col col-md-10 col-sm-8 col-xs-8" target="_blank">
								<a class="text-dark font-sarabun fw-bold" href="https://goo.gl/maps/kFBEH63Paagqg88G6">
									สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย
									<span class="text-secondary fw-light ms-2 text-danger">[Google Map]</span>
									<br />
									<span class="text-secondary fw-light">เลขที่ 80 หมู่ 9 ตำบลบ้านดู่ อำเภอเมืองเชียงราย จังหวัดเชียงราย</span>
								</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="text-center mt-3">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
				</div>
			</div>
		</div>
	</div>
</div>