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
		.container-fluid{
			padding:0;
		}
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
				<h2 class="px-5  py-5 text-white border border-white">Professional Courses</h2>
			</div>
		</div>
		<div class="row courses d-flex justify-content-lg-evenly justify-content-md-between justify-content-sm-evenly my-5 p-3">
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/digitalmarketing.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/digital marketing.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">Digital Marketing</h3>
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
				<a href="../all-courses/webdevlopment.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/web development.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">Web Devlopment</h3>
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
				<a href="../all-courses/webdesign.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/web design.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">Web Design</h3>
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
				<a href="../all-courses/ai.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/ARTIFICIAL INTELLIGENCE.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">AI</h3>
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
				<div class="row courses d-flex justify-content-lg-evenly justify-content-md-between justify-content-sm-evenly my-5 p-3">
<!-- ---------- -->
			<div class="col-lg-3 col-md-4 col-sm-5">
				<a href="../all-courses/videoediting.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/VIDEO EDITING.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">VIDEO EDITING</h3>
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
				<a href="../all-courses/salesmaster.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/SALES MASTER.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">SALES MASTER</h3>
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
				<a href="../all-courses/retailmanagement.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/RETAIL MANAGEMENT.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">RETAIL MANAGEMENT</h3>
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
				<a href="../all-courses/purchasemaster.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/PURCHASE.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">PURCHASE Master</h3>
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
				<a href="../all-courses/graphicdesign.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/graphic design.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">GRAPHICS</h3>
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
				<a href="../all-courses/dataentry.php">
				<div class="card">
					<div class="position-relative">
						<img src="../professional-courseimg/data entry.jpg" class="img-fluid">
						<span class="cat-meta">
		                   Professional
		                 </span>
					</div>
				<h3 class="text-center">Data Entry</h3>
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