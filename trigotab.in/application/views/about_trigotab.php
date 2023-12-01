<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.grid_full {
			width: 100%;
			min-height: 485px;
			max-height: 485px;
			border-radius: 26px;
		}


		.grid_full img {
			width: 100%;
		}

		.grid_divide {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			gap: 15px;
		}

		.text_grid_full {
			width: 100%;
			display: block;
			min-height: 485px;
			max-height: 485px;
			border-radius: 26px;
			background: #f2f2f2;
		}

		.grid_half {
			display: flex;
			background: #f2f2f2;
			width: 100%;
			min-height: 235px;
			max-height: 235px;
			flex-direction: column;
			border-radius: 26px
		}

		.text {
			width: 100%;
			line-height: 1.2em;
			overflow: hidden;
			display: -webkit-box;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 18;
		}

		.testimonial_text {
			padding: 10%;
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-direction: column;
			min-height: 256px;
		}

		.full_testimonial_text {
			padding: 10%;
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-direction: column;
			min-height: 480px;
		}

		.testimonial_detail {
			display: flex;
			justify-content: space-between;
			align-items: center;
			width: 100%;
		}
	</style>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Page Loading -->
	<div id="loading"></div>

	<?php $this->load->view('layout/nav');  ?>

	<section class="about_trigotab_top_sec">
		<div class="left_sec_bg">
			<div class="left_sec">
				<h6>Fenugreek Seed Powder</h6>
				<h1 class="h3">Tablet 1000mg</h1>
				<p>Trigotab's natural composition, pioneering innovation, and clinical studies position it as your top choice for well-being<br>
                    It isn't just another supplement. It harnesses the potent benefits of fenugreek extract enriched with an enhanced active ingredient - Trigonelline.
                    Its natural formulation is designed to optimize insulin secretion, making it suitable for all ages.<br> 
                    It is a powerful solution that promotes balanced blood sugar and reduces insulin levels. Choose Trigotab as your partner in holistic health. </p>
				<!-- <div class="btn_cont">
					<a href="#" class="btn2 mr-md-3">Buy Now</a>
					<a href="#" class="btn2">Explore More</a>
				</div> -->
			</div>
		</div>
		<div class="right_sec">
		    <div class="background-gradient">
			    <img src="<?php echo base_url();?>assets/img/trigotab_packshot4.png" class="trigotab_packshot4" />
			</div>
		</div>
	</section>

	<section class="why_choose_trigotab_sec">
	    <div class="ctn"> <a id="whats-inside">&nbsp;</a>
				</div>
		<h3>What’s Inside</h3>
		<div class="abtTrigotabTxt">
		    <p>While the traditional soaking of Methi seeds offers numerous benefits, it does take time. For those on-the-go,
	    	we present Trigotab - a readymade solution encapsulating all three below steps in one convenient tablet  </p>
		</div>
		<div class="container d-none d-md-block">
			<div class="row">
				<div class="col-md-8 m-auto">
					<div class="row trigotab_img_description">
						<div class="col-md-4 content trigotab_img_top_left_cont">
							<h6 class="Whats_inside_sec_heading">Procuring</h6>
							<p>It is s essential to ensure the authenticity and purity of Methi seeds. It prevents several diseases.</p>
							<img src="<?php echo base_url();?>assets/img/Group44.png" />
						</div>
						<div class="col-md-4 trigotab_img_top_mid_cont">
							<div class="leaves_animation">
								<img src="<?php echo base_url();?>assets/img/Group11.png" />
							</div>
							<img src="<?php echo base_url();?>assets/img/TRIGOTAB LBL-2.png" class="TRIGOTABLBL-2" />
						</div>
						<div class="col-md-4 content trigotab_img_top_right_cont">
							<h6 class="Whats_inside_sec_heading">Overnight Soaking</h6>
							<p>Soaking Methi seeds enhances their digestibility and nutrient absorption, optimizing their health benefits. </p>
							<img src="<?php echo base_url();?>assets/img/Group46.png" />
						</div>
						<div class="col-md-4 trigotab_img_bot_left_cont">
							<img src="<?php echo base_url();?>assets/img/down_curved_arw.png" />
						</div>
						<div class="col-md-4 content trigotab_img_bot_mid_cont">
							<img src="<?php echo base_url();?>assets/img/Group45.png" />
							<h6 class="Whats_inside_sec_heading mt-10">Soaking</h6>
							<p>Soaking Methi seeds enhances their nutrition and digestibility, allows better nutrient absorption </p>
						</div>
						<div class="col-md-4 trigotab_img_bot_right_cont">
							<img src="<?php echo base_url();?>assets/img/up_curved_arw.png" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile_trigotab_description_img d-md-none">
		    <div class="container">
    			<div class="row">
    				<div class="col-sm-12 mb-10">
    					<h6 class="Whats_inside_sec_heading">Procuring</h6>				
    					<img src="<?php echo base_url();?>assets/img/Group44.png" class="mobile_trigotab_img"/>
    					<p>it's essential to ensure the authenticity and purity of Methi seeds. </p>
    				</div>
    				<div class="col-sm-12 mb-10">
    					<h6 class="Whats_inside_sec_heading">Overnight Soaking</h6>				
    					<img src="<?php echo base_url();?>assets/img/Group46.png" class="mobile_trigotab_img"/>
    					<p>Soaking Methi seeds enhances their digestibility and nutrient absorption, optimizing their health benefits. </p>
    				</div>
    				<div class="col-sm-10 mb-10">
    					<h6 class="Whats_inside_sec_heading mt-10">Soaking</h6>
    					<img src="<?php echo base_url();?>assets/img/Group45.png" class="mobile_trigotab_img"/>
    					<p>Soaking Methi seeds enhances their nutrition and digestibility, allows better nutrient absorption </p>
    				</div>
    			</div>
    		</div>
		</div>
		<div class="col-sm-12 pt-10 text-center">
		    <small><strong>Disclaimer:</strong> The product is not intended to diagnose, treat, cure, or prevent any disease</small>
		</div>
	</section>

	<section class="about_sec">
		<h3>Won the trust of <span>>250</span> Endo’s & <br>Diabetologists across the country</h3>
		<p>To all Diabetics including patients with stubborn glucose control</p>
	</section>

	<!--<section class="testimonials">
		<h3>Testimonials</h3>
		<div class="tab_sec">
			<div class="tabs">
				<ul class="links mb-10">
					<li class="all">
						<a href="#">All</a>
					</li>
					<li class="videos">
						<a href="">Video Testimonials</a>
					</li>
					<li class="reviews">
						<a href="">Reviews</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="grid_txt">
						<div class="container">
							<div class="row">
								<div class="col-sm-4 spacing">
									<div class="grid_full">
										<div class="about_trigotab_video_block">
											<div class="gradient">
												<img src="<?php echo base_url();?>assets/img/thumbnail1.png"
													alt="Video" />
											</div>
											<div class="about_trigotab_icon_cont">
												<a data-toggle="modal" data-target="#myModal15">
													<img src="<?php echo base_url();?>assets/img/play-button.svg"
														alt="Play Button" class="about_trigotab_play_icon" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4 spacing">
									<div class="grid_full">
										<div class="about_trigotab_video_block">
											<div class="gradient">
												<img src="<?php echo base_url();?>assets/img/thumbnail2.png"
													alt="Video" />
											</div>
											<div class="about_trigotab_icon_cont">
												<a data-toggle="modal" data-target="#myModal16">
													<img src="<?php echo base_url();?>assets/img/play-button.svg"
														alt="Play Button" class="about_trigotab_play_icon" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4 spacing">
									<div class="grid_divide">
										<div class="grid_half shadow-lg">
											<div class="testimonial_text">
												<p class="text">Contrary to popular belief, Lorem Ipsum is not simply
													random text. It
													has roots in a piece of classical Latin literature from 45 BC,
													making it over 2000 years old. Richard McClintock, a Latin professor
													at Hampden-Sydney College in Virginia, looked up one of the more
													obscure Latin words, consectetur.</p>
												<hr>
												<div class="testimonial_detail">
													<span class="name">Sofia (42 Years)</span>
													<span class="date">23 May, 2023</span>
												</div>
											</div>
										</div>
										<div class="grid_half shadow-lg">
											<div class="testimonial_text">
												<p class="text">Making it over 2000 years old. Richard McClintock, a
													Latin professor
													at Hampden-Sydney College in Virginia, looked up one of the more
													obscure Latin words, consectetur.</p>
												<hr>
												<div class="testimonial_detail">
													<span class="name">Jhon (42 Years)</span>
													<span class="date">23 May, 2023</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4 spacing">
									<div class="grid_divide">
										<div class="grid_half shadow-lg">
											<div class="testimonial_text">
												<p class="text">Contrary to popular belief, Lorem Ipsum is not simply
													random text. It
													has roots in a piece of classical Latin literature from 45 BC,
													making it over 2000 years old. Richard McClintock, a Latin professor
													at Hampden-Sydney College in Virginia, looked up one of the more
													obscure Latin words, consectetur.</p>
												<hr>
												<div class="testimonial_detail">
													<span class="name">Sofia (42 Years)</span>
													<span class="date">23 May, 2023</span>
												</div>
											</div>
										</div>
										<div class="grid_half shadow-lg">
											<div class="testimonial_text">
												<p class="text">Making it over 2000 years old. Richard McClintock, a
													Latin professor
													at Hampden-Sydney College in Virginia, looked up one of the more
													obscure Latin words, consectetur.</p>
												<hr>
												<div class="testimonial_detail">
													<span class="name">Jhon (42 Years)</span>
													<span class="date">23 May, 2023</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4 spacing">
									<div class="text_grid_full shadow-lg">
										<div class="full_testimonial_text">
											<p class="text">It is a long established fact that a
												reader will be distracted by the
												readable content of a page when looking at its layout. The point of
												using Lorem Ipsum is that it has a more-or-less normal distribution of
												letters, as opposed to using 'Content here, content here', making it
												look like readable English. Many desktop publishing packages and web
												page editorsInternet tend to repeat predefined chunks as necessary,
												making this the first true generator on the Internet. It uses a
												dictionary of over 200 Latin words, combined with a handful of model
												sentence structures, to generate Lorem Ipsum which looks reasonable. The
												generated Lorem Ipsum is therefore always free from repetition, injected
												humour, or non-characteristic words etc.
												paragraphswordsbyteslistsStart with 'Loremipsum dolor sit amet...'</p>
											<hr>
											<div class="testimonial_detail">
												<p class="name">Jhon (42 Years)</p>
												<p class="date">23 May, 2023</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4 spacing">
									<div class="grid_full">
										<div class="about_trigotab_video_block">
											<div class="gradient">
												<img src="<?php echo base_url();?>assets/img/thumbnail3.png"
													alt="Video">
											</div>
											<div class="about_trigotab_icon_cont">
												<a data-toggle="modal" data-target="#myModal17">
													<img src="<?php echo base_url();?>assets/img/play-button.svg"
														alt="Play Button" class="about_trigotab_play_icon" />
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="gradient_img_cont">
		<img src="<?php echo base_url();?>assets/img/gradient_img.png" class="gradient_img d-none d-md-block" />
		<img src="<?php echo base_url();?>assets/img/mob_gradient_img.jpg" class="gradient_img d-md-none" />
		<div class="gradient_img_content">
			<p>Experts Information</p>
			<h3>An add-on Towards<br> stepping down.</h3>
			<div class="btn_cont">
				<button class="btn3 mb-10">Scientific Information</button>
				<button class="btn3">Case studies</button>
			</div>
		</div>
	</section>-->

	<section class="faqs">
	    <div class="ctn"> <a id="faqSec">&nbsp;</a> </div>
		<h3>Frequently Asked Questions</h3>
		<div class="container">
			<div class="row" id="accordion">
				<div class="col-sm-6">
					<div class="mt_3em faq">
						<div class="card custom_card">
							<div class="card-header">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1"
										aria-expanded="false" aria-controls="collapse-1">
										Can I add this supplement to my medication?  
									</a>
								</h5>
							</div>
							<div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="" style="">
								<div class="card-body custom_card_body">
									<p>Yes, you can, but please consult your doctor before consumption.</p>
								</div>
							</div>
						</div>
						<div class="card custom_card">
							<div class="card-header" id="">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
										aria-expanded="false" aria-controls="collapse-1">
									    Can Diabetes be treated with Trigotab? 
									</a>
								</h5>
							</div>
							<div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="">
								<div class="card-body custom_card_body">
									<p>Yes, Trigotab can treat Diabetes. </p>
								</div>
							</div>
						</div>
						<div class="card custom_card">
							<div class="card-header" id="qstn-1">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
										aria-expanded="false" aria-controls="collapse-1">
										Is it safe? 
									</a>
								</h5>
							</div>
							<div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body custom_card_body">
									<p>It is safe to be used by any Diabetic patients or normal individuals. For individuals, it serves as a natural health supplement. </p>
								</div>
							</div>
						</div>
						<div class="card custom_card">
							<div class="card-header" id="qstn-1">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4"
										aria-expanded="false" aria-controls="collapse-1">
										How is Trigotab effective for diabetic patients? 
									</a>
								</h5>
							</div>
							<div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body custom_card_body">
									<p>It effectively extends long, healthy and sustainable Glucose control in diabetic patients.</p>
								</div>
							</div>
						</div>
						<!--<div class="card custom_card">
							<div class="card-header" id="qstn-1">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5"
										aria-expanded="false" aria-controls="collapse-1">
										Contrary to popular belief, Lorem Ipsum is not simply random text.
									</a>
								</h5>
							</div>
							<div id="collapse-5" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body custom_card_body">
									<p>here are many variations of passages of Lorem Ipsum available, but the majority
										have suffered alteration in some form, by injected humour, or randomised words
										which don't look even slightly believable. If you are going to use a passage of
										Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
										middle of text.</p>
								</div>
							</div>
						</div>-->
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mt_3em faq">
						<div class="card custom_card">
							<div class="card-header" id="qstn-1">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-1"
										aria-expanded="false" aria-controls="collapse-2">
										Does Trigotab gradually reduce pill burden? 
									</a>
								</h5>
							</div>
							<div id="collapse2-1" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1"
								style="">
								<div class="card-body custom_card_body">
									<p>Yes, using Trigotab daily as a supplement (or as directed by your healthcare professional) can reduce the pill burden. </p>
								</div>
							</div>
						</div>
						<div class="card custom_card">
							<div class="card-header" id="qstn-1">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-2"
										aria-expanded="false" aria-controls="collapse-2">
										Active ingredient in Trigotab 
									</a>
								</h5>
							</div>
							<div id="collapse2-2" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body custom_card_body">
									<p>Trigonelline is enhanced in the tablet.  </p>
								</div>
							</div>
						</div>
					<!--	<div class="card custom_card">
							<div class="card-header" id="qstn-1">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-3"
										aria-expanded="false" aria-controls="collapse-2">
										when an unknown printer took a galley of type and scrambled it.
									</a>
								</h5>
							</div>
							<div id="collapse2-3" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body custom_card_body">
									<p>here are many variations of passages of Lorem Ipsum available, but the majority
										have suffered alteration in some form, by injected humour, or randomised words
										which don't look even slightly believable. If you are going to use a passage of
										Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
										middle of text.</p>
								</div>
							</div>
						</div>
						<div class="card custom_card">
							<div class="card-header" id="qstn-1">
								<h5 class="mb-0 hdng">
									<a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-4"
										aria-expanded="false" aria-controls="collapse-2">
										Where can I get some?
									</a>
								</h5>
							</div>
							<div id="collapse2-4" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body custom_card_body">
									<p>here are many variations of passages of Lorem Ipsum available, but the majority
										have suffered alteration in some form, by injected humour, or randomised words
										which don't look even slightly believable. If you are going to use a passage of
										Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
										middle of text.</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" id="myModal15" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content"> <button type="button" class="close" data-dismiss="modal"
					aria-label="Close"><span aria-hidden="true">×</span></button>
				<div class="modal-body modal-video-body"> <iframe id="Video1" width="100%" height="315"
						src="https://www.youtube.com/embed/IUN664s7N-c" title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						allowfullscreen></iframe> </div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal16" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content"> <button type="button" class="close" data-dismiss="modal"
					aria-label="Close"><span aria-hidden="true">×</span> </button>
				<div class="modal-body modal-video-body"> <iframe id="Video2" width="100%" height="315"
						src="https://www.youtube.com/embed/IUN664s7N-c" title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						allowfullscreen></iframe> </div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal17" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content"> <button type="button" class="close" data-dismiss="modal"
					aria-label="Close"><span aria-hidden="true">×</span> </button>
				<div class="modal-body modal-video-body"> <iframe id="Video3" width="100%" height="315"
						src="https://www.youtube.com/embed/IUN664s7N-c" title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						allowfullscreen></iframe> </div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>

	<!-- Copyright -->
	<?php $this->load->view('layout/copyright'); ?>

	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
	<script>
		$(document).ready(function () {
			$("#close").click(function () {
				$("#video_model").hide(300);
			});
			var url =
				$("#Video1").attr('src');
			$("#myModal15").on('hide.bs.modal', function () {
				$("#Video1").attr('src', '');
			});
			$("#myModal15").on('show.bs.modal', function () {
				$("#Video1").attr('src', url);
			});
		});
		$(document).ready(function () {
			$("#close").click(function () {
				$("#video_model1").hide(300);
			});
			var url =
				$("#Video2").attr('src');
			$("#myModal16").on('hide.bs.modal', function () {
				$("#Video2").attr('src', '');
			});
			$("#myModal16").on('show.bs.modal', function () {
				$("#Video2").attr('src', url);
			});
		});
		$(document).ready(function () {
			$("#close").click(function () {
				$("#video_model2").hide(300);
			});
			var url =
				$("#Video3").attr('src');
			$("#myModal17").on('hide.bs.modal', function () {
				$("#Video3").attr('src', '');
			});
			$("#myModal17").on('show.bs.modal', function () {
				$("#Video3").attr('src', url);
			});
		});
	</script>
</body>

</html>