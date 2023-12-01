<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('themes/1/layout/meta');  ?>
	<?php $this->load->view('themes/1/layout/styles');  ?>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50" class="bg_dark" >
	<!-- Page Loading -->
	<div id="loading"></div>

    <!-- Nav Menu  -->
    
        <div class="container">
        <!-- navbar-me -->
		<?php $this->load->view('themes/1/layout/nav');  ?>
		</div> 
     
	<section class="_top bg_dark _writeReviewSection">
		<div class="container">
			<h2>Write a Review</h2>
			<form id="testimonial_form">
			    <input type="hidden" class="form-control" name="dw_code" value="<?php echo $websiteinfo[0]['dw_code']; ?>">
				<div class="row">
					<div class="col-3">
						<div class="form-group">
							<label for="">Full Name</label>
							<input type="text" class="form-control" name="dw_tes_name" placeholder="Enter Full Name">
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label for="">Email Address</label>
							<input type="text" class="form-control" name="dw_tes_email" placeholder="Enter Email Address">
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="text" class="form-control" name="dw_tes_phone" placeholder="Enter Phone Number">
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label for="">Location</label>
							<input type="text" class="form-control" name="dw_tes_location" placeholder="Enter Location">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="">Comment</label>
					<textarea class="form-control" name="dw_tes_comment" id="" cols="30" rows="3" placeholder="Enter your feedback" ></textarea>
				</div> 
				<div class="form-group mt-40">
					<input type="submit" class="btn_submit" id="submit" name="submit" value="Submit">
					<button class="btn_submit">Submit</button>
				</div>
			</form>
		</div>
	</section>
	 
    <section class="pt-5 pb-5 testimonials_section" > 
		<div class="container">
			<h2 class="_hdng">Hear it from our clients</h2>
			<div class="testimos">
			    
			    <?php if(empty($testimonials)){ } else {?>
			        <?php foreach($testimonials as $testimonials_list){ ?>
        				<div class="testimonial"> 
        					<p class="description"><?php echo $testimonials_list['dw_tes_comment'];?></p> 
        					<div class="pic_name">
        						<img src="assets/1/img/img-1.jpg" alt="">
        						<div>
        							<p><?php echo $testimonials_list['dw_tes_name'];?></p>
        							<span><?php echo $testimonials_list['dw_tes_location'];?></span>
        						</div>
        					</div> 
        				</div>
    				<?php } ?>
				<?php } ?>
			</div>
		</div><!-- container end  -->
    </section>
    
	 

	<!-- Footer -->
	<?php $this->load->view('themes/1/layout/footer');  ?>
 

	<!--  JavaScript -->
    <?php $this->load->view('themes/1/layout/js');  ?>
    <!-- Form Validation -->
    <script src="<?php echo base_url();?>assets/1/js/jquery.validate.js"></script>
    <script>
    // Setup form validation on the #testimonial-form element
      $("#testimonial_form").validate({
    
        // Specify the validation rules
        rules: {
            dw_tes_name:{
                required: true,
                minlength: 3,
                maxlength: 50,
            },
            dw_tes_email: {
                required: true,
                email: true,
            }, 
            
            dw_tes_phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 15,
                //custom_phone: "required SUBMIT",
            }, 
            dw_tes_location: {
                required: true,
            },
            dw_tes_comment: {
                required: true,
                minlength: 10,
                maxlength: 500,
            },
        },
        
        // Specify the validation error messages
        messages: {
            dw_tes_name: {
                required :"Please Enter Name",
                maxlength: "Please Enter Below 50 Characters"
            },
            dw_tes_email: {
                required :"Please Enter Email Address",
                email :"Please Enter a Valid Email Address",
            }, 
            dw_tes_phone: {
                required :"Please Enter Contact Number",
                number: "Please Enter Digits Only",
                maxlength: "Please Enter Below 10 Digits"
            }, 
            dw_tes_location: {
                required :"Please Enter Location",
            },
            dw_tes_comment: {
                required :"Please Enter Comments",
                maxlength: "Comments Not More Than 500 Characters"
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
            var myForm = document.getElementById('testimonial_form');
            $.ajax({
                type: 'post',
                url: '<?php echo base_url();?>Home/testimonialsubmission',
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