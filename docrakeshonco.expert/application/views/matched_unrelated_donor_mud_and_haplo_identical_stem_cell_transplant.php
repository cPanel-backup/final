<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50"  >
	<!-- Page Loading -->
	<div id="loading"></div>
	<?php $this->load->view('layout/nav');  ?>
    <!-- Nav Menu  -->
   
	<nav aria-label="breadcrumb" class="_breadcrumb">
		<h1>Matched unrelated donor (MUD) and Haplo-identical stem cell transplant – what, when and how</h1>
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
				<h2>Matched unrelated donor (MUD) and Haplo-identical stem cell transplant – what, when and how?</h2>  
		    	<img src="<?php echo base_url();?>uploads/blog/Stem cell design 03.jpg"/> 
				<h4>What is HLA matching? What is its implication in stem cell transplantation?</h4>
				<p>The Human leucocyte antigen genes code for proteins which are present on surface of most of the cells in our body. They form the basis of how our body’s immune system recognizes ‘self’ from ‘non-self’. Matching for these genes is a pre-requisite before going ahead with a stem cell transplant to prevent ‘rejection’ of the stem cells from a donor. This is done through a blood test where HLA genes of a potential donor is matched against the genes of patient. As we get 50% of our genes from each of our parents, there is a 25% chance of a person being a complete match with a sibling – the more the number of siblings, the higher the chance of finding a complete HLA match within the family (Fig. 1). Such a transplant is called Matched Sibling Donor (MSD) transplant. Only 30% of our patients manage to find a fully matched sibling donor. For the rest of our patients, we need to resort to matched unrelated donor (MUD) or Haplo-identical stem cell transplants.</p>
			   
			    <div class="cmnimage">
			        <img src="<?php echo base_url();?>/assets/img/HLA.png" class="HLA">
			        <p>
			        Figure 1: Schema showing inheritance of HLA genes from the parents and matching among siblings. <br>(This hypothetical patient has one matched sibling donor and two haplo-identical donors)</p>
			        
			    </div>
			    
			    <h4>What is the difficulty with MUD and Haplo-identical transplant?</h4>
			    <p>The degree of HLA matching ensures that the stem cells that are introduced into the patient are not ‘rejected’ by the immune system of the patient. The vice-versa is also true i.e., the risk of graft versus host disease (GVHD – donor cells acting against host tissues) is also dependent on the degree of HLA match. So, a fully matched sibling donor transplant requires the least immune suppression to prevent graft rejection and GVHD. In contrast, for a Haplo-identical transplant the chances of both of these complications is very high and hence potent immunosuppression is needed. This in turn places the patient at high risk of opportunistic infections.</p>
			   <h4>When are MUD and Haplo-identical transplants performed?</h4>
			   <p>As already mentioned, only 30% of our patients have a matched sibling donor available. For the rest 70% requiring stem cell transplantations, MUD and Haplo-transplants are the way forward. A donor search is initiated for a patient who doesn’t have a sibling match. There are stem cell registries available for this. If a match is found, the donor is informed and his stem cells are collected and the shipped to the site of transplant. Sometimes, despite search a matched transplant donor is not found. The choice then is to find a donor with next best match in the family. Out of the HLA loci that are usually checked for (HLA- A, B, C, DR, DQ), the haplo-identical donor with the maximum match is selected as a potential donor. The pros and cons of a haplo-identical transplant is illustrated in figure 2.</p>
			
			    <div class="cmnimage">
			        <img src="<?php echo base_url();?>/assets/img/Haplo.png" class="HLA">
			       
			        
			    </div>
			    
			    <h4>How are haplo-identical transplants different from MSD-transplants?</h4>
			    
			    <ol>
			        <li>They are technically more demanding due to usage of high immunosuppression and handling side-effects because of it.</li>
			        <li>The degree of supportive care, duration of hospital stay, follow-up is higher. This means more financial burden too.</li>
			        <li>The usage of such transplant is increasing as more families are becoming nuclear and chance of a matched sibling donor is decreasing further.</li>
			    </ol>
			
			</div>
        
    </section>
    
	 

	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>
 

	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
</body>
</html>