<?php if(Favicon == 'True'){ ?>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico?Version=<?php echo Version; ?>" type="image/x-icon">
<?php } else { ?>
<link rel="shortcut icon" href="https://www.heterohealthcare.com/assets/img/favicon.ico?Version=<?php echo Version; ?>" type="image/x-icon">
<?php } ?>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.min.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css?Version=<?php echo Version; ?>" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom_style.css?Version=<?php echo Version; ?>" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/admin_custom.css?Version=<?php echo Version; ?>" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.sass?Version=<?php echo Version; ?>" />
    

    <?php if(Noindex == 'False'){ ?><?php if(GoogleAnalytics == 'True' && (!empty(GoogleAnalyticsKey))){ ?>
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GoogleAnalyticsKey; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo GoogleAnalyticsKey; ?>');
        </script>
    <?php } ?><?php } ?>
    <!-- Google Tag Manager --> 

    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': 
        
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], 
        
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 
        
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 
        
        })(window,document,'script','dataLayer','GTM-MCJJLM9K');
    </script> 

    <!-- End Google Tag Manager --> 