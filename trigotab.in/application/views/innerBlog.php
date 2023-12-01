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
    <section class="innerBlog">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="h3">It is a long established fact that a reader will be distracted</h1>
                    <p>May 29, 2023</p>
                    <img src="<?php echo base_url();?>assets/img/blogImg.png" class="blogImg" alt="" />
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum.</p>
                    <p>you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                        Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                        first true generator on the Internet</p>
                    <h4 class="pt-md-2">The standard chunk</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum.</p>
                    <p>Coquettish darn pernicious foresaw therefore much amongst lingeringly shed much due
                        antagonistically alongside so then more and about turgid wrote so stunningly this that much
                        slew.</p>
                    <div class="row pt-2 pb-2">
                        <div class="col-sm-6">
                            <img src="<?php echo base_url();?>assets/img/blogImg1-1.png" class="blogImg1-1" alt="" />
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo base_url();?>assets/img/blogImg1-2.png" class="blogImg1-2" alt="" />
                        </div>
                    </div>
                    <p>Coquettish darn pernicious foresaw therefore much amongst lingeringly shed much due
                        antagonistically alongside so then more and about turgid wrote so stunningly this that much
                        slew.</p>
                    <div class="social_icons">
                        <h6>Share:</h6>
                        <a href="https://www.facebook.com/HeteroHealthcareOfficial/" target="_blank"
                            class="mr-3 socialLink"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/HeteroHealthCareLimited" target="_blank"
                            class="mr-3 socialLink"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/HeteroHCL" target="_blank" class="mr-3 socialLink"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://in.linkedin.com/company/hetero-healthcare-limited" target="_blank"
                            class="mr-3 socialLink"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 rightSec">
                    <div class="blog_cont">
                        <h5>More from Blog</h5>
                        <div class="card innerblog_card" style="width: 21rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/more_blog_img.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Combating Diabetes with Natural Remedies
                                </p>
                            </div>
                        </div>
                        <div class="card innerblog_card" style="width: 21rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/more_blog_img1.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Combating Diabetes with Natural Remedies
                                </p>
                            </div>
                        </div>
                        <div class="card innerblog_card" style="width: 21rem; margin-bottom:20px;">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/img/more_blog_img2.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title date">26. Oct. 2021</p>
                                <p class="card-text cardText">Combating Diabetes with Natural Remedies</p>
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