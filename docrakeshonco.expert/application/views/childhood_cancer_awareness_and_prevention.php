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
	<!-- Nav Menu  -->

	<nav aria-label="breadcrumb" class="_breadcrumb">
		<h1>Childhood cancer awareness & prevention</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog</li>
		</ol>
	</nav>

	<!--specialty -->
	<section class="_top cmnsection">
		<div class="container">
			<div class="row mb-30">
				<div class="col-lg-12 col-md-12 col-sm-12 blog_text_cont">
			<!--	<div class="top_section">
						<div class="date">
							<p>07-04-2023</p>
						</div>
						<div class="share_on">
							<div class="share_flex">
								<p>Share On: </p>
							</div>
							<div class="share_nav">
								<ul>
									<li class="list-inline-item"><a target="_blank"
											href="https://www.facebook.com/drrakeshreddyboya "
											title="How to layer your skin care products the right way this summer?"
											class=""><img
												src="https://heterohealthcare.com/moiste/assets/img/facebook.svg"
												alt="How to layer your skin care products the right way this summer?"></a>
									</li>
									<li class="list-inline-item"><a target="_blank"
											href="https://twitter.com/rakesh_boya"
											class=""
											title="How to layer your skin care products the right way this summer?"><img
												src="https://heterohealthcare.com/moiste/assets/img/twitter.svg"
												alt="How to layer your skin care products the right way this summer?"></a>
									</li>
									<li class="list-inline-item"><a target="_blank"
											href="https://www.linkedin.com/in/rakesh-reddy-boya-629a0b162/"
											class=""
											title="How to layer your skin care products the right way this summer?"><img
												src="https://heterohealthcare.com/moiste/assets/img/linkedin.svg"
												alt="How to layer your skin care products the right way this summer?"></a>
									</li>
								</ul>
							</div>
						</div>
					</div> -->
					<h2>Childhood Cancer Awareness & Prevention</h2>
				<img src="<?php echo base_url();?>uploads/blog/childhood cancer awareness design 01.jpg"/> 
					<p>Cancer in anyone is a very upsetting thing to happen and when it occurs in children, it's sadder.
						It’s occurrence can be avoided sometimes, but if it happens, there is a silver lining to it. Due
						to the latest developments in childhood cancer treatment, more than 80% of children with cancer
						now survive 5 years or more or get cured completely.</p>
					<p>The treatment for children having cancer also differs from that of adults. As a parent, one may
						have multiple questions regarding the treatment process like:</p>

					<ul>
						<li>What will be the side effects of treatment?</li>
						<li>Will it affect the growth of the child?</li>
						<li>What will this mean for the whole family?</li>
						<li>Will my child get cured?</li>

					</ul>
					<p>Confusions will always remain but once you start understanding all about childhood cancer, you
						might view it from a different perspective.</p>

					<h4>What is Childhood Cancer?</h4>
					<p>Cancer in children can occur anywhere in the body, like from the blood, lymph node, brain and
						spinal cord (central nervous system-CNS), kidneys, eye, testes/ovary or any other organs. Like
						the usual cancer, healthy cells change and grow out of control. These cells then form a tumor,
						grow and may spread to other parts of the body.</p>
					<p>Some of the types of cancer in children include Leukemia, Brain and spinal cord tumors,
						lymphomas, Wilms tumor, Neuroblastoma, germ cell tumors etc.</p>
					<p>The treatment of childhood cancer depends on the stage the child is. Early diagnosis and early
						initiation of treatment at a pediatric oncology centre makes a lot of difference. A child is not
						a miniature adult. They have special needs and need special care. Treating doctors work to
						develop a plan for it and treat them with compassion, while also taking care of their social and
						emotional needs.</p>

					<h4>Causes of Childhood Cancer</h4>
					<p>The exact cause of cancer is unclear in adults and children. Some of the known causes of cancer
						in adults have been lifestyle related risk factors, smoking, excess weight, excess alcohol
						consumption, radiation exposure etc. </p>
					<p>But in children, lifestyle factors are not thought to be the reason for this, as they take time
						to cause effects. Genetic changes due to certain in-utero exposures like infections, radiation,
						alcohol/tobacco, and hereditary factors may be some of the reasons for cancer in children.
						Commonly, it occurs because of random mutations (changes) in the genes of growing cells, and as
						they happen randomly, there is no effective way to prevent them.</p>
					<h4>Diagnosis</h4>
					<p>Blood tests, biopsy, IHC, Bone marrow aspiration and biopsy, Lumbar puncture (spinal tap), CT
						Scan, MRI, Positron emission tomography (PET-CT) used in relevant combinations are the methods
						used by doctors to diagnose and stage these cancers.</p>
					<h4>Cancer Treatment</h4>
					<p>Common treatments for childhood cancers include chemotherapy, surgery, radiation therapy, stem
						cell transplantation and immunotherapy for children. </p>
					<ul>
						<li>Surgery aims to remove the entire tumor and the tissues around it, and leave only healthy
							tissues. </li>
						<li>Immunotherapy and chemotherapy remove tumor cells through medication. Systemic therapies
							include an intravenous (IV) tube placed into a vein using a needle or in a pill or capsule
							that is swallowed (orally). </li>
						<li>Chemotherapy is followed in a systematic session over a period of cycles to destroy cancer
							cells by use of drugs.</li>
						<li>Immunotherapy uses the body’s immunity in order to fight against cancer like interferons,
							cancer vaccines, monoclonal antibodies etc.</li>
						<li>Radiation therapy uses high-energy x-rays or other particles such as photons to destroy
							cancer cells.</li>
						<li>A bone marrow transplant involves the replacement of cancerous cells in the bone marrow with
							hematopoietic stem cells (commonly known as stem cell transplant).</li>

					</ul>
					<p>Doctors would recommend the effective method to treat cancer by understanding the child’s current
						stage of cancer, patient's and family’s medical history and its effectiveness as every treatment
						comes with its physical and emotional effects.</p>

					<h4>Conclusion</h4>
					<p>A grave disease like cancer requires extreme physical and mental stability to process it and
						continue treatment. The challenge is greater in case of a childhood cancer. With extreme care
						and compassion, one can fight and win the battle. </p>

				</div>

	</section>



	<!-- Footer -->
	<?php $this->load->view('layout/footer');  ?>


	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
</body>

</html>