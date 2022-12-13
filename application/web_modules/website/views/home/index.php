<?php
$this->load->view('website/home/slider_banner');
?>



<section id="content">
	<div class="content-wrap pb-0">
		<div class="container clearfix">

			<div class="row col-mb-50 justify-content-center mb-4">

				<div class="col-xl-6 col-lg-8 text-center">
					<h3 class="h1 fw-bold mb-3 font-sarabun"><span class="font-sarabun text-dark">สถาบันการเรียนรู้ตลอดชีวิต มร.ชร.</span></h3>
				</div>

				<div class="clear"></div>

				<div class="col-xl-4 col-md-6">
					<div class="card border-0 dark ">
						<div class="card-body">
							<a href="https://lifelong.crru.ac.th" target="blank">
								<img class="rounded" src="<?php echo base_url("assets/images/website/cover_lifelong.png")?>" alt="lifelong education"/>
							</a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6">
					<div class="card border-0 dark ">
						<div class="card-body">
							<a href="https://creditbank.crru.ac.th" target="blank">
								<img class="rounded" src="<?php echo base_url("assets/images/website/cover_creditbank.png")?>" alt="credit bank"/>
							</a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6">
					<div class="card border-0 dark ">
						<div class="card-body">
							<a href="https://cwie.crru.ac.th" target="blank">
								<img class="rounded" src="<?php echo base_url("assets/images/website/cover_cwie.png")?>" alt="cwie"/>
							</a>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-4 col-md-6">
					<div class="card border-0 dark shadow-sm h-shadow shadow-ts p-3" style="background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.4)), url('<?php echo CANVAS; ?>images/blocks/preview/card-2/1.jpg') no-repeat top center / cover;">
						<div class="card-body">
							<h6 class="fw-normal text-uppercase ls2 text-white-50 mb-2">Lifelong Learning</h6>
							<h3 class="card-title h2 fw-bold mb-4"><span class="font-sarabun text-white">หลักสูตรเสริมทักษะและพัฒนาการเรียนรู้ตลอดชีวิต</span></h3>
							<p class="card-text mb-5">Up-Skills / Re-Skills / New Skills</p>
							<div class="d-grid gap-2">
							<a href="https://lifelong.crru.ac.th/" target="_blank" class="btn btn-primary font-sarabun ">เข้าชมเว็บไซต์</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6">
					<div class="card border-0 shadow-sm h-shadow shadow-ts p-3" style="background: url('<?php echo CANVAS; ?>images/blocks/preview/card-2/2.jpg') no-repeat top center / cover;">
						<div class="card-body">
							<h6 class="fw-normal text-uppercase ls2 text-black-50 mb-2">Credit bank</h6>
							<h3 class="card-title h2 fw-bold mb-4"><span class="font-sarabun text-dark">คลังหน่วยกิต</span></h3>
							<p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, est blanditiis id aut enim consequuntur. Voluptates error dicta assumenda voluptatem!</p>
							<div class="d-grid gap-2">
							<a href="https://creditbank.crru.ac.th/" target="_blank" class="btn btn-primary font-sarabun ">เข้าชมเว็บไซต์</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6">
					<div class="card border-0 dark shadow-sm h-shadow shadow-ts p-3" style="background: url('<?php echo CANVAS; ?>images/blocks/preview/card-2/3.jpg') no-repeat center center / cover;">
						<div class="card-body">
							<h6 class="fw-normal text-uppercase ls2 text-white-50 mb-2">CWIE</h6>
							<h3 class="card-title h2 fw-bold mb-4 text-white"><span class="font-sarabun text-white">สหกิจศึกษาและการศึกษาเชิงบูรณาการกับการทำงาน</span></h3>
							<p class="card-text mb-5">Lorem ipsum dolor sit amett</p>
							
							<div class="d-grid gap-2">
							<a href="https://cwie.crru.ac.th/" target="_blank" class="btn btn-primary font-sarabun ">เข้าชมเว็บไซต์</a>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="clear"></div>

			<div class="row clearfix">
				<div class="col-lg-8">
					<nav class="navbar navbar-expand-lg navbar-light p-0">
						<h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold"><span class="font-sarabun text-dark"><i class="fa-solid fa-bullhorn"></i> ข่าวประชาสัมพันธ์</span></h4>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler1" aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
							<i class="icon-line-menu"></i>
						</button>

						<div class="collapse navbar-collapse justify-content-between" id="navbarToggler1">
							<div></div>
							<ul class="nav nav-sm navbar-nav me-md-auto me-lg-0 mt-2 mt-lg-0 align-self-end" role="tablist">
								<li class="nav-item">
									<a class="nav-link bg-color-travel active" id="nav-all-tab" data-bs-toggle="tab" href="#nav-all" role="tab" aria-selected="true">ALL</a>
								</li>
								<li class="nav-item">
									<a class="nav-link bg-color-home" id="nav-clli-tab" data-bs-toggle="tab" href="#nav-clli" role="tab" aria-selected="true">CLLI</a>
								</li>
								<li class="nav-item">
									<a class="nav-link bg-color-lifestyle" id="nav-lifelong-tab" data-bs-toggle="tab" href="#nav-lifelong" role="tab" aria-selected="false">Lifelong Learning</a>
								</li>
								<li class="nav-item">
									<a class="nav-link bg-color-sports" id="nav-creditbank-tab" data-bs-toggle="tab" href="#nav-creditbank" role="tab" aria-selected="false">Credit bank</a>
								</li>
								<li class="nav-item">
									<a class="nav-link bg-color-fashion" id="nav-cwie-tab" data-bs-toggle="tab" href="#nav-cwie" role="tab" aria-selected="false">CRRU-CWIE</a>
								</li>
							</ul>
						</div>
					</nav>

					<div class="line line-xs line-dark"></div>

					<!-- Tab Content
							============================================= -->
					<div class="tab-content" id="nav-tabContent">

						<div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
							<div class="row col-mb-30 mb-0">

								<div class="col-lg-6">
									<!-- Post Article -->
									<div class="posts-md">
										<div class="entry">
											<div class="entry-image">
												<a href="">
													<img src="<?php echo base_url('assets/images/upload/news/311120257_207124398321056_5869689153982064719_n.jpg'); ?>" alt="Image 3">
												</a>
												<div class="entry-categories"><a href="" class="bg-lifestyle">Lifelong Learning</a></div>
											</div>
											<div class="entry-title nott">
												<h3 class="mb-2">
													<a href="" class="font-sarabun">Training Business Marketing สร้างหลักสูตรอย่างไรให้ว้าว</a>
												</h3>
											</div>
											<div class="entry-meta font-sarabun">
												<ul>
													<li style="font-size:12px;"><span>โดย</span> <a href="#">CLLI News</a></li>
													<li style="font-size:12px;"><i class="icon-time"></i><a href="#">9 ต.ค. 65 21:00 น.</a></li>
												</ul>
											</div>
											<div class="entry-content clearfix mt-1 font-sarabun" style="font-size:14px; text-indent:40px;text-align: justify; text-justify: inter-word;">
												<p>
													สถาบันการเรียนรู้ตลอดชีวิต จัดอบรมเชิงปฏิบัติการ "ธุรกิจฝึกอบรม : Training Business Marketing" สร้างหลักสูตรอย่างไรให้ว้าว! ระหว่าง วันที่ 8 - 9 ตุลาคม 2565 ณ ห้องดอยตุง 2 โรงแรม The Riverie by Katathani Chiang Rai จังหวัดเชียงราย
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">

									<div class="posts-sm row col-mb-30">
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href=""><img src="<?php echo base_url('assets/images/upload/news/311159958_3308517089419676_6413781035644951675_n.jpg'); ?>" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="">MOU ความร่วมมือทางวิชาการ “ด้านการเรียนรู้ตลอดชีวิต”</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li style="font-size:12px;"><i class="icon-time"></i><a href="#">7 ต.ค. 65 15:51 น.</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href=""><img src="<?php echo base_url('assets/images/upload/news/311050556_206539328379563_1819084240269111201_n.jpg'); ?>" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="">ต้อนรับคณะกรรมการติดตาม ตรวจสอบ และประเมินผลงาน</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li style="font-size:12px;"><i class="icon-time"></i><a href="#">6 ต.ค. 65 16:02 น.</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href=""><img src="<?php echo base_url('assets/images/upload/news/309333315_205238535176309_8934975099743963228_n.jpg'); ?>" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="">ร่วมประชุมเพื่อสรุปผลการฝึกอบรม ชุดฝึกอบรมที่ ๓ อนามัยการเจริญพันธ์และโภชนศาสตร์</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li style="font-size:12px;"><i class="icon-time"></i><a href="#">28 ก.ย. 65 15:46 น.</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href=""><img src="<?php echo base_url('assets/images/upload/news/309581119_205235128509983_651928170073375655_n.jpg'); ?>" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4><a href="">ประชุมกรรมการยกร่างประกาศแนวทางการปฏิบัติ CWIE</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li style="font-size:12px;"><i class="icon-time"></i><a href="#">28 ก.ย. 65 15:23 น.</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>

						<div class="tab-pane fade show" id="nav-clli" role="tabpanel" aria-labelledby="nav-clli-tab">
							<div class="row col-mb-30 mb-0">

								<div class="col-lg-6">
									<!-- Post Article -->
									<div class="posts-md">
										<div class="entry">
											<div class="entry-image">
												<a href="">
													<img src="<?php echo base_url('assets/images/upload/news/311120257_207124398321056_5869689153982064719_n.jpg'); ?>" alt="Image 3">
												</a>
												<div class="entry-categories"><a href="" class="bg-home">CLLI</a></div>
											</div>
											<div class="entry-title nott">
												<h3 class="mb-2">
													<a href="" class="font-sarabun">Training Business Marketing สร้างหลักสูตรอย่างไรให้ว้าว</a>
												</h3>
											</div>
											<div class="entry-meta font-sarabun">
												<ul>
													<li style="font-size:12px;"><span>โดย</span> <a href="#">CLLI News</a></li>
													<li style="font-size:12px;"><i class="icon-time"></i><a href="#">9 ต.ค. 65 21:00 น.</a></li>
												</ul>
											</div>
											<div class="entry-content clearfix mt-1 font-sarabun" style="font-size:14px; text-indent:40px;text-align: justify; text-justify: inter-word;">
												<p>
													สถาบันการเรียนรู้ตลอดชีวิต จัดอบรมเชิงปฏิบัติการ "ธุรกิจฝึกอบรม : Training Business Marketing" สร้างหลักสูตรอย่างไรให้ว้าว! ระหว่าง วันที่ 8 - 9 ตุลาคม 2565 ณ ห้องดอยตุง 2 โรงแรม The Riverie by Katathani Chiang Rai จังหวัดเชียงราย
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">

									<div class="posts-sm row col-mb-30">

									</div>

								</div>
							</div>
						</div>

						<div class="tab-pane fade show" id="nav-lifelong" role="tabpanel" aria-labelledby="nav-lifelong-tab">
							<div class="row col-mb-30 mb-0">

								<div class="col-lg-6">
									<!-- Post Article -->
									<div class="posts-md">
										<div class="entry">
											<div class="entry-image">
												<a href="">
													<img src="<?php echo base_url('assets/images/upload/news/311120257_207124398321056_5869689153982064719_n.jpg'); ?>" alt="Image 3">
												</a>
												<div class="entry-categories"><a href="" class="bg-lifestyle">Lifelong Learning</a></div>
											</div>
											<div class="entry-title nott">
												<h3 class="mb-2">
													<a href="" class="font-sarabun">Training Business Marketing สร้างหลักสูตรอย่างไรให้ว้าว</a>
												</h3>
											</div>
											<div class="entry-meta font-sarabun">
												<ul>
													<li style="font-size:12px;"><span>โดย</span> <a href="#">CLLI News</a></li>
													<li style="font-size:12px;"><i class="icon-time"></i><a href="#">9 ต.ค. 65 21:00 น.</a></li>
												</ul>
											</div>
											<div class="entry-content clearfix mt-1 font-sarabun" style="font-size:14px; text-indent:40px;text-align: justify; text-justify: inter-word;">
												<p>
													สถาบันการเรียนรู้ตลอดชีวิต จัดอบรมเชิงปฏิบัติการ "ธุรกิจฝึกอบรม : Training Business Marketing" สร้างหลักสูตรอย่างไรให้ว้าว! ระหว่าง วันที่ 8 - 9 ตุลาคม 2565 ณ ห้องดอยตุง 2 โรงแรม The Riverie by Katathani Chiang Rai จังหวัดเชียงราย
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">

									<div class="posts-sm row col-mb-30">

									</div>

								</div>
							</div>
						</div>

						<div class="tab-pane fade show" id="nav-creditbank" role="tabpanel" aria-labelledby="nav-creditbank-tab">
							<div class="row col-mb-30 mb-0">

								<div class="col-lg-6">
									<!-- Post Article -->
									<div class="posts-md">
										<div class="entry">
											<div class="entry-image">
												<a href="">
													<img src="<?php echo base_url('assets/images/upload/news/311120257_207124398321056_5869689153982064719_n.jpg'); ?>" alt="Image 3">
												</a>
												<div class="entry-categories"><a href="" class="bg-sports">Credit bank</a></div>
											</div>
											<div class="entry-title nott">
												<h3 class="mb-2">
													<a href="" class="font-sarabun">Training Business Marketing สร้างหลักสูตรอย่างไรให้ว้าว</a>
												</h3>
											</div>
											<div class="entry-meta font-sarabun">
												<ul>
													<li style="font-size:12px;"><span>โดย</span> <a href="#">CLLI News</a></li>
													<li style="font-size:12px;"><i class="icon-time"></i><a href="#">9 ต.ค. 65 21:00 น.</a></li>
												</ul>
											</div>
											<div class="entry-content clearfix mt-1 font-sarabun" style="font-size:14px; text-indent:40px;text-align: justify; text-justify: inter-word;">
												<p>
													สถาบันการเรียนรู้ตลอดชีวิต จัดอบรมเชิงปฏิบัติการ "ธุรกิจฝึกอบรม : Training Business Marketing" สร้างหลักสูตรอย่างไรให้ว้าว! ระหว่าง วันที่ 8 - 9 ตุลาคม 2565 ณ ห้องดอยตุง 2 โรงแรม The Riverie by Katathani Chiang Rai จังหวัดเชียงราย
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">

									<div class="posts-sm row col-mb-30">

									</div>

								</div>
							</div>
						</div>

						<div class="tab-pane fade show" id="nav-cwie" role="tabpanel" aria-labelledby="nav-cwie-tab">
							<div class="row col-mb-30 mb-0">

								<div class="col-lg-6">
									<!-- Post Article -->
									<div class="posts-md">
										<div class="entry">
											<div class="entry-image">
												<a href="">
													<img src="<?php echo base_url('assets/images/upload/news/311120257_207124398321056_5869689153982064719_n.jpg'); ?>" alt="Image 3">
												</a>
												<div class="entry-categories"><a href="" class="bg-fashion">CRRU-CWIE</a></div>
											</div>
											<div class="entry-title nott">
												<h3 class="mb-2">
													<a href="" class="font-sarabun">Training Business Marketing สร้างหลักสูตรอย่างไรให้ว้าว</a>
												</h3>
											</div>
											<div class="entry-meta font-sarabun">
												<ul>
													<li style="font-size:12px;"><span>โดย</span> <a href="#">CLLI News</a></li>
													<li style="font-size:12px;"><i class="icon-time"></i><a href="#">9 ต.ค. 65 21:00 น.</a></li>
												</ul>
											</div>
											<div class="entry-content clearfix mt-1 font-sarabun" style="font-size:14px; text-indent:40px;text-align: justify; text-justify: inter-word;">
												<p>
													สถาบันการเรียนรู้ตลอดชีวิต จัดอบรมเชิงปฏิบัติการ "ธุรกิจฝึกอบรม : Training Business Marketing" สร้างหลักสูตรอย่างไรให้ว้าว! ระหว่าง วันที่ 8 - 9 ตุลาคม 2565 ณ ห้องดอยตุง 2 โรงแรม The Riverie by Katathani Chiang Rai จังหวัดเชียงราย
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">

									<div class="posts-sm row col-mb-30">

									</div>

								</div>
							</div>
						</div>


					</div><!-- Tab End -->
				</div>

				<!-- Top Sidebar Area
						============================================= -->
				<div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
					<div class="sticky-sidebar">

						<div id="p-carousel" class="widget clearfix">

							<h4 class="highlight-me text-center font-sarabun">หลักสูตรเสริมทักษะและพัฒนาการเรียนรู้ตลอดชีวิต</h4>
							<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="https://lifelong.crru.ac.th/course/detail/8">
												<img src="<?php echo base_url('assets/images/upload/course/course_img_LL6502001_1663135038.jpg'); ?>" class="rounded" alt="เสริมทักษะสมอง (EF) พิชิตชีวิตที่สำเร็จในเด็กปฐมวัย">
											</a>
										</div>
										<div class="portfolio-desc text-center pb-0">
											<h3><a href="https://lifelong.crru.ac.th/course/detail/8" class="font-sarabun" style="font-size:16px;">เสริมทักษะสมอง (EF) พิชิตชีวิตที่สำเร็จในเด็กปฐมวัย</a></h3>
											<span class="font-sarabun" style="font-size:12px;"><a href="https://lifelong.crru.ac.th/course/detail/8">เปิดรับสมัครวันที่ : 15 ก.ย. - 20 ต.ค. 2565</a></span>
											<a href="https://lifelong.crru.ac.th/course/detail/8" class="btn btn-danger w-100 th-font mt-3">ลงทะเบียนหลักสูตร</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="https://lifelong.crru.ac.th/course/detail/44">
												<img src="<?php echo base_url('assets/images/upload/course/course_img_LL6503007_1663845299.png'); ?>" class="rounded" alt="ภาษาไทยเพื่อการสื่อสารสำหรับชาวต่างชาติ">
											</a>
										</div>
										<div class="portfolio-desc text-center pb-0">
											<h3><a href="https://lifelong.crru.ac.th/course/detail/44" class="font-sarabun" style="font-size:16px;">ภาษาไทยเพื่อการสื่อสารสำหรับชาวต่างชาติ</a></h3>
											<span class="font-sarabun" style="font-size:12px;"><a href="https://lifelong.crru.ac.th/course/detail/44">เปิดรับสมัครวันที่ : 15 ก.ย. - 31 ต.ค. 2565</a></span>
											<a href="https://lifelong.crru.ac.th/course/detail/44" class="btn btn-danger w-100 th-font mt-3">ลงทะเบียนหลักสูตร</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="https://lifelong.crru.ac.th/course/detail/10">
												<img src="<?php echo base_url('assets/images/upload/course/course_img_LL6503001_1661949765.png'); ?>" class="rounded" alt="นวัตกรรมสร้างสรรค์เพื่อพัฒนาทักษะการอ่านออกเขียนได้ สำหรับนักเรียน">
											</a>
										</div>
										<div class="portfolio-desc text-center pb-0">
											<h3><a href="https://lifelong.crru.ac.th/course/detail/10" class="font-sarabun" style="font-size:16px;">นวัตกรรมสร้างสรรค์เพื่อพัฒนาทักษะการอ่านออกเขียนได้ สำหรับนักเรียน</a></h3>
											<span class="font-sarabun" style="font-size:12px;"><a href="https://lifelong.crru.ac.th/course/detail/10">เปิดรับสมัครวันที่ : 1 ต.ค. - 20 ต.ค. 2565</a></span>
											<a href="https://lifelong.crru.ac.th/course/detail/10" class="btn btn-danger w-100 th-font mt-3">ลงทะเบียนหลักสูตร</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="https://lifelong.crru.ac.th/course/detail/20">
												<img src="<?php echo base_url('assets/images/upload/course/course_img_LL6506008_1661949668.png'); ?>" class="rounded" alt="วิทยากรชุมชน">
											</a>
										</div>
										<div class="portfolio-desc text-center pb-0">
											<h3><a href="https://lifelong.crru.ac.th/course/detail/20" class="font-sarabun" style="font-size:16px;">วิทยากรชุมชน</a></h3>
											<span class="font-sarabun" style="font-size:12px;"><a href="https://lifelong.crru.ac.th/course/detail/20">เปิดรับสมัครวันที่ : 1 ต.ค. - 20 ต.ค. 2565</a></span>
											<a href="https://lifelong.crru.ac.th/course/detail/20" class="btn btn-danger w-100 th-font mt-3">ลงทะเบียนหลักสูตร</a>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div> <!-- Sidebar End -->
			</div>
		</div> <!-- Container End -->

		<!-- Fullwidth Carousel
				============================================= -->
		<div class="section bg-transparent m-0 pb-0">
			<div class="container clearfix">
				<h4 class="mb-3 ls1 text-uppercase fw-bold"><span class="font-sarabun text-dark"><i class="fa-regular fa-images"></i> ภาพกิจกรรม</span></h4>
				<!-- Owl Carousel
						============================================= -->
				<div id="oc-news" class="owl-carousel fixed-nav top-nav carousel-widget posts-md customjs">
					<!-- Post Article -->
					<div class="entry mb-0" style="background: url('<?php echo base_url('assets/images/upload/course/course_img_LL6506008_1661949668.png'); ?>') center center; background-size: cover; height: 400px;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
								<div class="position-relative w-100">
									<div class="entry-categories"><a href="demo-news-category.html" class="bg-fashion">Fashion</a></div>
									<div class="entry-title nott">
										<h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Ultimate Guide To Fashion</a></h3>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li><span>by</span> <a href="#">John Doe</a></li>
											<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
										</ul>
									</div>
									<ul class="entry-icons d-none d-sm-block">
										<li><a href="#" class="icon-bookmark-empty"></a></li>
										<li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
										<li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Post Article -->
					<div class="entry mb-0" style="background: url('<?php echo base_url('assets/images/upload/course/course_img_LL6506008_1661949668.png'); ?>') center center; background-size: cover; height: 400px;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
								<div class="position-relative w-100">
									<div class="entry-categories"><a href="demo-news-category.html" class="bg-sports">Sports</a></div>
									<div class="entry-title nott">
										<h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Sports Strategies For Beginners</a></h3>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li><span>by</span> <a href="#">John Doe</a></li>
											<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
										</ul>
									</div>
									<ul class="entry-icons d-none d-sm-block">
										<li><a href="#" class="icon-bookmark-empty"></a></li>
										<li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
										<li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Post Article -->
					<div class="entry mb-0" style="background: url('<?php echo base_url('assets/images/upload/course/course_img_LL6506008_1661949668.png'); ?>') center center; background-size: cover; height: 400px;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
								<div class="position-relative w-100">
									<div class="entry-categories"><a href="demo-news-category.html" class="bg-food">Food</a></div>
									<div class="entry-title nott">
										<h3 class="fw-semibold mb-2"><a href="#" class="text-light">2 Things You Must Know About you Cafe</a></h3>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li><span>by</span> <a href="#">John Doe</a></li>
											<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
										</ul>
									</div>
									<ul class="entry-icons d-none d-sm-block">
										<li><a href="#" class="icon-bookmark-empty"></a></li>
										<li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
										<li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Post Article -->
					<div class="entry mb-0" style="background: url('<?php echo base_url('assets/images/upload/course/course_img_LL6506008_1661949668.png'); ?>') center center; background-size: cover; height: 400px;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
								<div class="position-relative w-100">
									<div class="entry-categories"><a href="demo-news-category.html" class="bg-fashion">Fashion</a></div>
									<div class="entry-title nott">
										<h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Truth About Fashion In 3 Minutes</a></h3>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li><span>by</span> <a href="#">John Doe</a></li>
											<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
										</ul>
									</div>
									<ul class="entry-icons d-none d-sm-block">
										<li><a href="#" class="icon-bookmark-empty"></a></li>
										<li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
										<li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Post Article -->
					<div class="entry mb-0" style="background: url('<?php echo base_url('assets/images/upload/course/course_img_LL6506008_1661949668.png'); ?>') center center; background-size: cover; height: 400px;">
						<div class="bg-overlay">
							<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
								<div class="position-relative w-100">
									<div class="entry-categories"><a href="demo-news-category.html" class="bg-market">Market</a></div>
									<div class="entry-title nott">
										<h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Hidden Mystery Behind market</a></h3>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li><span>by</span> <a href="#">John Doe</a></li>
											<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
										</ul>
									</div>
									<ul class="entry-icons d-none d-sm-block">
										<li><a href="#" class="icon-bookmark-empty"></a></li>
										<li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
										<li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div> <!-- Carousel End -->
			</div>

			<div class="divider divider-sm divider-rounded divider-center"></div>

			<div class="section m-0 mt-5" style="background-image:linear-gradient(to right, rgba(141, 217, 199), rgba(13, 156, 191));">
				<div class="container d-flex">
					<!-- <div class="col-md-3">
							<span></span>
						</div> -->
					<div class="me-auto col-md-9">
						<h1 class="mb-0 text-light fw-bold font-sarabun"><span class="font-sarabun text-dark">ระบบฐานข้อมูลหลักสูตร</span></h1>
						<span class="th-font font-sarabun text-dark">การเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย</span>
					</div>
					<div class="col-md-3 d-flex align-items-center justify-content-end">
						<a href="https://lifelong.crru.ac.th/admin/form"><button type="button" class="btn btn-outline-light th-font"><i class="fa-solid fa-arrow-right-to-bracket"></i> เข้าสู่ระบบฐานข้อมูล</button></a>
					</div>
				</div>
			</div>

			<!-- <div class="divider divider-sm divider-rounded divider-center"></div>

			<div class="section bg-transparent m-0 p-0">
				<div class="container clearfix">
					<div class="row">
						<div class="col-12 mb-3">
							<h3 class="center"><span class="font-sarabun text-dark">ผลิตภัณฑ์เซรามิก</span></h3>

							<div class="recipe-categories justify-content-center">
								<a href="demos/recipes/recipes.html" data-animate="fadeInUp" class="recipe-category" style="background-image: url('<?php echo base_url('assets/images/website/ceramic1.jpg'); ?>');">
									<div class="recipe-category-inner">
										<div class="recipe-category-icon"><img src="<?php echo base_url('assets/images/ico/cup.png'); ?>" alt="แก้วมัค"></div>
										<div class="recipe-category-info font-sarabun">แก้วมัค (Mug)</div>
									</div>
								</a>

								<a href="demos/recipes/recipes.html" data-animate="fadeInUp" data-delay="100" class="recipe-category" style="background-image: url('<?php echo base_url('assets/images/website/ceramic2.jpg'); ?>');">
									<div class="recipe-category-inner">
										<div class="recipe-category-icon"><img src="<?php echo base_url('assets/images/ico/teapot.png'); ?>" alt="ชุดกาน้ำชา"></div>
										<div class="recipe-category-info font-sarabun">ชุดกาน้ำชา</div>
									</div>
								</a>

								<a href="demos/recipes/recipes.html" data-animate="fadeInUp" data-delay="200" class="recipe-category" style="background-image: url('<?php echo base_url('assets/images/website/ceramic3.jpg'); ?>');">
									<div class="recipe-category-inner">
										<div class="recipe-category-icon"><img src="<?php echo base_url('assets/images/ico/coffee.png'); ?>" alt="ชุดกาแฟ"></div>
										<div class="recipe-category-info font-sarabun">ชุดกาแฟ</div>
									</div>
								</a>

								<a href="demos/recipes/recipes.html" data-animate="fadeInUp" data-delay="300" class="recipe-category" style="background-image: url('<?php echo base_url('assets/images/website/ceramic4.jpg'); ?>');">
									<div class="recipe-category-inner">
										<div class="recipe-category-icon"><img src="<?php echo base_url('assets/images/ico/doll.png'); ?>" alt="ตุ๊กตาหล่อ"></div>
										<div class="recipe-category-info font-sarabun">ตุ๊กตาหล่อ</div>
									</div>
								</a>

								<a href="demos/recipes/recipes.html" data-animate="fadeInUp" data-delay="400" class="recipe-category" style="background-image: url('<?php echo base_url('assets/images/website/ceramic5.jpg'); ?>');">
									<div class="recipe-category-inner">
										<div class="recipe-category-icon"><img src="<?php echo base_url('assets/images/ico/pottery.png'); ?>" alt="จานโชว์"></div>
										<div class="recipe-category-info font-sarabun">จานโชว์</div>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
				<div class="section recipe-items p-0 mb-5" style="overflow: visible;background-color: #f9f9f9">
					<div class="row align-items-stretch align-content-stretch g-0">
						<div class="col-lg-12">
							<div class="row g-0">

								<div class="col-sm-3 col-6">
									<div class="card">
										<div class="card-body">
											<img src="<?php echo base_url('assets/theme/canvas/demos/recipes/images/popular/1.png'); ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#">Gunther Beard</a></p>
												<span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.6</span>
											</div>
											<h3 class="card-title"><a href="demos/recipes/recipe-single.html" class="stretched-link">Green Goddess Avocado Hummus</a></h3>
											<h5 class="card-date"><i class="icon-line2-calendar"></i>Dec 26, 2021</h5>
										</div>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="card">
										<div class="card-body">
											<img src="<?php echo base_url('assets/theme/canvas/demos/recipes/images/popular/2.png'); ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#">Chauffina Carr</a></p>
												<span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.9</span>
											</div>
											<h3 class="card-title"><a href="demos/recipes/recipe-single.html" class="stretched-link">Strawberry Kiwi Healthy Bowl</a></h3>
											<h5 class="card-date"><i class="icon-line2-calendar"></i>Dec 1, 2021</h5>
										</div>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="card">
										<div class="card-body">
											<img src="<?php echo base_url('assets/theme/canvas/demos/recipes/images/popular/3.png'); ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#">Eric Widget </a></p>
												<span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.3</span>
											</div>
											<h3 class="card-title"><a href="demos/recipes/recipe-single.html" class="stretched-link">Rustic Sweet Treat</a></h3>
											<h5 class="card-date"><i class="icon-line2-calendar"></i>Nov 20, 2021</h5>
										</div>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="card">
										<div class="card-body">
											<img src="<?php echo base_url('assets/theme/canvas/demos/recipes/images/popular/4.png'); ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#">Quiche Hollandaise</a></p>
												<span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.5</span>
											</div>
											<h3 class="card-title"><a href="demos/recipes/recipe-single.html" class="stretched-link">A Delicious Homemade Breakfast</a></h3>
											<h5 class="card-date"><i class="icon-line2-calendar"></i>Oct 2, 2021</h5>
										</div>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="card">
										<div class="card-body">
											<img src="<?php echo base_url('assets/theme/canvas/demos/recipes/images/popular/5.png'); ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#">Norman Gordon</a></p>
												<span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.5</span>
											</div>
											<h3 class="card-title"><a href="demos/recipes/recipe-single.html" class="stretched-link">Pumpkin Bars with Cream Cheese Frosting</a></h3>
											<h5 class="card-date"><i class="icon-line2-calendar"></i>Sep 18, 2021</h5>
										</div>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="card">
										<div class="card-body">
											<img src="<?php echo base_url('assets/theme/canvas/demos/recipes/images/popular/6.png'); ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#">Druid Wensleydale</a></p>
												<span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.0</span>
											</div>
											<h3 class="card-title"><a href="demos/recipes/recipe-single.html" class="stretched-link">The Best Homemade Pizza Recipes</a></h3>
											<h5 class="card-date"><i class="icon-line2-calendar"></i>Sep 7, 2021</h5>
										</div>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="card">
										<div class="card-body">
											<img src="<?php echo base_url('assets/theme/canvas/demos/recipes/images/popular/7.png'); ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#">Druid Wensleydale</a></p>
												<span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.0</span>
											</div>
											<h3 class="card-title"><a href="demos/recipes/recipe-single.html" class="stretched-link">The Best Homemade Pizza Recipes</a></h3>
											<h5 class="card-date"><i class="icon-line2-calendar"></i>Sep 7, 2021</h5>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="d-flex justify-content-center">
				<a href="demos/recipes/recipe-single.html" class="button btn-danger button-circle button-large m-0 fw-semibold nott ls0 text-end">ดูผลิตภัณฑ์ทั้งหมด <i class="icon-angle-right"></i></a>
			</div> -->


		</div> <!-- Container End -->
	</div>
</section><!-- #content end -->