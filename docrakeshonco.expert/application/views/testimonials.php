<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta'); ?>
	<?php $this->load->view('layout/styles');  ?>

	<style>
		.video_width {
			max-height: 315px;
		}
	</style>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Page Loading -->
	<div id="loading"></div>
	<?php $this->load->view('layout/nav');  ?>

	<section class="testimonials pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card bg-light mb-3" style="max-width: 22rem;">
						<div class="card-body card_body" style="padding: 0.25rem;">
							<div class="thumbnail-block thumbnail_block">
								<a data-toggle="modal" data-target="#testimonialModal2">
									<img src="<?php echo base_url();?>assets/img/testimonial_video_1.jpg"
										alt="thumbnail" class="thumbnil_img">
									<div class="overlap">
										<img src="<?php echo base_url();?>assets/img/playbutton.png">
									</div>
								</a>
							</div>
						</div>
						<div class="card-header card_header h5">Sai</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-light mb-3" style="max-width: 22rem;">
						<div class="card-body card_body test_content">
							<p class="card-text">I was diagnosed with Hodgkin’s lymphoma stage 2 and was treated at this
								hospital by
								Dr. Rakesh Reddy. He is an excellent oncologist.</p>
							<p class="card-text">The treatment and care given at
								this hospital is the best. I underwent chemotherapy and radiation and all the duty
								doctors, nurses are very helpful and caring. Even the management is very good in
								dealing with the patients and care and all the related problems.</p>
							<p class="card-text">According to me,
								and the experience I had, this hospital is the best care you can get for cancer
								treatment.</p>
						</div>
						<div class="card-header card_header h5">Sai Venkat</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-light mb-3" style="max-width: 22rem;">
						<div class="card-body card_body test_content">
							<p class="card-text">Visit after visit I see great improvement in nursing services,
								especially in fourth
								floor where we are getting Chemotherapy. I am happy with the service and appreciate
								all the staff.
								After an year of experience with the hospital and the positive results of the
								treatment I wish to add some more points. </p>
							<p class="card-text">The staff in Customer relationship
								department where all company referred cases are dealt with are so nice and lovely in
								their dealings. They stretch every nerve to make the interactions friendly and
								extend all possible help without a murmur.
							</p>
							<p class="card-text">The Purchage department is another interface which sympathetically
								understands
								and resolves our concerns. They effectively liaison with the Bluetree organisation
								to get the PHESGO medicine by the required date.
							</p>
							<p class="card-text"> The billing section is always on their toes to finish the work in
								MINUTES after
								receiving the details from nursing section.
							</p>
							<p class="card-text">Now regarding the treatment. We are getting the state of the art world
								class
								treatment which is available in advanced countries. Dr Rakesh Reddy and Dr
								Muralikrishna Voonna have diagnosed the problem correctly and prescribed the right
								line of treatment commensurate with the Stage of the cancer. As a result the
								improvement is miraculous and the patient is very active and healthy and able to
								attend to her household activities as usual. In fact She is traveling to USA for a
								two months trip during Aug Sep 2022
								The amazing part is that Dr Rakesh Reddy replies to the patient queries in just
								minutes. This is unthinkable considering his onerous responsibilities and very busy
								schedules. Hats off to his concern for the patients.
								So it is not a surprise that the hospital bagged many awards. We wish the hospital
								to be at the TOP. </p>
							</p>
							<p class="card-text"> We are grateful to all doctors, nursing staff and administrative
								staffs , Lab
								personnel for all the help we are receiving.
							</p>
							<p class="card-text"> Today 6 th July, we had the 19 th chemo cycle. We were thrilled as the
								whole process
								was completed with lightening speed in the third floor ward in just 3 hrs which used
								to take 5-6 hrs earlier. We are thankful to all the staff of third floor.
							</p>
							<p class="card-text"> On 27 th July 2022 we had the 20th chemo cycle in the third floor. The
								process was
								completed in just one hour. They also coordinated with and arranged for chemo port
								removal in short time. We thank them.
							</p>
							<p class="card-text"> Now I come to the BEST thing that happened. During our 1 st visit in
								May 2021 ,my
								wife was diagnosed for Ca Breast stg IV and we are advised to use the costly drug
								“Perjeta “ of ROCHE CO of Switzerland, if we can afford. Each time the purchase
								costs In lakhs . We were informed by Dr.Rakesh Reddy Garu about the “patient Support
								Program “ of the ROCHE India. It is a patient centric initiative aiming to help the
								patients who are ignorant of the treatment and who do not have access to the
								treatment options . They even supply the free for poor patients. We were briefed by
								Sri Kishore Kumar garu, Asst General Manager/ Purchage of MGCH about a plan that if
								we buy this medicine 9 times, then we become eligible for FREE SUPPLY of the
								medicine for the entire remaining life of the patient. We were helped by Kishore
								Kumar Garu to join the program by doing the necessary paper work. We bought it nine
								times and used strictly adhering to protocol. From June 2022 onwards we are getting
								the medicine as FREE SUPPLY once in three weeks. </p>
							</p>
							<p class="card-text">Now we have a need to go to USA and requested to provide the free
								medicine to take to
								USA. Roche India company hesitated to supply. Now comes the role played by the
								hospital. Dr Rakesh Reddy garu in his characteristic gentle way talked to them
								supporting the case medically.
								Sri Kishore Kumar argued with them to help the patient to have peace and mental
								satisfaction of having recovered. Finally the company obliged and we got two advance
								doses to take to USA. An excellent effort and help by the hospital for which we are
								grateful to them
							</p>
						</div>
						<div class="card-header card_header h5">Sastry Chembuli</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-light mb-3" style="max-width: 22rem;">
						<div class="card-body card_body test_content">
							<p class="card-text">My self Im suffering from CA Breast I consulted Dr.rakesh reddy and has
								given us good
								guidance and good treatment and suggested us chemotherapy as of now now chemotherapy
								is going on. All staff the very polite. IP Pres and nursing staff has done their
								work on time.overall a good hospital.</p>
						</div>
						<div class="card-header card_header h5">Maha chinni</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-light mb-3" style="max-width: 22rem;">
						<div class="card-body card_body test_content">
							<p class="card-text">I was initially apprehensive of the whole process of cancer treatment,
								let alone stem
								cell transplant. One chat with medical oncologist (Dr Rakesh, MD from PGI Chandigarh
								and DM from AIIMS, both apex institutes) was enough to put us at ease. He took us
								seamlessly through the 6 cycles of chemotherapy. Then came the real challenge, the
								stem cell transplant. I was at first let down knowing that the BONE MARROW THERAPY
								(BMT) unit is located away from head office. It proved a blessing in disguise. The
								environment around BMT was so peaceful and the staff, so helpful. Success of any
								organization depends on the individuals called staff. MG cancer hospital is blessed
								with very professional and humane staff at BMT. Every nurse, aaya, security and most
								of all the reception manager Mrs Aleemunnisa made sure through out the 30 day period
								that my Mother is well attended to and be taken extreme care of. It is all now past.
								Mother is already recovering rapidly. But our family always remains grateful to Dr
								Rakesh and BMT unit for their compassionate care.</p>
						</div>
						<div class="card-header card_header h5">Sweet Telugu Devotionals</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-light mb-3" style="max-width: 22rem;">
						<div class="card-body card_body test_content">
							<p class="card-text">Patient DSP Lingam
								Chemotherapy patient
								Dr Rakesh reddy sir Excellent Treatment
								Best Cancer Hospi for Cancer Treatments
								Staff also very Cooperative
								Especially Mr Sony Response excellent </p>
						</div>
						<div class="card-header card_header h5">DSP Lingam</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-light mb-3" style="max-width: 22rem;">
						<div class="card-body card_body test_content">
							<p class="card-text">MGCH is one of the best hospitals in Visakhapatnam & Orissa. My sister
								is undergoing
								chemotherapy under Dr Rakesh Reddy . He has very good knowledge & shown at most
								interest towards the patient and the treatment & care given was very good. My sister
								is recovering very well. I Wish all the doctors & staff of MGCH all the BEST.</p>
						</div>
						<div class="card-header card_header h5">Kiran kumar</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="video_models">
		<!--<div class="modal fade" id="testimonialModal1" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<div class="modal-body modal-video-body">
						<iframe id="Testimonial_Video_1" width="100%" height="315"
							src="https://www.youtube.com/embed/T5sQvYN7Y0M" title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							allowfullscreen></iframe>

					</div>
				</div>
			</div>
		</div> -->
		<div class="modal fade" id="testimonialModal2" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<div class="modal-body modal-video-body">
						<video controls id="video1" class="video_width">
							<source src="<?php echo base_url();?>assets/videos/Dr Rakesh Reddy Boya.mp4"
								type="video/mp4">
							Your browser doesn't support HTML5 video tag.
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>

	<!--  JavaScript -->

	<?php $this->load->view('layout/js');  ?>
	<script>
		$(document).ready(function () {
			$('#testimonialModal2').on('shown.bs.modal', function () {
				$('#video1')[0].play();
			})
			$('#testimonialModal2').on('hidden.bs.modal', function () {
				$('#video1')[0].pause();
			})
		});
	</script>


</body>

</html>