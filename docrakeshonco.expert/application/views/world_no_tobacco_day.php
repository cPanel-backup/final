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
		<h1>World no Tobacco day </h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog</li>
		</ol>
	</nav>

	<!--specialty -->
	<section class="_top cmnsection">
		<div class="container">
			<div class="row mb-30">
				<div class="col-lg-12 col-md-12 col-sm-12 blog_text_cont">
			<!--	<div class="top_section">
						<div class="date">
							<p>07-04-2023</p>
						</div>
						<div class="share_on">
							<div class="share_flex">
								<p>Share On: </p>
							</div>
							<div class="share_nav">
								<ul>
									<li class="list-inline-item"><a target="_blank"
											href="https://www.facebook.com/drrakeshreddyboya "
											title="How to layer your skin care products the right way this summer?"
											class=""><img
												src="https://heterohealthcare.com/moiste/assets/img/facebook.svg"
												alt="How to layer your skin care products the right way this summer?"></a>
									</li>
									<li class="list-inline-item"><a target="_blank"
											href="https://twitter.com/rakesh_boya"
											class=""
											title="How to layer your skin care products the right way this summer?"><img
												src="https://heterohealthcare.com/moiste/assets/img/twitter.svg"
												alt="How to layer your skin care products the right way this summer?"></a>
									</li>
									<li class="list-inline-item"><a target="_blank"
											href="https://www.linkedin.com/in/rakesh-reddy-boya-629a0b162/"
											class=""
											title="How to layer your skin care products the right way this summer?"><img
												src="https://heterohealthcare.com/moiste/assets/img/linkedin.svg"
												alt="How to layer your skin care products the right way this summer?"></a>
									</li>
								</ul>
							</div>
						</div>
					</div> -->
					<h2>Doctor's Opinion on No-Tobacco Day</h2>
				    <img src="<?php echo base_url();?>uploads/blog/Stem cell design 05.png"/> 
					<p>Every year, May 31st is observed as <strong>‘WORLD NO TOBACCO DAY’</strong>. It is an initiative by
					World Health Organisation (WHO) since 1987 to raise awareness among all stake holders 
					about the global health crisis linked to tobacco consumption.</p>
					
					
					<p>Tobacco can affect multiple organs of body and it is an important causative
					factor of cancer. Infact, <strong>cessation of Tobacco is the single most important preventive aspect of cancer</strong>.
					Both oral and inhaled form of tobacco consumption are strongly linked to causing cancer. Worldwide, approximately
					25% of cancers are attributable to tobacco. In India, it is even higher  with almost 35-40% of cancers being linked 
					to tobacco use. Tobacco abuse is estimated to cause 5 lakh deaths annually in our country. </p>

					<p>Chewable  form of tobacco is related to cancers of oral cavity and upper  digestive tract, inhaled tobacco is related 
					to cancer of lung, esaphagus, stomach, pancreas, urinary bladder etc. As these patients usually have poor health due to 
					other tobacco related comorbid condition like COPD, heart diseases ect., it is very difficult for them to tolerate  most 
					cancer treatments leading to poor survival.</p>

                    <p>Tobacco addiction can be addressed by both behavioural modification therapy as well as, medications like Nicotine patches, 
                    Bupropion etc. Stopping of tobacco decreases rise of subsequent cancer by 50%.  A concerted effort by Government, public as
                    well as tobacco companies are needed to address this menace. </p>

                    <p><strong>Together, lets kick the butt!</strong></p>
                    <img src="<?php echo base_url();?>assets/img/Dr.Rakesh-Redyy-new-letter-design.jpg"/>
				</div>

	</section>



	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>


	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
</body>

</html>