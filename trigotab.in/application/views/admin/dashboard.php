<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
	    body{
	        background:#fff!important;
	    }
	    
	</style>
</head>
<body>
    <?php $this->load->view('layout/admin_nav');  ?>
    <div class="breadcrumb_div"> 
       <div class="container">
            <nav aria-label="breadcrumb" class="_breadcrumb">
                <h2></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://www.azistabhutanhealthcare.com/dashboard">Dashboard</a></li>
                    <!--<li class="breadcrumb-item active" aria-current="page">Home</li>-->
                </ol>
            </nav> 
        </div>
    </div>
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Welcome to dashboard</h1>
                </div>
            </div>
        </div>
    </section>
    <!--  Copyright -->
    <?php $this->load->view('layout/admin_copyright');  ?>
    <!-- End Copyright -->
	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <!--  End JavaScript -->
</body>
</html>