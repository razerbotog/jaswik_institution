<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- font awesome -->
	<!-- bootstrap 5-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<!-- bootstrap 5-->
	<style>
		.card ,img{
			border-top-left-radius: 20px;
		}
		.card .cat-meta {
			color: white;
		    position: absolute;
		    bottom: -15px;
		    left: 25px;
		    padding: 3px 15px;
		    border-radius: 25px;
		    background-color: deeppink;
		    -webkit-box-shadow: 0px 15px 16px -7px deeppink;
			-moz-box-shadow: 0px 15px 16px -7px deeppink;
			box-shadow: 0px 15px 16px -7px deeppink;
		}
		h1{
			color: #BF40BF;
			font-weight: 200;
		}
		h3{
			color: #BF40BF;
			font-weight: 200;
		}
		h5{
			color: #BF40BF;
			font-weight: 400;
		}
		p{
			color: gray;
		}
/*		details*/
	.details{
		height: 100vh;
		background-color: whitesmoke;
	}
	.details1{
		margin-top: 5rem;
		height: 60%;
	}
	.keyHighlights{
		background-color: #BF40BF;
		height: 80%;
		border-radius: 20px 0 20px 0;
		color: white;
	}
	.keyHighlights h6{
		font-weight: 400;
		letter-spacing: 1.5px;
	}
	.keyHighlights i{
		color: white;
		font-size: 20px;
		padding: 5px;
	}
