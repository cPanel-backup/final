<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/meta');  ?>
    <?php $this->load->view('layout/styles');  ?>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Page Loading -->
    <div id="loading"></div>

    <?php $this->load->view('layout/nav');  ?>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="h3">Blog</h1>
                    <div class="blog_cont">
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img1.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="<?php echo base_url();?>innerBlog" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img2.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img3.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img4.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img5.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img6.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img7.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img8.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="card blog_card" style="width: 22rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/blog_img9.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Benefits of Trigotab in the Fight Against Stubborn Diabetes</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php $this->load->view('layout/footer');  ?>

    <!-- Copyright -->
    <?php $this->load->view('layout/copyright'); ?>

    <!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
    <?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
    <?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
</body>

</html>