<!-- Google Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Disable Submit Button -->
<!--<script>
document.getElementById("submit").disabled = true;
function enableBtn(){
    document.getElementById("submit").disabled = false;
}
</script>-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js" type="text/JavaScript"></script>


<!-- Form Validation -->
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script>
$(document).ready(function() {

	$('input').on('blur', function() {
        if ($("#lead_form").valid()) {
            $('#submit').prop('disabled', false);  
        } else {
            $('#submit').prop('disabled', 'disabled');
        }
    });

    // Setup form validation on the #register-form element
    $("#lead_form").validate({
    
        // Specify the validation rules
        rules: {
            seo_leads_name:{
				required: true,
				maxlength: 50,
			},
			seo_leads_emial: {
				required: true,
				email: true,
			},
			seo_leads_contact: {
				required: true,
				number: true,
				maxlength: 10,
				minlength: 10,
			},
			seo_leads_quantity: {
				required: true,
				number: true,
			},
			seo_leads_location: {
				required: true,
			},
			seo_leads_message: {
				required: true,
				maxlength: 500,
			}
        },
        
        // Specify the validation error messages
        messages: {
            seo_leads_name: {
				required :"Please Enter Name",
				maxlength: "Please Enter Below 50 Characters"
			},
            seo_leads_emial: {
				required :"Please Enter Email Address",
				email :"Please Enter a Valid Email Address",
			},
            seo_leads_contact: {
				required :"Please Enter Phone Number",
				number: "Please Enter Digits Only",
				maxlength: "Please Enter Below 10 Digits"
			},
			seo_leads_location: {
				required :"Please Enter Location",
			},
            seo_leads_quantity: {
				required :"Please Enter Quantity",
				number: "Please Enter Numbers ",
			},
            seo_leads_message: {
				required :"Please Enter Message",
				maxlength: "Please Enter No More Than 500 Characters"
			},					
        }
        
    });

});
</script>






