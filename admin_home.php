<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">

<?php 
  include("header.php");
  include("library.php");

  noAccessForClerk();
  noAccessForDoctor();
  noAccessForNormal();

  noAccessIfNotLoggedIn();

?>
<div class="container">
 	<h1 align=center>Admin Login for Covid-19 Tele Clinic</h1>


<div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="admin_home.php">
      <h2>Staff Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="afullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="aemail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="apassword" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
    </form>
      <hr>
                  <form method="post" action="admin_home.php">

      <div class="form-group">
                <h2>Delete Clerks</h2>
            <select class='form-control' required value=1 name="ClDelEmail">
            
            </select>
            </div>
            <div class="form-group">

            <input type="submit" class="btn btn-primary" style="padding: 10px;" value="Delete">
            </div>
          </form>
</div>

<div class="col col-xl-6 col-sm-6 " id="register1">
    <form method="post" action="admin_home.php">
      <h2>Doctor Registration</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="dfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="demail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="dpassword" required>
        </div>

        <div class="form-group">
          <label for="pwd">Speciality:</label>
            <select class='form-control' required value=1 name="dSpecialist">
              <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
              <option value="Allergist" class="option">Allergist - Allergy Expert</option>
              <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
              <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
              <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
              <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
              <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
            </select>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Register">
          <input type="reset" name="" class="btn btn-danger"></button>
        </div>
    </form>


        <hr>
                    <form method="post" action="admin_home.php">

        <div class="form-group">
                <h2>Delete Doctor</h2>
            <select class='form-control' required value=1 name="DrDelEmail">

           
            </select></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Delete">
            </div>
          </form>
        </div>
    </form>
  </div>
</div>


</div>
<div class="col col-xl-6 col-sm-6 " id="register1">
</div>
<div class="col col-xl-6 col-sm-6 " id="register1">
</div>

<?php include("footer.php"); ?>


