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
    <?php $this->load->view('layout/navigation');  ?>

    <section class="body-section">
      <div class="container">
        <div class="row">
          <div class="col-sm col-md-12 col-lg-12 text-center">
            <br><br><br><br><br>
            <img src="<?php echo base_url();?>assets/images/success.gif" alt="logo">
            <h2 class="">Thanks for your interest.</h2>
            <p class="">Our Team will contact you shortly.</p>
            <a href="<?php echo base_url();?>">Go to Home Page</a>
            <br><br><br>
          </div>
        </div>
      </div>
    </section>

<!-- Copyright -->
<?php $this->load->view('layout/copyright');  ?>    
	
<!--  JavaScript -->
<?php $this->load->view('layout/js');  ?>
  </body>
</html>