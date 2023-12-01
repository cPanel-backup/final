<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta'); ?>
	<?php $this->load->view('layout/styles');  ?>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <h1 class="d-none">Best Oncologist & Radiotherapist in Visakhapatnam</h1>
    <h2 class="d-none">Best Hemat Oncologist in Andhra Pradesh</h2>
	<!-- Page Loading -->
	<div id="loading"></div>
	<?php $this->load->view('layout/nav');  ?>
    <!-- Nav Menu  --> 
   
	
	<!-- Slider Start -->
	<div id="demo" class="carousel slide homeCarousel" data-ride="carousel">
		<div class="carousel-inner">
		    	<div class="carousel-item active">
				    <img src="<?php echo base_url();?>uploads/sliders/slider2.jpg" alt="slider-1" class="webbanner">
					<img src="<?php echo base_url();?>uploads/sliders/slider-1_m.png" alt="slider-1" class="mobbanner">
				<div class="carousel-caption _mobile_caption">
				    <div class="animate_div animate__animated animate__zoomIn">
				        	<h5 class="color">Get ready for your <br>Best Health.</h5>
                         <a href="<?php echo base_url();?>contact-us" class="btn btn_theme d-none">Get in Touch</a>
				    </div>
				
				</div>   
			</div>
			<div class="carousel-item">
				    <img src="<?php echo base_url();?>assets/img/slide_1.jpg" alt="slider-1" class="webbanner">
					<img src="<?php echo base_url();?>assets/img/slide_1_m.jpg" alt="slider-1" class="mobbanner">
				<div class="carousel-caption">
				    <div class="animate_div animate__animated animate__zoomIn">
				        	<h5>Chemotherapy</h5>
				        	<p>Chemotherapy is a cancer treatment where medicine is used to kill cancer cells. There are many different types of chemotherapy medicine, but they all work in a similar way. They stop cancer cells reproducing, which prevents them from growing and spreading in the body</p>
                       
                         <a href="<?php echo base_url();?>contact-us" class="btn btn_theme d-none">Get in Touch</a>
				    </div>
				
				</div>   
			</div>
			<div class="carousel-item">
				    <img src="<?php echo base_url();?>assets/img/slide_2.jpg" alt="slider-1" class="webbanner">
					<img src="<?php echo base_url();?>assets/img/slide_2_m.jpg" alt="slider-1" class="mobbanner">
				<div class="carousel-caption">
				    <div class="animate_div animate__animated animate__zoomIn">
				        	<h5>Bone marrow transplantation</h5>
				        	<p>A bone marrow transplant is a procedure that infuses healthy blood-forming stem cells into your body to replace bone marrow that's not producing enough healthy blood cells. A bone marrow transplant is also called a stem cell transplant</p>
                       
                         <a href="<?php echo base_url();?>contact-us" class="btn btn_theme d-none">Get in Touch</a>
				    </div>
				
				</div>   
			</div>
			<div class="carousel-item">
				    <img src="<?php echo base_url();?>assets/img/slide_3.jpg" alt="slider-1" class="webbanner">
					<img src="<?php echo base_url();?>assets/img/slide_3_m.jpg" alt="slider-1" class="mobbanner">
				<div class="carousel-caption">
				    <div class="animate_div animate__animated animate__zoomIn">
				        	<h5>Targeted therapy </h5>
				        	<p>Targeted therapy is a <b>type of cancer treatment that targets proteins that control how cancer cells grow, divide, and spread.</b> It is the foundation of precision medicine. As researchers learn more about the DNA changes and proteins that drive cancer, they are better able to design treatments that target these proteins.
                            </p>
                       
                         <a href="<?php echo base_url();?>contact-us" class="btn btn_theme d-none">Get in Touch</a>
				    </div>
				
				</div>   
			</div>
			<div class="carousel-item">
			    <img src="<?php echo base_url();?>assets/img/slide_4.jpg" alt="slider-1" class="webbanner">
				<img src="<?php echo base_url();?>assets/img/slide_4_m.jpg" alt="slider-1" class="mobbanner">
				<div class="carousel-caption">
				    <div class="animate_div animate__animated animate__zoomIn">
				        	<h5>Immunotherapy  to <br> Treat Cancer </h5>
				        	<p>Immunotherapy is a type of cancer treatment that helps your immune system fight cancer. The immune system helps your body fight infections and other diseases. It is made up of white blood cells and organs and tissues of the lymph system.
                            </p>
                       
                        <a href="<?php echo base_url();?>contact-us" class="btn btn_theme d-none">Get in Touch</a>
				    </div>
				
				</div>   
			</div>
		</div>
		
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <div class="span_set">
			    <span class="carousel-control-prev-icon"></span>
			</div>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
		    <div class="span_set">
			    <span class="carousel-control-next-icon"></span>
			</div>
		</a>
	</div>
    
	<!-- About Us -->
    <section class="pt-50 pb-50 about" >
        <div class="container">
            <div class="row">
				<div class="col-sm-2 col-md-2 col-lg-2 mob_none"></div>
				<div class="col-lg-4 col-md-4 col-sm-4 mob_none">
					<div class="_dots revealOnScroll" data-animation="animate__fadeInLeft" data-timeout="400"></div>
					<div class="doctor_ImgBlock revealOnScroll delay-1" data-animation="animate__flipInY" data-timeout="600">
						<img src="<?php echo base_url();?>assets/img/doctor-img.jpg" alt="">
					</div>
				</div>
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="" >
                    <h4>About</h4>
					<h5 class="dr_name">Dr Rakesh Reddy Boya</h5>   
					<p>Medical and Hemat-oncologist</p>
					<p>Yours truly is a passionate Oncologist who practises with compassion, ethics and with evidence based medicine. I have done my medical training from the premier most institutes of the country which has imparted me the skill set to handle difficult case scenarios. I have setup a comprehensive medical and hematoncology high volume center in a tertiary care cancer centre. I have pioneered stem cell transplant and have many ‘first-time in the state of AP’ credits to my name. I specialize in patient centric personalized medicine. I have a long and in-depth experience of novel cancer treatments like immunotherapy, targeted therapy and clinical trials.</p>	    
					<!--<button class="btn btn_theme">Contact Us</button>-->
					</div>	             
                </div>
            </div>

		<div class="row mt-5">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="_whyToChoose">
					<h3>Why to Choose</h3>
					<h5>Dr. Rakesh Reddy Boya ?</h5>
					    <p>ISMPO gold medal for best outgoing medical oncology post graduate student for the year 2016</p>
                        <p>European Certified Medical Oncologist (ECMO) by European Society of Medical Oncology with a score of 83 out of 97</p>
                        <p>Speciality Certificate Examination in Medical Oncology by Royal College of Physicians, U.K.</p>
                        <p>Set-up the first comprehensive hematopoeitic stem cell transplant in the state of A.P. Did the first Haploidentical transplant, first transplant for Thalassemia major in the state of A.P.</p>
				
				</div>
				
				<div class="_statistics">
					<p>Statistics of my Success</p>
					<div class="_countr" id="counter-container">
					    <div>
							<span>7+</span>
							<h4>Practising since</h4>
						</div>
						<div>
							<span>60+</span>
							<h4>Bone Marrow Transplants</h4>
						</div>
						<div>
							<span>200+</span>
							<h4>Happy Patients</h4>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="_vdo">
				    <img src="<?php echo base_url();?>assets/img/video-thumbnail.png" class="thumbnail_image" >
					<a href="#" class="d-none"><img src="<?php echo base_url();?>assets/img/play.svg" alt="play"></a>
				</div>
			</div>
		</div>


        </div>
    </section>
    <!-- <section class="pt-50 pb-50 news_Sec" >
        <div class="ctn"> <a id="news_sec">&nbsp;</a></div>
        <div class="container">
                <div class="col-md-12">
					<h3 class="_hdng">News</h3>  
				</div>
			
					<div id="news_slider" class="owl-carousel news_slider">		
                            <div class="news_blok_slider"> 
                                <p class="news_title">"Blood stem cell donation public awareness program"</p>
                                <p class="description">340 potential donors registered in space of 3 hours at this event and marked themselves as possible saviors of life. Partnered with DATRI, an NGO and largestblood stem cell donor registry in India for this endeavour.</p>
                                <p class="date">Date : 20th October 2019</p>   
                                 <p class="Venue">Venue : At VMRDA Children’s arena</p>
                                
                                 <ul>
                                     <li><a target="_blank" href="https://m.facebook.com/story.php?story_fbid=pfbid0Xq8Vr7GGArXGYZiYL34tUj4Bpq3evNMQMbfYpDBsG1N98o4F5uzwK8XD6nzGpxWJl&id=100002493828457" class="btn_theme followus">ReadMore </a></li>
                                 </ul>
							</div>
							<div class="news_blok_slider"> 
                                <p class="news_title">"National level Conference on ‘Hematopoietic stem cell transplantation – MGBMTCON"</p>
                                <p class="description">Oncologists, physicians and paediatricians of the region participated. Eminent speakers from premier institues of the counts like AIIMS, New Delhi, CMC – Vellore, TMH – Mumbai, participated in the event.</p>
                                <p class="date">Date : 21-10-2019</p>   
                                 <p class="Venue">Venue : Four Points by Sheraton</p>
                                
                                 <ul>
                                     <li><a target="_blank" href="https://m.facebook.com/story.php?story_fbid=pfbid0Xq8Vr7GGArXGYZiYL34tUj4Bpq3evNMQMbfYpDBsG1N98o4F5uzwK8XD6nzGpxWJl&id=100002493828457" class="btn_theme followus">ReadMore </a></li>
                                 </ul>
							</div>
							<div class="news_blok_slider"> 
                                <p class="news_title">"International childhood cancer day (ICCD 2021) celebrations"</p>
                                <p class="description">launched two of our flagship programs related to childhood cancer care ‘pediatric cancer support group’ and ‘pediatric cancer survivorship program’</p>
                                <p class="date">Date : 14-10-2021</p>   
                                 <p class="Venue">Venue : Atrium, Mahatma Gandhi Cancer Hospital</p>
                               
                                 <ul>
                                       <li><a target="_blank" href="https://m.facebook.com/story.php?story_fbid=pfbid0JoHctgPAmLayN9T19Agn2VTpEfTEkbtuHJpD1EPDpDSRfudjNvtGmyhRiysSMTvGl&id=100002493828457" class="btn_theme followus">ReadMore</a></li>
                                 </ul>
							</div>
							<div class="news_blok_slider"> 
                                <p class="news_title">"BMT Unit inauguration"</p>
                                <p class="description">inauguration of “Centre for advanced Hematology and Hemat-oncology” by eminent physicians of Visakhapatnam </p>
                                <p class="date">Date : 16-05-2019</p>   
                                 <p class="Venue">Venue : 5th floor, Unique hospital, Arilova, Visakhapatnam</p>
                               
                                 <ul>
                                     <li><a target="_blank" href="https://m.facebook.com/story.php?story_fbid=pfbid02DBJ1kVbk9jfVDoSGVACwGicjgu3eKMFUZ76p5E1heyfLZvLnNFKa2nZSwBau3hHCl&id=100002493828457" class="btn_theme followus">ReadMore</a></li>
                                 </ul>
							</div>
					</div>
			
        </div>
    </section>  -->
    <!-- News -->
   
    

    
    <!-- Testimonials -->
   <!-- <section class="testimonials_section pt-50 pb-50" id="testimonials">
         <div class="ctn"> <a id="testimon">&nbsp;</a></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="_hdng">Testimonials</h2>  
				</div>
				<div class="col-md-12">	
					<div id="testimonial-slider" class="owl-carousel">		
                            <div class="testimonial"> 
                                <div class="test_content">
                                      <p class="description">  I was diagnosed with Hodgkin’s lymphoma stage 2 and was treated at this hospital by Dr. Rakesh Reddy. He is an excellent oncologist.</p>
                                    <p class="description"> The treatment and care given at this hospital is the best. I underwent chemotherapy and radiation and all the duty doctors, nurses  are very helpful and caring. Even the management is very good in dealing with the patients and care and all the related problems.</p>
                                     <p class="description"> According to me, and the experience I had, this hospital is the best care you can get for cancer treatment.</p>
                                     
                                </div>
                                
                                <div class="pic_name">
    							
    								<i class="fa fa-user" aria-hidden="true"></i>
    								<div>
    									<p>Sai Venkat</p>
    								</div>
    							</div>
							</div>
							<div class="testimonial"> 
                                        <div class="test_content">
                                            <p class="description"> Visit after visit I see great improvement in nursing services, especially in fourth floor where we are getting Chemotherapy. I am happy with the service and appreciate all the staff.
                                            After an year of experience with the hospital and the positive results of the treatment I wish to add some more points. </p>
                                            <p class="description"> The staff in Customer relationship department where all company referred cases are dealt with are so nice and lovely in their dealings. They stretch every nerve to make the interactions friendly and extend all possible help without a murmur.
                                            </p>
                                            <p class="description"> The Purchage department is another interface which sympathetically understands and resolves our concerns. They effectively liaison with the Bluetree organisation to get the PHESGO medicine by the required date.
                                            </p>
                                            <p class="description"> 
                                            The billing section is always on their toes to finish the work in MINUTES after receiving the details from nursing section.
                                            </p>
                                            <p class="description"> In PET SCAN section a very friendly atmosphere is created and the patient never feels the stress of the testing.
                                            </p>
                                            <p class="description"> Now regarding the treatment. We are getting the state of the art world class treatment which is available in advanced countries. Dr Rakesh Reddy and Dr Muralikrishna Voonna have diagnosed the problem correctly and prescribed the right line of treatment commensurate with the Stage of the cancer. As a result the improvement is miraculous and the patient is very active and healthy and able to attend to her household activities as usual. In fact She is traveling to USA for a two months trip during Aug Sep 2022
                                            The amazing part is that Dr Rakesh Reddy replies to the patient queries in just minutes. This is unthinkable considering his onerous responsibilities and very busy schedules. Hats off to his concern for the patients.
                                            So it is not a surprise that the hospital bagged many awards. We wish the hospital to be at the TOP. </p>
                                            <p class="description"> 
                                            We are grateful to all doctors, nursing staff and administrative staffs , Lab personnel for all the help we are receiving.
                                            </p>
                                            <p class="description"> Today 6 th July, we had the 19 th chemo cycle. We were thrilled  as the whole process was completed with lightening speed in the third floor ward in just 3 hrs which used to take 5-6 hrs earlier. We are thankful to all the staff of third floor.
                                            </p>
                                            <p class="description"> On 27 th July 2022 we had the 20th chemo cycle in the third floor. The process was completed in just one hour. They also coordinated with and  arranged for chemo port removal in short time. We thank them.
                                            </p>
                                            <p class="description">
                                            Now I come to the BEST thing that happened. During our 1 st visit in  May 2021 ,my wife was diagnosed for Ca Breast stg IV and we are advised to use the costly drug “Perjeta “ of ROCHE CO of Switzerland, if we can afford. Each time the purchase costs In lakhs . We were informed by Dr.Rakesh Reddy Garu about the “patient Support Program “ of the ROCHE India. It is a patient centric initiative aiming to help the patients who are ignorant of the treatment and who do not have access to the treatment options . They even supply the free for poor patients. We were briefed by Sri Kishore Kumar garu, Asst General Manager/ Purchage of MGCH about a plan that if we buy this medicine 9  times, then we become eligible for FREE SUPPLY of the medicine for the  entire remaining life of the patient. We were helped by Kishore Kumar Garu to join the program by doing the necessary paper work. We bought it nine times and used strictly adhering to protocol.  From June 2022 onwards we are getting the medicine as FREE SUPPLY once in three weeks.  </p>
                                            <p class="description"> Now we have a need to go to USA and requested to provide the free medicine to take to USA. Roche India company hesitated to supply. Now comes the role played by the hospital. Dr Rakesh Reddy garu in his characteristic gentle way talked to them supporting the case medically.
                                                Sri Kishore Kumar argued with them to help the patient to have peace and mental satisfaction of having recovered. Finally the company obliged and we got two advance doses to take to USA. An excellent effort and help by the hospital for which we are grateful to them
                                            
                                            </p>
                                        
                                        
                                        
                                        </div>
                                    <div class="pic_name">
    								    <i class="fa fa-user" aria-hidden="true"></i>
    								<div>
    									<p>Sastry Chembuli</p>
    								</div>
    							</div>
							</div>
							<div class="testimonial"> 
							           <div class="test_content">
							            <p class="description">My self Im suffering from CA Breast I consulted Dr.rakesh reddy and has given us good guidance and good treatment and suggested us chemotherapy as of now now chemotherapy is going on. All staff the very polite. IP Pres and nursing staff has done their work on time.overall a good hospital.</p>
                                     </div>
                                     <div class="pic_name">
    								<i class="fa fa-user" aria-hidden="true"></i>
    								<div>
    									<p>maha chinni</p>
    								</div>
    							</div>
							</div>
							<div class="testimonial"> 
							<div class="test_content">
                                <p class="description">

                                    I was initially apprehensive of the whole process of cancer treatment, let alone stem cell transplant. One chat with medical oncologist (Dr Rakesh, MD from PGI Chandigarh and DM from AIIMS, both apex institutes) was enough to put us at ease. He took us seamlessly through the 6 cycles of chemotherapy. Then came the real challenge, the stem cell transplant. I was at first let down knowing that the BONE MARROW THERAPY (BMT) unit is located away from head office. It proved a blessing in disguise. The environment around BMT was so peaceful and the staff, so helpful. Success of any organization depends on the individuals called staff. MG cancer hospital is blessed with very professional and humane staff at BMT. Every nurse, aaya, security and most of all the reception manager Mrs Aleemunnisa made sure through out the 30 day period that my Mother is well attended to and be taken extreme care of. It is all now past. Mother is already recovering rapidly. But our family always remains grateful to Dr Rakesh and BMT unit for their compassionate care.
                                    </p>
                                    </div>
                                <div class="pic_name">
    								<i class="fa fa-user" aria-hidden="true"></i>
    								<div>
    									<p>Sweet Telugu Devotionals</p>
    								</div>
    							</div>
							</div>
							<div class="testimonial"> 
							<div class="test_content">
                                <p class="description">Patient  DSP Lingam
                                    Chemotherapy  patient
                                    Dr Rakesh reddy sir Excellent Treatment
                                    Best Cancer Hospi for Cancer Treatments
                                    Staff also very Cooperative
                                    Especially Mr Sony Response excellent</p>
                                    </div>
                                <div class="pic_name">
    								<i class="fa fa-user" aria-hidden="true"></i>
    								<div>
    									<p>DSP Lingam</p>
    								</div>
    							</div>
							</div>
								<div class="testimonial">
								    	<div class="test_content"> 
                                <p class="description">MGCH is one of the best hospitals in Visakhapatnam & Orissa. My sister is undergoing chemotherapy under Dr Rakesh Reddy . He has very good knowledge & shown at most interest towards the patient and the treatment & care given was very good. My sister is recovering very well. I Wish all the doctors & staff of MGCH all the BEST.</p>
                               </div>
                                <div class="pic_name">
    								<i class="fa fa-user" aria-hidden="true"></i>
    								<div>
    									<p>kiran kumar</p>
    								</div>
    							</div>
							</div>
					</div>
				</div>
			</div>
		</div>
    </section> -->

	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>
 
	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
</body>
</html>