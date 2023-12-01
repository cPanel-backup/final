<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('layout/meta');  ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<?php $this->load->view('layout/styles');  ?>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
      
    <div>
	   <div class="d-none d-sm-none d-md-block d-lg-block">			
			<a href="https://www.heterohealthcare.com/" target="_blank">
			<div class="shape">
				<div class="bg-shape">
					<img class="ribben-shape" src="<?php echo base_url();?>assets/images/shape1.svg" alt="ribben">
					<div class="bg-sub-shape">
						<img class="hhcl-logo" src="<?php echo base_url();?>assets/images/hhcl-logo.png" alt="logo">
						<p>Click here for Company website</p>
					</div>
					
				</div>		
			</div>
			</a>
		</div>
	   <div class="d-block d-sm-block d-md-none d-lg-none">
			<div class="reg_label">
				<label id="first-title"><a href="https://www.heterohealthcare.com/" target="_blank" style="color: #fff;">Click here for
						<br>Company website </a></label>
				<i class="btn_strip"> <img src="<?php echo base_url();?>assets/images/hhcl-logo.png" class="hhcl_logo" id="btn_strip"></i>
			</div>
		</div> 
	</div>
    <?php $this->load->view('layout/nav');  ?>
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="_blog_post1">
                        <div class="_blog_post_pic">
                            <a href="<?php echo base_url();?>blog/trigotab-against-uncontrolled-diabetes"><img src="<?php echo base_url();?>uploads/blog/benefits-of-trigotab-in-the-fight-against-stubborn-diabetes.jpg" alt="Benefits of Trigotab in the Fight Against Stubborn Diabetes"></a>
                        </div>
                        <div class="card-body">
                            <div class="aHyt">
                            <h5 class="card-title">
                                <a href="<?php echo base_url();?>blog/trigotab-against-uncontrolled-diabetes">Benefits of Trigotab in the Fight Against Stubborn Diabetes</a>
                            </h5>
                            <p class="card-text restrictTxt">In India, approximately 11.8% of people above the age of 34 years have diabetes. This is a very concerning percentage, and it is only increasing year after year.</p>
                            </div>
                            <div class="news_flx">
                                <span class="b_dte">26. Oct. 2021</span>
                                <a href="<?php echo base_url();?>blog/trigotab-against-uncontrolled-diabetes" class="csr_rdmre">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="_blog_post1">
                        <div class="_blog_post_pic">
                            <a href="<?php echo base_url();?>blog/natural-remedies-for-diabetes"><img src="<?php echo base_url();?>uploads/blog/combating-diabetes-with-natural-remedies.jpg" alt="Combating Diabetes with Natural Remedies"></a>
                        </div>
                        <div class="card-body">
                            <div class="aHyt">
                            <h5 class="card-title">
                                <a href="<?php echo base_url();?>blog/natural-remedies-for-diabetes">Combating Diabetes with Natural Remedies</a>
                            </h5>
                            <p class="card-text restrictTxt">Diabetes is more than just a lifestyle disease today.</p>
                            </div>
                            <div class="news_flx">
                                <span class="b_dte">26. Oct. 2021</span>
                                <a href="<?php echo base_url();?>blog/natural-remedies-for-diabetes" class="csr_rdmre">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="_blog_post1">
                        <div class="_blog_post_pic">
                            <a href="<?php echo base_url();?>blog/can-coronavirus-cause-diabetes"><img src="<?php echo base_url();?>uploads/blog/covid-induced-diabetes-and-how-trigotab-can-help.jpg" alt="Covid-induced Diabetes and How Trigotab Can Help"></a>
                        </div>
                        <div class="card-body">
                            <div class="aHyt">
                            <h5 class="card-title">
                                <a href="<?php echo base_url();?>blog/can-coronavirus-cause-diabetes">Covid-induced Diabetes and How Trigotab Can Help</a>
                            </h5>
                            <p class="card-text restrictTxt">COVID-19 has changed the way the world runs.</p>
                            </div>
                            <div class="news_flx">
                                <span class="b_dte">26. Oct. 2021</span>
                                <a href="<?php echo base_url();?>blog/can-coronavirus-cause-diabetes" class="csr_rdmre">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="_blog_post1">
                        <div class="_blog_post_pic">
                            <a href="<?php echo base_url();?>blog/fenugreek-for-diabetes"><img src="<?php echo base_url();?>uploads/blog/fenugreek-and-diabetes-reversal.jpg" alt="Fenugreek and Diabetes Reversal"></a>
                        </div>
                        <div class="card-body">
                            <div class="aHyt">
                            <h5 class="card-title">
                                <a href="<?php echo base_url();?>blog/fenugreek-for-diabetes">Fenugreek and Diabetes Reversal</a>
                            </h5>
                            <p class="card-text restrictTxt">Experts have notoriously named diabetes the silent killer.</p>
                            </div>
                            <div class="news_flx">
                                <span class="b_dte">26. Oct. 2021</span>
                                <a href="<?php echo base_url();?>blog/fenugreek-for-diabetes" class="csr_rdmre">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


 

    

   


   
<style>
window.scrollBy{ 
  top: 100;
  left: 0;
}
</style>
<section class="store-block text-center" id="">
  <p>Available At Near by Pharmacy Stores - ALL OVER INDIA</p>
</section>
<!-- Footer -->
<?php $this->load->view('layout/footer');  ?>

<!-- Copyright -->
<?php $this->load->view('layout/copyright');  ?>    
	
<!--  JavaScript -->
<?php $this->load->view('layout/js');  ?>
  </body>
</html>