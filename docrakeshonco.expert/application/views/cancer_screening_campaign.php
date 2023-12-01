<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Page Loading -->
	<div id="loading"></div>
	<?php $this->load->view('layout/nav');  ?>
	<!-- Nav Menu  -->

	<nav aria-label="breadcrumb" class="_breadcrumb">
		<h1>Cancer screening campaign conducted by him at jagdalpur</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">News</li>
		</ol>
	</nav>

	<!--specialty -->
	<section class="_top cmnsection">
		<div class="container">
			<div class="row mb-30">
				<div class="col-lg-12 col-md-12 col-sm-12 blog_text_cont">
					<h2>Cancer screening campaign conducted by him at jagdalpur</h2>
					<img src="<?php echo base_url();?>uploads/news/news_7.jpg" />
					<p>Successfully conducted Cancer health screening camp at Jagdalpur. 30 plus healthy individuals and
						some
						known cancer patients attended the camp and made it successful. Wish to conduct many more such
						camps,
						taking awareness about cancer to general public</p>

					<div class="gallery_inner_image tz-gallery">
						<a class="news_inn lightbox"
							href="<?php echo base_url();?>uploads/news/news_1.jpg">
							<img src="<?php echo base_url();?>uploads/news/news_1.jpg"
								alt="">
						</a>
						<a class="news_inn lightbox"
							href="<?php echo base_url();?>uploads/news/news_2.jpg">
							<img src="<?php echo base_url();?>uploads/news/news_2.jpg"
								alt="">
						</a>
						<a class="news_inn lightbox"
							href="<?php echo base_url();?>uploads/news/news_3.jpg">
							<img src="<?php echo base_url();?>uploads/news/news_3.jpg"
								alt="">
						</a>
						<a class="news_inn lightbox"
							href="<?php echo base_url();?>uploads/news/news_4.jpg">
							<img src="<?php echo base_url();?>uploads/news/news_4.jpg"
								alt="">
						</a>
						<a class="news_inn lightbox"
							href="<?php echo base_url();?>uploads/news/news_5.jpg">
							<img src="<?php echo base_url();?>uploads/news/news_5.jpg"
								alt="">
						</a>
						<a class="news_inn lightbox"
							href="<?php echo base_url();?>uploads/news/news_6.jpg">
							<img src="<?php echo base_url();?>uploads/news/news_6.jpg"
								alt="">
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>



	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>


	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
</body>

</html>