<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Page Loading -->
	<div id="loading"></div>
    <section class="d-flex flex-column justify-content-between vh-100">
    	<!-- Nav Menu  -->
    	<?php $this->load->view('layout/nav');  ?>
    
        <section class="success">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm col-md-12 col-lg-12 mb-4">
        				<div class="success-header text-center">
        					<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
        						<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none">
        						</circle>
        						<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
        					</svg>
        					<h1 class="mt-3 h3">Thanks for your interest.</h1>
        					<p class="mr-5 ml-5 text-center">Our Team will contact you shortly.</p>
        					<a href="<?php echo base_url();?>" class="btn h6 success_page_btn">Go to Home Page</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <footer>
            <div class="copyright_txt">
                <p>Copyright © <script>
                        document.write(new Date().getFullYear())
                </script> All Rights Reserved by <u><a href="https://www.heterohealthcare.com"
                        target="_blank">Hetero Healthcare Limited</a></u>.</p>
            </div>
        </footer>
    </section>
	<!--  JavaScript -->

	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
</body>

</html>