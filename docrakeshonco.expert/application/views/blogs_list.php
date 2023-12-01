<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta'); ?>
	<?php $this->load->view('layout/styles');  ?>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Page Loading -->
	<div id="loading"></div>
	<?php $this->load->view('layout/nav');  ?>
	<section class="breadcrumb_section">
		<nav aria-label="breadcrumb" class="_breadcrumb">
			<h1>Blog</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Blog</li>
			</ol>
		</nav>
	</section>
	<section class="blogsList pt-50 pb-50">
		<div class="container">
			<div class="row">
			    <div class="col-sm-12 col-md-6 blog">
					<img src="<?php echo base_url();?>uploads/blog/Stem cell design 05.png" class="blogsListImg" />
					<div class="content">
						<h5>Doctor's Opinion on No-Tobacco Day</h5>
						<a href="<?php echo base_url();?>world-no-tobacco-day">Read More</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 blog">
					<img src="<?php echo base_url();?>uploads/blog/childhood cancer awareness design 01.jpg" class="blogsListImg" />
					<div class="content">
						<h5>Childhood cancer awareness & prevention</h5>
						<a href="<?php echo base_url();?>childhood-cancer-awareness-and-prevention">Read More</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 blog">
					<img src="<?php echo base_url();?>uploads/blog/childhood cancer design 02.jpg" class="blogsListImg" />
					<div class="content">
						<h5>The long battle of childhood cancer</h5>
						<a href="<?php echo base_url();?>the-long-battle-of-childhood-cancer">Read More</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 blog">
					<img src="<?php echo base_url();?>uploads/blog/Stem cell design 03.jpg" class="blogsListImg" />
					<div class="content">
						<h5>Matched unrelated donor (MUD) and haplo-identical stem cell transplant – what, when and how?
						</h5>
						<a href="<?php echo base_url();?>matched-unrelated-donor-mud-and-haplo-identical-stem-cell-transplant">Read More</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 blog">
					<img src="<?php echo base_url();?>uploads/blog/Stem cell design 04.jpg" class="blogsListImg" />
					<div class="content">
						<h5>Stem cell donation</h5>
						<a href="<?php echo base_url();?>stem-cell-donation">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>

	<!--  JavaScript -->

	<?php $this->load->view('layout/js');  ?>
	<script>
		$(document).ready(function () {
			$('#testimonialModal2').on('shown.bs.modal', function () {
				$('#video1')[0].play();
			})
			$('#testimonialModal2').on('hidden.bs.modal', function () {
				$('#video1')[0].pause();
			})
		});
	</script>


</body>

</html>