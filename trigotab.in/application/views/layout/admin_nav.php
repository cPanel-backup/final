<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->load->view('layout/styles');  ?>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url();?>dashboard"><img src="<?php echo base_url();?>assets/img/trigotab-logo.svg"class="w-50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto scrollpy" >
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>dashboard">Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>contact-leads">Contact Leads </a>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group lgbutton pt-3">
                        <span>Welcome</span>
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('displayname'); ?></button>
                        <div class="dropdown-menu">
                        <a href="<?php echo base_url();?>login">Logout </a>
                        </div>
                      </div>
                    </li>
                </ul>
            
            </div>
        </nav>
    </div>
    <!-- <a href="<?php echo base_url();?>dashboard">Dashboard</a>
    <a href="<?php echo base_url();?>leads">Leads</a>
    <a href="<?php echo base_url();?>logout">Logout</a>
    <h4 style="text-transform: capitalize;">Welcome <?php echo $this->session->userdata('username'); ?></h4> -->


<script>
    function logoutAndRedirect() {
        window.location.href="<?php echo base_url();?>login";
    }
</script>
</body>

</html>