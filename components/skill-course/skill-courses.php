<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Courses</title>
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="../css2/responsive.css">
	<link rel="stylesheet" type="text/css" href="../css2/style.css">
	<!-- custom css -->
	<!-- bootstrap 5-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<!-- bootstrap 5-->
	<style>
		.banner{
			/* background-color: rgba(0,0,0,100); */
			background:#f7941d url(./images/banner.jpg) no-repeat center top / cover ;
			
		}
		
		.banner-deatils{
			margin: 10px auto;
		}
		.banner img{
			border-radius:0;
			/* filter: grayscale(70%); */
			filter: blur(2px);
  			-webkit-filter: blur(2px);
			
		}
		 a{
			text-decoration: none;
		}
		.courses a:hover .card{
			-webkit-box-shadow: 0px 0px 23px 0px rgba(240,209,240,1);
			-moz-box-shadow: 0px 0px 23px 0px rgba(240,209,240,1);
			box-shadow: 0px 0px 23px 0px rgba(240,209,240,1);
		}
		.courses a:hover .row{
			background-color: green !important;
		}
		.card{
			position: relative;
			border-radius: 20px 2px 20px 2px;
			padding-bottom: 10px;
		}
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
		
		
		.card h3{
			margin-top: 22px;
			color: #BF40BF;
		}
		.card h6 {
			margin-top: 5px;
/*			color: #301934;*/
			color: #BF40BF;

		}
		.card small {
			color: gray;
		}
		@media (max-width:400px) {
			.banner{
				height: 30vh;
				
			}
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row banner py-5">
			<div class="banner-deatils d-flex justify-content-center alignt-content-center position-relative">
				<h2 class="px-5  py-5 text-white border border-white">Skill Courses</h2>
			</div>
		</div>
		<div class="row courses d-flex justify-content-lg-evenly justify-content-md-between justify-content-sm-evenly my-5">
		<!-- ---------- -->
		<div class="col-lg-3 col-md-4 col-sm-5">
						<a href="../all-courses/ac-fridge.php">
						<div class="card">
							<div class="position-relative">
								<img src="../skill-courseimg/AC & REFRIGERATION REPAIRING2.jpg" class="img-fluid">
								<span class="cat-meta">
								Skill
								</span>
							</div>
						<h3 class="text-center">AC & REFRIGERATION REPAIRING</h3>
						<div class="d-flex justify-content-around ">
							<h6>Level</h6>
							<h6>Duration</h6>
						</div>
						<div class="d-flex justify-content-around ">
							<small>Certification</small>
							<small>6 months</small>
						</div>
						<div class="d-flex justify-content-around ">
							<small>Diploma</small>
							<small>1 yrs</small>
						</div>

						</div>
						</a>
					</div>
		<!-- ---------- -->
		<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/computer-networking.php">
				<div class="card">
					<div class="position-relative">
						<img src="../skill-courseimg/COMPUTER NETWORKING.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Skill
		                 </span>
					</div>
				<h3 class="text-center">COMPUTER NETWORKING</h3>
				<div class="d-flex justify-content-around ">
					<h6>Level</h6>
					<h6>Duration</h6>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Certification</small>
					<small>6 months</small>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Diploma</small>
					<small>1 yrs</small>
				</div>

				</div>
				</a>
			</div>
<!-- ---------- -->
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/laptop-repairing.php">
				<div class="card">
					<div class="position-relative">
						<img src="../skill-courseimg/LAPTOP REPAIRING.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Skill
		                 </span>
					</div>
				<h3 class="text-center">LAPTOP REPAIRING</h3>
				<div class="d-flex justify-content-around ">
					<h6>Level</h6>
					<h6>Duration</h6>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Certification</small>
					<small>6 months</small>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Diploma</small>
					<small>1 yrs</small>
				</div>

				</div>
				</a>
			</div>
<!-- ---------- -->
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/machine.php">
				<div class="card">
					<div class="position-relative">
						<img src="../skill-courseimg/MICROWAVE  WASHING MACHINE.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Skill
		                 </span>
					</div>
				<h3 class="text-center">MICROWAVE  WASHING MACHINE</h3>
				<div class="d-flex justify-content-around ">
					<h6>Level</h6>
					<h6>Duration</h6>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Certification</small>
					<small>6 months</small>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Diploma</small>
					<small>1 yrs</small>
				</div>

				</div>
				</a>
			</div>
<!-- ---------- -->



		</div>
		<!-- ---------- -->
				<div class="row courses d-flex justify-content-lg-evenly justify-content-md-between justify-content-sm-evenly my-5">
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/automotive.php">
				<div class="card">
					<div class="position-relative">
						<img src="../skill-courseimg/AUTOMOTIVE REPAIRING.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Skill
		                 </span>
					</div>
				<h3 class="text-center">AUTOMOTIVE REPAIRING</h3>
				<div class="d-flex justify-content-around ">
					<h6>Level</h6>
					<h6>Duration</h6>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Certification</small>
					<small>6 months</small>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Diploma</small>
					<small>1 yrs</small>
				</div>

				</div>
				</a>
			</div>
<!-- ---------- -->
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/mobile.php">
				<div class="card">
					<div class="position-relative">
						<img src="../skill-courseimg/MOBILE REPAIRING.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Skill
		                 </span>
					</div>
				<h3 class="text-center">MOBILE REPAIRING</h3>
				<div class="d-flex justify-content-around ">
					<h6>Level</h6>
					<h6>Duration</h6>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Certification</small>
					<small>6 months</small>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Diploma</small>
					<small>1 yrs</small>
				</div>

				</div>
				</a>
			</div>
<!-- ---------- -->
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/plumbing.php">
				<div class="card">
					<div class="position-relative">
						<img src="../skill-courseimg/PLUMBING.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Skill
		                 </span>
					</div>
				<h3 class="text-center">PLUMBING</h3>
				<div class="d-flex justify-content-around ">
					<h6>Level</h6>
					<h6>Duration</h6>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Certification</small>
					<small>6 months</small>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Diploma</small>
					<small>1 yrs</small>
				</div>

				</div>
				</a>
			</div>
<!-- ---------- -->
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/tv-repair.php">
				<div class="card">
					<div class="position-relative">
						<img src="../skill-courseimg/TV REPAIRING.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Skill
		                 </span>
					</div>
				<h3 class="text-center">TV REPAIRING</h3>
				<div class="d-flex justify-content-around ">
					<h6>Level</h6>
					<h6>Duration</h6>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Certification</small>
					<small>6 months</small>
				</div>
				<div class="d-flex justify-content-around ">
					<small>Diploma</small>
					<small>1 yrs</small>
				</div>

				</div>
				</a>
			</div>
<!-- ---------- -->



		</div>
		<!-- ---------- -->

		<?php
	include('../home-page/section-11.php');
	?>		
	</div>
</body>
</html>