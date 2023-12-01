<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js?Version=<?php echo Version; ?>"></script>

<!-- SweetAlert2 --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js" ></script>
<script src="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.min.js?Version=<?php echo Version; ?>"></script>

<script type="text/javascript">
       // $(document).ready(function () {
          //  $("ul.navbar-nav a.nav-link").click(function () {
              //  location.reload(true);
              // alert('Reloading Page');
           // });
       // });
    </script>

<script>
    
baguetteBox.run('.tz-gallery');

$(document).ready(function(){    
    
    
      
    $("#news_slider").owlCarousel({
            items:2,
            itemsDesktop:[1000,2],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,2],
            pagination: true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:1000,
            slideBy: 2,
            singleItem:false,
           	autoHeight: false,
            autoPlay:true
        });
    
    $("#testimonial-slider").owlCarousel({
            items:2,
            itemsDesktop:[1000,2],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,2],
            pagination: true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:1000,
            slideBy: 2,
            singleItem:false,
            autoPlay:true
        });

    //Blog
    $("#blog-slider").owlCarousel({
        items: 4,
        itemsDesktop:[1000,4],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        slideBy: 3,
        singleItem:false,
        autoPlay:true
    });
 
  // Setup form validation on the #register-form element
  $("#appointment_form").validate({
    
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
        seo_leads_contact: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 15,
            //custom_phone: "required SUBMIT",
        },
        seo_leads_date:{
          required: true,
        },
        seo_leads_time:{
          required: true,
        },
        seo_leads_subject: {
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
        seo_leads_contact: {
            required :"Please Enter Contact Number",
            number: "Please Enter Digits Only",
            maxlength: "Please Enter Below 10 Digits"
        },
        seo_leads_date:{
          required: "Please Select Date",
        },
        seo_leads_time:{
          required: "Please Select Time",
        },
        seo_leads_subject: {
            required :"Please Enter Subject",
        },
        seo_leads_message: {
            required :"Please Enter Message",
            maxlength: "Please Enter No More Than 500 Characters"
        },	
    },
    
    //Code Send to DB
    submitHandler: function(form) {  
        var myForm = document.getElementById('appointment_form');
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



    


      
    
    // carousel controls dynamic 
    $('.carousel-inner').each(function() { 
        if ($(this).children('div').length === 1) $(this).siblings(' .carousel-control-prev, .carousel-control-next').hide();
     });




     $(".checkedList li b").each(function(index){
        $(this).css({
            'transition-delay' : index*(1+index) + 's'
        });
    });
});



//++++++++++++++ Scroll Back To Top Button ++++++++++++++//
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }


      $(".mve_top").slideDown(1000);
 if($(this).scrollTop()>50) {
     
      $(".sticky-top" ).addClass("mve_top");
    } else {
      $(".sticky-top" ).removeClass("mve_top");
  }   
   

};
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//++++++++++++++ End ++++++++++++++// 

//  Page Animations
$(function() {

var $window           = $(window),
    win_height_padded = $window.height() * 1.1,
    isTouch           = Modernizr.touch;

if (isTouch) { $('.revealOnScroll').addClass('animated'); }

$window.on('scroll', revealOnScroll);

function revealOnScroll() {
  var scrolled = $window.scrollTop(),
      win_height_padded = $window.height() * 1.1;

  // Showed...
  $(".revealOnScroll:not(.animated)").each(function () {
    var $this     = $(this),
        offsetTop = $this.offset().top;

    if (scrolled + win_height_padded > offsetTop) {
      if ($this.data('timeout')) {
        window.setTimeout(function(){
          $this.addClass('animated ' + $this.data('animation'));
        }, parseInt($this.data('timeout'),10));
      } else {
        $this.addClass('animated ' + $this.data('animation'));
      }
    }
  });
  // Hidden...
 $(".revealOnScroll.animated").each(function (index) {
    var $this     = $(this),
        offsetTop = $this.offset().top;
    if (scrolled + win_height_padded < offsetTop) {
      $(this).removeClass('animated animate__fadeInUp animate__fadeInDown animate__flipInY animate__fadeInLeft animate__fadeInRight animate__lightSpeedIn'),
      $(this).removeClass('animated animate__flipInY animate__lightSpeedIn')
    }
  });
}

revealOnScroll();
});
 



//************** Number counter in home page.. on scroll to div ************
if($('#counter-container').length >0 ){
  $(window).scroll(startCounter);
}
function startCounter() {
  let scrollY = (window.pageYOffset || document.documentElement.scrollTop) + window.innerHeight;
  let divPos = document.querySelector('#counter-container').offsetTop;

  if (scrollY > divPos) {
    $(window).off("scroll", startCounter);

    $('.counter-value').each(function() {
      var $this = $(this);
      jQuery({
        Counter: 0
      }).animate({
        Counter: $this.text().replace(/,/g, '')
      }, {
        duration: 4000,
        easing: 'swing',
        step: function() {
          $this.text(commaSeparateNumber(Math.floor(this.Counter)));
        },
        complete: function() {
          $this.text(commaSeparateNumber(this.Counter));
          //alert('finished');
        }
      });
    });

    function commaSeparateNumber(num) {
      return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
  }
}




</script>