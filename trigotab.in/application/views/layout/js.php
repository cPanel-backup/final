<!-- <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<!-- SweetAlert2 --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js" ></script>
<script src="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.min.js"></script>

<script>
    
</script>

<!-- Form Validation -->
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script>
    
baguetteBox.run('.tz-gallery');

$(document).ready(function(){    
    $("#testimonial-slider").owlCarousel({
            items:2,
            itemsDesktop:[1000,2],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,2],
            pagination:true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:1000,
            slideBy: 2,
            singleItem:false,
            autoPlay:true
        });

    //Blog
    $("#blog-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        slideBy: 3,
        singleItem:false,
        autoPlay:true
    });


  
        
        // Setup form validation on the #register-form element
        $("#lead_form").validate({
        
            // Specify the validation rules
            rules: {
                seo_leads_name:{
    				required: true,
    				minlength: 3,
    				maxlength: 50,
    			},
    			seo_leads_emial: {
    				required: true,
    				email: true,
    			},
    			/*'CATEGORY[]': {
                    required: true,
                    //minlength: 1,
                    maxlength: 1
                },*/
                seo_leads_quantity: {
                    required: true,
                },
    			seo_leads_contact: {
    				required: true,
    				number: true,
    				minlength: 10,
    				maxlength: 15,
    				//custom_phone: "required SUBMIT",
    			},
    			seo_leads_location: {
    				required: true,
    			},
    			seo_leads_message: {
    				required: true,
    				minlength: 10,
    				maxlength: 500,
    			},
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
    			/*'CATEGORY[]': {
                    required: "You Must Check at least 1 Category ",
                    maxlength: "Check no more than {0} boxes"
                },*/
                seo_leads_quantity: {
                    required: "You Must Enter Quantity ",
                    min: 1,
                },
                seo_leads_contact: {
    				required :"Please Enter Contact Number",
    				number: "Please Enter Digits Only",
    				maxlength: "Please Enter Below 10 Digits"
    			},
                seo_leads_location: {
    				required :"Please Enter Your Location",
    			},
    			seo_leads_message: {
    				required :"Please Enter Message",
    				maxlength: "Please Enter No More Than 500 Characters"
    			},	
            },
            
            //Code Send to DB
            submitHandler: function(form) { // for demo
    			// alert('Hi');
                /*swal(
				'Success',
				'You clicked the <b style="color:green;">Success</b> button!',
				'success'
                )*/
            
    			//$('#submit').hide(this);
    			/*if($("#submit").val("Processing...")){
    			    $("#submit").prop('disabled', 'disabled');
    			}*/
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
    });
</script>