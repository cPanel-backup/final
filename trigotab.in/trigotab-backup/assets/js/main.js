$(document).ready(function(){

    $("#testimonial-slider").owlCarousel({

        items:3,

        itemsDesktop:[1000,3],

        itemsDesktopSmall:[980,2],

        itemsTablet:[768,2],

        itemsMobile:[650,1],

        pagination:true,

        navigation:false,

        slideSpeed:1000,

        autoPlay:true

    });

});



// --------------adding active class to menu------------

$(document).on("click","a[name='link']", function (e) {

    $(".navbar-nav").find(".active").removeClass("active");

     $(this).addClass("active");

  });  

  

//Count of a Textarea
$('textarea').keyup(function() {
    
  var characterCount = $(this).val().length,
      current = $('#current'),
      maximum = $('#maximum'),
      theCount = $('#the-count');
    
  current.text(characterCount);
 
  
  /*This isn't entirely necessary, just playin around*/
  if (characterCount < 70) {
    current.css('color', '#FFFFFF');
  }
  if (characterCount > 70 && characterCount < 90) {
    current.css('color', '#FFFFFF');
  }
  if (characterCount > 90 && characterCount < 100) {
    current.css('color', '#FFFFFF');
  }
  if (characterCount > 100 && characterCount < 120) {
    current.css('color', '#FFFFFF');
  }
  if (characterCount > 120 && characterCount < 139) {
    current.css('color', '#FFFFFF');
  }
  
  if (characterCount >= 140) {
    maximum.css('color', '#FFFFFF');
    current.css('color', '#FFFFFF');
    theCount.css('font-weight','bold');
  } else {
    maximum.css('color','#FFFFFF');
    theCount.css('font-weight','normal');
  }
  
      
});
//End Count of a Textarea

  // +++++++++++ bootstrap Scrollspy ++++++++  

  $("#nav ul li a[href^='#']").on('click', function(e) {
    // prevent default anchor click behavior
    e.preventDefault();  
    // store hash
    var hash = this.hash;  
    // animate
    $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){  
        // when done, add hash to url
        // (default click behaviour)
        window.location.hash = hash;
      });  
    });

    
    // ----------------  Toggle the menu on click of nav-link ----------
$('.navbar a.nav-link').on('click', function(){
  $('.navbar-collapse').removeClass('show')
  });
  

// badge toggle mobile 
$(document).ready(function(){
  $(".btn_strip").click(function(){
    $(".reg_label").toggleClass("ryt0");
    // $('.btn_strip').toggleClass("fa-check-circle fa-times-circle");
  });
});