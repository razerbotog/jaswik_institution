<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
    <style type="text/css">
      .container-fluid{
        box-sizing: border-box;
        margin:0;
        padding:0;
        height: 100vh;
        width:100vw;


      }
      ::-webkit-scrollbar{
        display: none;
      }
      body{
        background-color: #C5DFF8;
      }
    label{
     margin-left: 20px;
    }
    input{
      border: none;
      border-radius: 20px;
    }
     
    @media screen and (max-width:767px){
      #floatingInput2{
        margin-top:20px;
        padding-top: 10px;
      }
      #gender{
        margin-top:-5px;
      }
      #study{
        margin-top: 10px;
      }
      #labelInput2{
        padding-top: 30px;
      }
    }
    </style>
  </head>
  <body>
    <div class="container-fluid"><h3 class="text-center">ENQUIRY FORM BY Jaswik Institution of Professional Studies</h3>

      <div class="form">
        <form action="enquiry-formdb.php" method="POST"> 
           <!-- <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div> -->
          <div class="row d-flex justify-content-center">
  <div class="col-md-4  form-floating col-sm-12">
    <!-- <input type="text" class="form-control" placeholder="Full name" aria-label="First name" id="validationCustom01" required> -->
 <input type="text" class="form-control" id="floatingInput1" placeholder="" name="name" required>
  <label for="floatingInput1">Enter Your Full Name</label>
   
  </div>
  <div class="col-md-4 form-floating col-sm-12">
    <!-- <input type="text" class="form-control" placeholder="Phone No." aria-label="Phone No." id="validationCustom01"required> -->
     <input type="text" class="form-control" id="floatingInput2" placeholder="" name="phone" required>
  <label for="floatingInput2" id="labelInput2">Enter Your Phone No.</label>
  </div>
</div>
<div class="row d-flex justify-content-center mt-4">
  <div class="col-md-4">
    <select class="form-select" aria-label="Default select example" id="gender" name="gender">
  <option selected value="notselected">Select Gender</option>
  <option value="Male" required>Male</option>
  <option value="Female">Female</option>
  <option value="Prefer Not to say.">Prefer Not to say.</option>
</select>
  </div>
  <div class="col-md-4"> 
<select class="form-select" aria-label="Default select example" id="study" name="study">
  <option selected value="notselected">Select Qualification</option>
  <option value="10th Pass">10th Pass</option>
  <option value="12th pass">12th pass</option>
  <option value="Under Graduated">Under Graduated</option>
  <option value="Post Graduated">Post Graduated</option>
</select>
  </div>
  
</div>
 <div class="row d-flex justify-content-center">
  <div class="col-md-8 mt-3 form-floating col-sm-12">
     <input type="email" class="form-control" id="floatingInput3" placeholder="name@example.com" name="email" required>
  <label for="floatingInput3">Enter Your Email</label>
  </div>
   
</div>
 
<div class="row d-flex justify-content-center"> 
  <div class="col-md-4 mt-4 col-sm-12">
  <select class="form-select" aria-label="Default select example" name="professionalcourse">
  <option selected value="notselected">Select Professional course</option>
  <option value="WEB DESIGNING & DEVELOPMEN">WEB DESIGNING & DEVELOPMENT</option>
  <option value="GRAPHIC DESIGNING">GRAPHIC DESIGNING</option>
  <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
  <option value="MS OFFICE">MS OFFICE</option>
  <option value="ADVANCE MS EXCEL">ADVANCE MS EXCEL</option>
  <option value="TALLY WITH GST">TALLY WITH GST</option>
  <option value="DATA ENTRY">DATA ENTRY</option>
  <option value="SALES MASTER/STRATEGIES">SALES MASTER/STRATEGIES</option>
  <option value="PURCHASE MASTER/STRATEGIES">PURCHASE MASTER/STRATEGIES</option>
  <option value="RETAIL MANAGEMENT">RETAIL MANAGEMENT</option>
  <option value="HOTEL MANAGEMENT">HOTEL MANAGEMENT</option>
  <option value="MARKET RESEARCH">MARKET RESEARCH</option>
  <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
  <option value="OFFFICE MANAGEMENT">OFFFICE MANAGEMENT</option>
  <option value="DATA ANALYSIS + DATA SCIENCE">DATA ANALYSIS + DATA SCIENCE</option>
  <option value="VIDEO EDITING">VIDEO EDITING</option>
  <option value="ETHICAL HACKING">ETHICAL HACKING</option>
</select></div>
 
<!-- <div class="row d-flex justify-content-center">  -->
  <div class="col-md-4 mt-4 col-sm-12">
  <select class="form-select" aria-label="Default select example" name="vocationalcourse">
  <option selected value="notselected">Select Vocational course</option>
  <option value="BEAUTY CULTURE">BEAUTY CULTURE</option>
  <option value="CUTTING & TAILORING">CUTTING & TAILORING</option>
  <option value="COOKING">COOKING</option>
  <option value="NURSING">NURSING</option>
  <option value="BAKERY">BAKERY</option>
  <option value="HAIR STYLIST">HAIR STYLIST</option>
  <option value="PERSONALITY DEVELOPMENT">PERSONALITY DEVELOPMENT</option>
  <option value="SELF GROOMING & CONFIDENCE DEVELOPMENT">SELF GROOMING & CONFIDENCE DEVELOPMENT</option>
  <option value="COMMUNICATION & SOFT SKILLS">COMMUNICATION & SOFT SKILLS</option>
  <option value="MUSIC">MUSIC</option>
 
</select></div>
</div>
<div class="row d-flex justify-content-center">
  <div class="col-md-8 mt-4 col-sm-12">
  <select class="form-select" aria-label="Default select example" name="skillcourse">
  <option selected value="notselected">Select Skill Training Course</option>
  <option value="MOBILE REPAIRING">MOBILE REPAIRING</option>
  <option value="COMPUTER HARDWARE">COMPUTER HARDWARE</option>
  <option value="COMPUTER NETWORKING">COMPUTER NETWORKING</option>
  <option value="LAPTOP REPAIRING">LAPTOP REPAIRING</option>
  <option value="BAKERY">BAKERY</option>
  <option value="A/C & REFREGERATION REPAIRING">A/C & REFREGERATION REPAIRING</option>
  <option value="TV REPAIRING">TV REPAIRING</option>
  <option value="AUTOMOTIVE REPAIRING">AUTOMOTIVE REPAIRING</option>
  <option value="MICROWAVE & WASHING MACHINE REPAIRING">MICROWAVE & WASHING MACHINE REPAIRING</option>
  <option value="ELECTRICIAN">ELECTRICIAN</option>
  <option value="PLUMBING">PLUMBING</option>
 
</select></div>
</div>
<div class="row d-flex justify-content-center">
<div class="form-floating col-md-8 mt-4 col-sm-12">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comments"></textarea>
  <label for="floatingTextarea">Comments</label>
  <button type="submit" class="btn btn-success mt-4">SUBMIT</button>
</div>
        </div>
</form>
      </div>
    </div>













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>