/*	description*/
.description{
	margin-top: 5rem;
}
	.description li{
		margin-top: 10px;
		margin-button: 10px;
	}
	.description small{
		color: #BF40BF;
	}
	.description ol li::marker{
		color: #BF40BF;
	}
	.description ol li{
		color: #BF40BF;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row mt-3 justify-content-around">
			<div class="col-sm-7 col-md-5">
				<div class="card position-relative mt-3">
						<img src="../vocational-courseimg/bakery.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Vocational
		                 </span>
					</div>
			</div>
			<div class="col-sm-7 col-md-7">
				<h1 class="text-center">Bakery</h1>
				<p>"Embark on a vocational bakery course that delves into baking techniques, ingredient selection, and creative recipe crafting. Master textures, flavors, and stunning designs for cakes, pastries, and desserts. Gain hands-on experience in bread making, confectionery, and cake decoration. Explore bakery management essentials like cost control and customer service. Shape your baking passion into a rewarding skillset, ready to create memorable treats."</p>
				<hr>
				<div class="d-flex justify-content-around my-5">
					<div>
						<h5>Level</h5>
						<small>Certificate</small>
					</div>
					<div>
						<h5>Course Duration</h5>
						<small>6 months</small>
					</div>
				</div>
				<div class="d-flex justify-content-around">
					<div>
						<h5>Mode of Training</h5>
						<small>Online / Offline</small>
					</div>
					<div>
						<h5>Job Assistant</h5>
						<small>100% Job Assistant</small>
					</div>
				</div>
			</div>
		</div>


		<div class="row details mt-5 justify-content-center align-content-center position-relative">
			<div class="col-sm-10 col-md-7 bg-white  details1 p-5">
				<small>COURSE DESCRIPTION</small>
				<hr style="width: 10%;">
				<h3>About The Course</h3>
				<p>"Dive into the world of baking with our comprehensive vocational bakery course. Discover the foundational techniques, ingredient expertise, and recipe mastery that define the art of baking. Delve into the science behind creating perfect textures and flavors in bread, pastries, and desserts. Acquire hands-on experience in bread making, cake decoration, and confectionery delights. Uncover the business aspects of bakery management, including cost control and customer service. Shape your passion into a marketable skillset, poised to craft delightful treats that leave lasting impressions."</p>
			</div>
			<div class="col-sm-10 col-md-4 keyHighlights p-4">
				<h6>KEY HIGHLIGHTS</h6>
				<div class=" d-flex flex-column mt-5 gap-3">
				<small><i class="fa-solid fa-graduation-cap"></i>Designed for Fresher’s & Working Vocational</small>
				<small><i class="fa-regular fa-clock"></i>90+ Hours of In Depth Learning</small>
				<small><i class="fa-solid fa-screwdriver-wrench"></i>Covering Most Demanding Tools</small>
				<small><i class="fa-solid fa-diagram-project"></i>25+ Case Studies & Capstone Projects</small>
				<small><i class="fa-solid fa-chalkboard-user"></i>One to One with Industry Mentors</small>
				<small><i class="fa-solid fa-hourglass-start"></i>24/7 LMS Access</small>
				<small><i class="fa-solid fa-certificate"></i>100% Job Assistantce</small>
				<small><i class="fa-solid fa-phone"></i>Dedicated Customer Support</small>
				<small><i class="fa-solid fa-diagram-project"></i>Building Project Portfolio</small>
				<small><i class="fa-solid fa-file"></i>AI based Resume Building</small>
				</div>
				
				
			</div>
		</div>

		<div class="row description  justify-content-center  position-relative">
			<div class="col-sm-10 col-md-7 bg-white">
				<small>COURSE DESCRIPTION</small>
				<hr style="width: 10%;">
				<h3>WHO SHOULD ATTEND & COURSE PEDAGOGY:</h3>
				<div class="mt-4">
				<li><strong>Art of Baking:</strong> Explore the culinary world with our Bakery course. Learn techniques, ingredients, and recipes to create delectable baked goods.</li>
    <li><strong>Master Baking Techniques:</strong> Develop expertise in mixing, proofing, and baking various types of bread, pastries, and desserts.</li>
    <li><strong>Creative Pastry Making:</strong> Craft artistic and flavorful pastries, cakes, and confections that delight the palate.</li>
    <li><strong>Business of Baking:</strong> Gain insights into bakery management, from cost control to marketing, opening doors to entrepreneurial ventures.</li>
    <li><strong>Culinary Artistry:</strong> Elevate your baking skills to an art form, crafting edible creations that showcase your creativity and passion.</li>
    <li><strong>Career Pathways:</strong> Launch a bakery career or explore catering, dessert businesses, or even establish your own bakery shop.</li>
				</div>
				<div class="row mt-5">
					<div class="col">
						<small>ELIGIBILITY</small>
						<hr style="width: 10%;">
						<div class="mt-4 mb-4">Open for all. No experience required, and no background skills is needed to thrive in this vocational course.</div>
						<small>CERTIFICATION</small>
						<hr style="width: 10%;">
						<div class="mt-2">Upon successful completion of the course, participants will receive a recognized certification, validating their proficiency in web development and design. This certification serves as a valuable asset in career advancement and job opportunities in the rapidly evolving digital landscape.</div>
					</div>
					<div class="col">
						<small>ASSESSMENTS</small>
						<hr style="width: 10%;">
						<div class="mt-4">

						<li><strong>Comprehensive Evaluation:</strong> Periodic assessments are seamlessly integrated throughout the course.</li>
    <li><strong>Diverse Assessment Methods:</strong> Assessments encompass quizzes, assignments, projects, case studies, and objective/subjective evaluations.</li>
    <li><strong>Promoting Active Learning:</strong> These evaluations drive ongoing student engagement, fostering a culture of active learning.</li>
    <li><strong>Rewards for Achievement:</strong> Successful completion of evaluations, attendance criteria, final assessment, and project work culminate in a certificate of completion/participation.</li>
						</div>
						
					</div>
				</div>
			</div>
			<!-- <div class="col-sm-10 col-md-4 bg-white p-5">
				<h3>Contents / Modules</h3>
				<hr>
				<ol>
					<li>Introduction to Web Design</li>
					<li>HTML + CSS Basics</li>
					<li>Design Principles for the Web</li>
					<li>Typography and Text Styling</li>
					<li>Color Theory and Website Colors</li>
					<li>Layout and Composition Techniques</li>
					<li> Responsive Design Essentials</li>
					<li>User-Centered Design Principles</li>
					<li>Visual Hierarchy and Navigation Design</li>
					<li>Graphics and Imagery in Web Design</li>
					<li>Web Design Tools and Software</li>
					<li>Portfolio Building for Web Designers</li>
					<li> Current Trends in Web Design</li>
					<li>Final Web Design Projects</li>
				</ol>
			</div> -->
		</div>
		<div class="row mt-3 justify-content-center bg-light p-5">
			<div class="col-sm-7 col-md-7 mt-5">
			<h3>How to Apply</h3>
			<hr style="width: 10%;">
			<ul>
				<li><strong>Admission Form:</strong> Form duly filled and signed ( available at admission Counter )</li>
				<li><strong>Qualification Proof:</strong> Self attested photocopy of last qualifying Mark Sheet</li>
				<li><strong>Photo:</strong> Two latest passport size color photographs</li>
				<li><strong>Fee Submission:</strong> Fees can be paid through Cash or Online Transfer</li>
				<li><strong>EMIs:</strong> Fee can be paid in Monthly EMI</li>
			</ul>
			</div>
			<div class="col-sm-7 col-md-4 mt-5">
			<h3>Drop Us A Query</h3>
			<hr style="width: 10%;">
			<p>We're happy to assist you in your journey towards a brighter career. Drop your details below and our team will reach you for further Assistantce.</p>
			
			<form action="db.php" method="POST">
			<div class="form-floating m-2">
				<input type="text" class="form-control" id="floatingInput1" placeholder="" name="fname" required>
				<label for="floatingInput1" id="labelInput1">Enter Your Your Full Name</label>
			</div>
			<div class="form-floating m-2">
				<input type="text" class="form-control" id="floatingInput2" placeholder="" name="email" required>
				<label for="floatingInput2" id="labelInput2">Enter Your Email</label>
			</div>
			<div class="form-floating m-2">
				<input type="text" class="form-control" id="floatingInput3" placeholder="" name="phone" required>
				<label for="floatingInput3" id="labelInput3">Enter Your Phone No.</label>
			</div>
			<div class="form-floating m-2">
				<textarea class="form-control row-50" placeholder="Leave a comment here" id="floatingTextarea" name="comments"></textarea>
				<label for="floatingTextarea">Comments</label>
				<button type="submit" class="btn btn-secondary mt-4">SUBMIT</button>
				</div>
			</form>	
		</div>
		</div>
	</div>
</body>
</html>