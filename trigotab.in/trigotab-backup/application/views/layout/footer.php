<section class="footer-block" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="f_hdng text-center">
              <h2>Contact Us</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 br_wyt">
            <div class="_addrs">
            <h3>Corporate Office</h3>
            <p>Hetero Healthcare Limited</p>
            <p>Sy.No 80-84,  Melange Towers,</p>              
            <p>4th Floor, C Wing, Patrika Nagar,</p>              
            <p>Madhapur, Hyderabad, Telangana</p>
             <p>500081, India.</p>
            </div>

            <div class="_addrs">
              <h3>Marketing Office</h3>
              <p>Hetero Healthcare Limited</p>
              <p>A-202/B201,DIPTI CLASSIC,</p>
              <p>32/34, W.T.Suren Road,</p>
              <p>Andheri(East) Mumbai</p>
              <p>400 093, India.</p>
              </div>

              <div class="social_icons">
                <ul>
                  <li><a target="_blank" href="https://www.facebook.com/HeteroHealthcareOfficial/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a target="_blank" href="https://twitter.com/HeteroHCL"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/HeteroHealthCareLimited"><i class="fa fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  <li><a target="_blank" href="https://in.linkedin.com/company/hetero-healthcare-limited"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>

          </div>
          <div class="col-sm-6 col-md-6">

            <div class="_form">
              <h4>FILL THE FORM  FOR ANY KIND OF ORDER / TRADE ENQUIRY</h4>
              <form class="needs-validation contact-form" id="lead_form" name="" method="post" action="<?php echo base_url('Home/product_enquiry');?>" novalidate>
              <?php
                  $success_msg= $this->session->flashdata('success_msg');
                  $error_msg= $this->session->flashdata('error_msg');
                  
                  if($success_msg){
                  ?>
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $success_msg; ?>
                  </div>
                  <?php
                  }
                  if($error_msg){
                  ?>
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $error_msg; ?>
                  </div>
                  <?php
                  }
                ?>
                <input type="hidden" class="form-control"  value="14" name="domain_id" id="domain_id" />
                <input type="hidden" class="form-control" value="Trigotab" name="domain_name" id="domain_name" />
                <input type="hidden" class="form-control" value="Contact Enquiry" name="seo_formtype" id="seo_formtype" />
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Enter Name" name="seo_leads_name" autocomplete="off">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Enter Phone Number" name="seo_leads_contact" autocomplete="off">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Enter email" name="seo_leads_emial" autocomplete="off">
                  </div>
                     <div class="col">
                    <input type="text" class="form-control" placeholder="Location" name="seo_leads_location" autocomplete="off">
                  </div>
                 
                </div>
                <div class="row mt-4">
                     <div class="col">
                    <input type="text" class="form-control" placeholder="Enter Quantity" name="seo_leads_quantity" autocomplete="off">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col">
                    <textarea class="form-control" rows="5" placeholder="Enter Message" name="seo_leads_message" autocomplete="off"></textarea>
                    <div id="the-count" class="the-count pull-right">
                      <span id="current">0</span>
                      <span id="maximum">/ 500</span>
                    </div>
                  </div>
                </div>
               

              <div class="row">
                <div class="col-lg-12">
                  <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12" style="padding-left:30px;">
                  <input type="submit" class="_form_btn btn btn-block" value="Send Message" id="submit">
                </div>
              </div>
              


              </form>
            </div>
        
          </div>
        </div>
        </div>
      </section>