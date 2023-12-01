<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Google Tag Manager (noscript) --> 

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCJJLM9K" 
    
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 

    <!-- End Google Tag Manager (noscript) --> 
	<!-- Page Loading -->
	<div id="loading"></div>

	<?php $this->load->view('layout/nav');  ?>

	<section class="index_top_sec pt-100">	
		<img src="<?php echo base_url();?>assets/img/leaves.png" class="leaves_img d-none d-md-block" />
		<div class="d-md-flex">
			<div class="index_top_left_sec">
				<h2 class="heading2">Trigotab <br> Harness the power of Fenugreek for Balanced Blood Sugar!  </h2>
				<div class="btn_cont">
					<!--<a href="#buy-now" class="btn mb-10 mr-md-3">Buy Now</a>-->
					<a href="<?php echo base_url();?>about-trigotab" class="btn mb-10">Know More</a>
				</div>
			</div>
			<div class="index_top_right_sec d-none d-md-block">
				<img src="<?php echo base_url();?>assets/img/trigotab_packshot.png" />
			</div>
			<div class="mobile_sec d-md-none">
				<img src="<?php echo base_url();?>assets/img/leaves_mob.png" class="leaves_mob" />
				<img src="<?php echo base_url();?>assets/img/trigotab_packshot_mob.png" class="packshot_mob"/>
			</div>
		</div>
	</section>

	<section class="instructions_cont">
		<div class="instructions_cont_left_sec d-none d-md-block">
			<img src="<?php echo base_url();?>assets/img/family_img.png" class="family_img" />
		</div>
		<div class="instructions_cont_right_sec">
		    <h1 class="side_heading unique_font">Best Supplement For Diabetes & <br>Blood Sugar</h1>
			<h4 class="side_heading">Traditional Belief + Modern Science</h4>
			<div class="inst">
				<div class="left_inst">
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse1.png" class="right_icon" />
						<p>2 Times a day</p>
					</div>
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse2.png" class="icon" />
						<p>High content of Trigonelline <br>(>4000mcg/ Tab)</p>
					</div>
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse3.png" class="icon" />
						<p>Boosts Digestive System</p>
					</div>
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse4.png" class="icon" />
						<p>Boosts Immune system </p>
					</div>
				</div>
				<div class="right_inst">
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse1.png" class="right_icon" />
						<p>Seek doctor's advice.</p>
					</div>
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse5.png" class="icon" />
						<p>It helps in pancreatic <strong>β</strong> cells<br> regeneration.</p>
					</div>
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse6.png" class="icon" />
						<p>Helps reduce high blood pressure </p>
					</div>
					<div class="instruction">
						<img src="<?php echo base_url();?>assets/img/Ellipse7.png" class="icon" />
						<p>Reduces intestinal glucose absorption </p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ingredients_sec">
		<div class="container">
			<div class="row ingredients_sec_inner_cont">
				<div class="col-md-6 ingredients_left_sec">
					<h4 class="side_heading">What’s Inside</h4>
					<h4>Nature's gift Fenugreek seed (Methi) - Minimizes glucose fluctuations and improves glycemic levels. </h4>
					<a href="<?php echo base_url();?>about-trigotab#whats-inside" class="btn mt-10">Know more</a>
				</div>
				<div class="col-md-6 ingredients_right_sec">
					<img src="<?php echo base_url();?>assets/img/fenugreek-seeds-with-green-leaves.png" class="" />
				</div>
			</div>
		</div>
	</section>

	<section class="info_sec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 info_sec_top">
					<h4 class="side_heading">What makes TRIGOTAB so unique?</h4>
					<p class="mb-0">Are you looking for a healthier and more vibrant life?</p>
					<p>Trigotab is your solution for the ultimate in body and mental well-being.<br>
					Beyond tradition, Trigotab is clinically validated for its anti-hyperglycaemic effects.<br>
                    It merges ancient herbal insights with contemporary science in a single tablet. <br>
                    Derived from fenugreek, it's a natural complement to standard diabetic care.</p>
					<h6>The Power to Control</h6>
				</div>
				<div class="col-sm-4 info_sec_inner">
					<div class="info_sec_content">
						<h5>Trigonelline</h5>
						<p class="normal_text">Improves insulin secretion <br>
                            Aids in beta regeneration<br>
                            Delays glucose absorption </p>
					</div>
					<div class="info_sec_content">
						<h5>Saponin</h5>
					<!--	<p class="bold_text">Insulin Secretion</p>-->
						<p class="normal_text">Improves insulin sensitivity and Glucose uptake in the body</p>
					</div>
				</div>
				<div class="col-sm-4 info_mid_sec">
					<img src="<?php echo base_url();?>assets/img/trigotab_packshot2.png" class="trigotab_packshot2" />
					<img src="<?php echo base_url();?>assets/img/hand_img.png" class="hand_img" />
				</div>
				<div class="col-sm-4 info_sec_inner">
					<div class="info_sec_content">
						<h5>Galactomannan</h5>
						<!-- <p class="bold_text">Delays Carbohydratre digestion & absorption</p> -->
						<p class="normal_text">Delays Carbohydrate digestion and absorption </p>
					</div>
					<div class="info_sec_content">
						<h5>Hydroxyisoleucine</h5>
						<!-- <p class="bold_text">Glucose Uptake</p> -->
						<p class="normal_text">Improves lipid profile and glucose-induced insulin release</p>
					</div>
				</div>
				<div class="col-sm-12 pt-10 text-center">
				    <small><strong>Disclaimer:</strong> The product is not intended to diagnose, treat, cure, or prevent any disease</small>
				</div>
			</div>
		</div>
	</section>


	<section class="who_should_use">
		<div class="who_should_use_left_Sec">
			<img src="<?php echo base_url();?>assets/img/family_img1.png" class="family_img" />
		</div>
		<div class="who_should_use_right_Sec">
			<h4 class="side_heading">Who should use</h4>
			<p class="mb-0">Trigotab is ideal for those seeking diabetic control. Its key ingredient, Trigonelline, boosts insulin secretion for better blood sugar management. </p>
            <p class="mb-0">It is suitable for both new and long-term diabetics. </p>
            <p class="mb-0">It provides a clinically proven, natural solution as an adjunct to your diabetes regimen. </p>
			<!-- <ul>
				<li>
					<h6 style="display:inline-flex;">&#8226<strong> To all Diabetics including patients with stubborn
							glucose control.</strong></h6>
				</li>
			</ul> -->
		</div>
	</section>

	<section class="how_to_use">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-sm-12 text-center">
					<h4 class="side_heading">How to use</h4>
				</div>
				<div class="col-sm-4 text-center">
					<img src="<?php echo base_url();?>assets/img/step1.png" class="usage" />
					<p><strong>Consultation </strong><br>Discuss with your healthcare provider for the right dosage.</p>
				</div>
				<div class="col-sm-4 text-center">
					<img src="<?php echo base_url();?>assets/img/step2.png" class="usage" />
					<p><strong>Administration </strong><br>Take Trigotab with water, ideally before meals. </p>
				</div>
				<div class="col-sm-4 text-center">
					<img src="<?php echo base_url();?>assets/img/step3.png" class="usage" />
					<p><strong>Consistency </strong><br>Use daily at a consistent time for best diabetic control.</p>
				</div>
			</div>
		</div>
	</section>

	<!--<section class="expert_info">
		<h6>For Experts Information</h6>
		<h3>An add-on Towards <br>stepping down.</h3>
		<div class="btn_cont">
			<a href="#" class="btn mr-md-3 mb-3 order-2 order-md-1">Scientific Information</a>
			<a href="#" class="btn mb-3">Case studies</a>
		</div>
	</section>-->

	<section class="index_pg_bot_sec d-none">
	    <div class="ctn"> <a id="buy-now">&nbsp;</a></div>
		<h4 class="side_heading">Order Now from</h4>
		<a href="https://www.azistastore.com/products/trigotab-fenugreek-seed-extract-powder-tablets-for-diabetes?_pos=1&_sid=b773ca3d7&_ss=r" target="_blank"><img src="<?php echo base_url();?>assets/img/azista_icon.svg"
				class="social_icon" /></a>
		<!--<h4 class="side_heading">Also available at</h4>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 text-center">
					<a href="#" target="_blank"><img src="<?php echo base_url();?>assets/img/netmeds.svg"
							class="external_social_icon" /></a>
				</div>
				<div class="col-sm-3 text-center">
					<a href="#" target="_blank"><img src="<?php echo base_url();?>assets/img/amazon.svg"
							class="external_social_icon" /></a>
				</div>
				<div class="col-sm-3 text-center">
					<a href="#" target="_blank"><img src="<?php echo base_url();?>assets/img/flipkart.svg"
							class="external_social_icon" /></a>
				</div>
				<div class="col-sm-3 text-center">
					<a href="#" target="_blank"><img src="<?php echo base_url();?>assets/img/tata.svg"
							class="external_social_icon" /></a>
				</div>
			</div>
		</div>-->
	</section>

	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>

	<!-- Copyright -->
	<?php $this->load->view('layout/copyright'); ?>

	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
</body>

</html>