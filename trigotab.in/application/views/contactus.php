<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/meta');  ?>
    <?php $this->load->view('layout/styles');  ?>
    <style>
        .text-capitalize {
            text-transform: unset !important;
        }
    </style>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Page Loading -->
    <div id="loading"></div>

    <?php $this->load->view('layout/nav');  ?>
    <section class="contactUs">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-sm-12 col-md-5 left_sec">
                    <div class="left_sec_bg_img">
                        <img src="<?php echo base_url();?>assets/img/Mask_group.png" class="Mask_group" />
                    </div>
                    <div class="left_sec_cont">
                        <h1 class="h4">Contact Us</h1>
                        <p>Get in Touch with us or fill the form to know more about product.</p>
                        <div class="contact_icon">
                            <a href="tel:1800 103 4696">
                                <img src="<?php echo base_url();?>assets/img/dail.svg" />
                                <p>1800 103 4696</p>
                            </a>
                        </div>
                        <div class="contact_icon">
                            <a href="mailto:lead@heterohealthcare.com">
                                <img src="<?php echo base_url();?>assets/img/mail.svg" />
                                <p>sales@heterohealthcare.com</p>
                            </a>
                        </div>
                        <div class="contact_icon">
                            <a href="#">
                                <img src="<?php echo base_url();?>assets/img/location.svg" />
                                <p>Sy.no: 80-84, Melange Towers, Patrika Nagar, Madhapur, Hyderabad, Telangana - 500 081.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 right_sec">
                    <h5>Write to Us</h5>
                    <h6>Get in Touch with us or fill the form to know more about product.</h6>
                    <form id="contact_us" method="post" name="consult_us" >
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <label for="name" form-control>Full name</label>
                                <input type="text" autocomplete="off" name="tritotab_leads_name"
                                    class="form-control custom_input" placeholder="Full Name" />
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email">Email address</label>
                                <input id="email" autocomplete="off" name="tritotab_leads_email" type="email"
                                    class="form-control custom_input" placeholder="Email" />
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="number">Contact number</label>
                                <input  autocomplete="off" name="tritotab_leads_contact" validator='mobile' minlength="10" maxlength="10" type="text"
                                    class="form-control custom_input" placeholder="Phone Number" />
                            </div>
                            <div class="col-sm-12 mb-3 d-flex flex-column">
                                <label for="message">Message</label>
                                <textarea col="50" rows="2" name="tritotab_leads_comment" class="custom_input"></textarea>
                            </div>
                            <div class="form-group col-md-12 text-md-right">
                                <?php if(Recaptcha == 'True'){ ?>
    								<?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
    								<input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
    								<?php } else { echo "Check Google Recaptcha Settings"; } ?>
								<?php } ?>
                                <input type="submit" name="Submit" id="submit" class="btn" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php $this->load->view('layout/footer');  ?>

    <!-- Copyright -->
    <?php $this->load->view('layout/copyright'); ?>

    <!--  JavaScript -->
    <?php if(Recaptcha == 'True'){ ?>
    <?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $this->config->item('google_key'); ?>">
    </script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo $this->config->item('google_key'); ?>', {
                    action: 'contact'
                }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    <?php } } ?>
    
    <?php $this->load->view('layout/js');  ?>

    <script>
        
    
        $(document).ready(function () {
            
            // Phone Only Numbers
        	$("input[validator='mobile']").on("input", function(e) {
        		var self = $(this);
        		self.val(self.val().replace(/[^0-9]/g, ''));
        		if((e.keyCode >= 48 && e.keyCode <=57) || (e.keyCode >= 96 && e.keyCode <=105)) { 
        			// entered key is a number
        		}else{
        			e.preventDefault();
        		}
        	});
            
            
            // Setup form validation on the #register-form element
            $("#contact_us").validate({
                // Specify the validation rules
                rules: {
                    tritotab_leads_name: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                    tritotab_leads_email: {
                        required: true,
                        email: true
                    },
                    tritotab_leads_contact: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 15,
                    },
                    tritotab_leads_comment: {
                        required: true,
                    }
                },

                // Specify the validation error messages
                messages: {
                    tritotab_leads_name: {
                        required: "Please enter your name",
                        maxlength: "Please Enter Below 50 Characters"
                    },
                    tritotab_leads_email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    tritotab_leads_contact: {
                        required: "Please enter your contact number",
                        number: "Please Enter Digits Only",
                        maxlength: "Please enter below 10 digits"
                    },
                    tritotab_leads_comment: {
                        required: "Please enter message",
                    }
                },

                //Code Send to DB
				submitHandler: function (form) { // for demo
				// 	alert('Hi');
					if($("#submit").val("Processing...")){
        				$("#submit").prop('disabled', 'disabled');
        			}
					var myForm = document.getElementById('contact_us');
					$.ajax({
						type: 'post',
						url: '<?php echo base_url();?>Home/leadformsubmission',
						dataType: 'text', // what to expect back from the PHP script, if anything
						cache: false,
						contentType: false,
						processData: false,
						data: new FormData(myForm),
						success: function (data) {
							window.location = data;
						}
					});
					return false;
				}
            });
        });
    </script>
</body>

</html>