<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
	    ._appointment{
	        display:none;
	    }
	</style>
	
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50" class="bg_dark" >
	<!-- Page Loading -->
	<div id="loading"></div>
	<?php $this->load->view('layout/nav');  ?>
     
	<section class="_top bg_dark _writeReviewSection _contactForm">
		<div class="container-fluid">

		<div class="row">
			<div class="col-6 _writeToUs">
				<h2>Write to Us</h2>
				<form id="lead_form" method="post" enctype="multipart/form-data">
				    <input type="hidden" class="form-control" name="dw_code" value="docrakeshonco">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="">Full Name</label>
								<input type="text" class="form-control" name="dw_ce_name" placeholder="Enter Full Name">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="">Email Address</label>
								<input type="text" class="form-control" name="dw_ce_emial" placeholder="Enter Email Address">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="">Phone Number</label>
								<input type="text" class="form-control" name="dw_ce_contact" placeholder="Enter Phone Number" minlength ="10" maxlength="10">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="">Subject</label>
								<input type="text" class="form-control" name="dw_ce_subject" placeholder="Enter Subject">
							</div>
						</div>
						</div>
						
						<div class="form-group">
							<label for="">Message</label>
							<textarea class="form-control" name="dw_ce_message" id="" cols="30" rows="3" placeholder="Enter your Message" ></textarea>
						</div> 
						<div class="form-group mt-40 text-right">
						    <input type="submit" class="btn_submit" id="submit" name="submit" value="Submit">
						
						</div>
				</form>
			</div>
			<div class="col-6 c_us">
				<h2>Contact Us</h2>
				<div class="_addrss">
					<div class="c_row">
						<span class="c_icon">
							<i class="fa fa-phone"></i>
						</span>
						<div class="c_info">
								<a href="tel:9182389809">+91 9182389809</a> /  
									<a href="tel:8912867777">+91 8912867777</a> /
									<a href="">Extension : 2107</a> 
						</div>
					</div>
					<div class="c_row">
						<span class="c_icon">
							<i class="fa fa-envelope"></i>
						</span>
						<div class="c_info">
						    	<a href="mailto:drrakeshreddyboya@yahoo.com">drrakeshreddyboya@yahoo.com</a> / 
						    <a href="mailto:drrakeshreddy.b@apollohospitals.com">drrakeshreddy.b@apollohospitals.com</a> / 
						
							<a href="mailto:frontoffice@mgcancerhospital.com">frontoffice@mgcancerhospital.com</a>
						
						</div>
					</div>
					<div class="c_row">
						<span class="c_icon">
							<i class="fa fa-map-marker"></i>
						</span>
						<div class="c_info">
							<p>Apollo Hospitals, Health City,  Chinagadali,
                            Visakhapatnam-530040.
                            Andhra Pradesh, India. <span>/ Health City, Arilova, Chinagadila, Andhra Pradesh 530040</span></p> 
                            
                            
						</div>
					</div>
					
                    <div class="c_row ruppeflex">
						<span class="c_icon">
							<i class="fa fa-inr" aria-hidden="true"></i>
						</span>
						<div class="c_info">
							<p><b>Fee for consultation :</b> 750 rupees</p>
						</div>
					</div>
					
					 <div class="c_row ruppeflex">
						<span class="c_icon">
							<i class="fa fa-inr" aria-hidden="true"></i>
						</span>
						<div class="c_info">
							<p><b>Online consultation :</b></p>
							<a target="_blank" href="https://www.askapollo.com/" class="btn_theme online_cn">AskApollo </a>
							<a target="_blank" href="https://apollocancercentres.com/" class="btn_theme online_cn">Apollo Cancer Center </a>
						</div>
					</div>
					
					<div class="c_row">
						<span class="c_icon">
							<i class="fa fa-calendar"></i>
						</span>
						<div class="c_info">
							<ul>
								<li><p>Mon<span>(9:30 AM - ' 6:00 PM)</span></p></li>
								<li><p>Tue<span>(9:30 AM - ' 6:00 PM</span></p></li>
								<li><p>Wed<span>(9:30 AM - ' 6:00 PM</span></p></li>
								<li><p>Thu<span>(9:30 AM - ' 6:00 PM</span></p></li>
								<li><p>Fri<span>(9:30 AM - ' 6:00 PM</span></p></li>
								<li><p>Sat<span>(9:30 AM - ' 6:00 PM</span></p></li>
								<li><p>Sun<span>(9:30 AM - ' 6:00 PM</span></p></li>
							</ul>
						</div>
					</div>
					
				
					
					
				</div>
			</div>
		</div>
             
	</section>
	
	<section class="map_sec">
	     <div class="map">
	         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7599.291765518293!2d83.317085!3d17.761317!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395cb925a75125%3A0x184ecf821c67dda9!2sApollo%20Hospitals%20%26%20Cancer%20Unit%20Health%20City%20Visakhapatnam!5e0!3m2!1sen!2sus!4v1677322141813!5m2!1sen!2sus"  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       
    		    </div>
        </div>
	</section>
	
	
	  
	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>
 

	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    
    <!-- Form Validation -->
    <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
    <script>
        // Setup form validation on the #register-form element
        $("#lead_form").validate({
        
            // Specify the validation rules
            rules: {
                dw_ce_name:{
                    required: true,
                    minlength: 3,
                    maxlength: 50,
                },
                dw_ce_emial: {
                    required: true,
                    email: true,
                },
                /*'CATEGORY[]': {
                    required: true,
                    //minlength: 1,
                    maxlength: 1
                },*/
                
                dw_ce_contact: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10,
                    //custom_phone: "required SUBMIT",
                },
                dw_ce_subject: {
                    required: true,
                },
                dw_ce_message: {
                    required: true,
                    minlength: 10,
                    maxlength: 500,
                },
            },
            
            // Specify the validation error messages
            messages: {
                dw_ce_name: {
                    required :"Please Enter Name",
                    maxlength: "Please Enter Below 50 Characters"
                },
                dw_ce_emial: {
                    required :"Please Enter Email Address",
                    email :"Please Enter a Valid Email Address",
                },
                /*'CATEGORY[]': {
                    required: "You Must Check at least 1 Category ",
                    maxlength: "Check no more than {0} boxes"
                },*/ 
                dw_ce_contact: {
                    required :"Please Enter Contact Number",
                    number: "Please Enter Digits Only",
                    maxlength: "Please Enter Below 10 Digits"
                },
                dw_ce_subject: {
                    required :"Please Enter Subject",
                },
                dw_ce_message: {
                    required :"Please Enter Message",
                    maxlength: "Please Enter No More Than 500 Characters"
                },	
            },
            
            //Code Send to DB
            submitHandler: function(form) { // for demo
                //alert('Hi');
                /*swal(
                'Success',
                'You clicked the <b style="color:green;">Success</b> button!',
                'success'
                )*/
            
                //$('#submit').hide(this);
                if($("#submit").val("Processing...")){
                    $("#submit").prop('disabled', 'disabled');
                }
                var myForm = document.getElementById('lead_form');
                $.ajax({
                    type: 'post',
                    url: '<?php echo base_url();?>Home/leadformsubmission',
                    dataType: 'text', // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: new FormData(myForm),
                    success: function(data) {
                        window.location = data;
                    }
                });
                return false;
            }
        });
    </script>
</body>
</html>