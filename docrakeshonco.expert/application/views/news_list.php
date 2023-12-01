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
			<h1>News</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">News</li>
			</ol>
		</nav>
	</section>

	<section class="newsList pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 pb-3 news">
					<div class="card">
						<img class="card-img-top news_list_img" src="<?php echo base_url();?>uploads/news/news_2.jpg"
							alt="Card image cap">
						<div class="card-body news_content">
							<h5 class="card-title">Cancer screening campaign conducted by him</h5>
							<p class="card-text">Venue : Jagdalpur</p>
							<div class="d-flex justify-content-between align-items-center">
								<h6 class="card-subtitle text-dark">Date : 24-05-2023</h6>
								<a href="<?php echo base_url();?>cancer-screening-campaign" class="p card-link">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 pb-3 news">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Blood stem cell donation public awareness program</h5>
							<p class="card-text">340 potential donors registered in space of 3 hours at this event and
								marked themselves as possible saviors of life. Partnered with DATRI, an NGO and
								largestblood stem cell donor registry in India for this endeavour.</p>
							<p class="card-text">Venue : At VMRDA Children’s arena</p>
							<div class="d-flex justify-content-between">
								<h6 class="card-subtitle text-dark">Date : 20-10-2019</h6>
								<!-- <a target="_blank" href="https://m.facebook.com/mgcancerhospital/videos/blood-stem-cell-donation-awareness-program/386721408948874/?_rdr" class="p card-link">Read more</a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 pb-3 news">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">National level Conference on ‘Hematopoietic stem cell transplantation – MGBMTCON</h5>
							<p class="card-text">Oncologists, physicians and paediatricians of the region participated. Eminent speakers from premier institues of the counts like AIIMS, New Delhi, CMC – Vellore, TMH – Mumbai, participated in the event.</p>
							<p class="card-text">Venue : Four Points by Sheraton</p>
							<div class="d-flex justify-content-between">
								<h6 class="card-subtitle text-dark">Date : 21-10-2019</h6>
								<!-- <a href="#" class="p card-link">Read more</a>  -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 pb-3 news">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">International childhood cancer day (ICCD 2021) celebrations</h5>
							<p class="card-text">launched two of our flagship programs related to childhood cancer care ‘pediatric cancer support group’ and ‘pediatric cancer survivorship program’</p> 
							<p class="card-text">Venue : Atrium, Mahatma Gandhi Cancer Hospital</p>
							<div class="d-flex justify-content-between">
								<h6 class="card-subtitle text-dark">Date : 14-10-2021</h6>
								<!-- <a href="#" class="p card-link">Read more</a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 pb-3 news">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">BMT Unit inauguration</h5>
							<p class="card-text">inauguration of “Centre for advanced Hematology and Hemat-oncology” by eminent physicians of Visakhapatnam </p>
							<p class="card-text">Venue : 5th floor, Unique hospital, Arilova, Visakhapatnam</p>
							<div class="d-flex justify-content-between">
								<h6 class="card-subtitle text-dark">Date : 16-05-2019</h6>
								<!-- <a target="_blank" href="https://www.facebook.com/mgcancerhospital/videos/bone-marrow-transplant-nearer-home-our-experience-in-the-first-year/1011313105967707/" class="p card-link">Read more</a> -->
							</div>
						</div>
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