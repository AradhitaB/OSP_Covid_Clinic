<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> COVID-19 TeleHealth Clinic
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
    <style>
  .head{
    background-color: #8888c3;
    color: white;
    padding: 10px 0px;
    text-shadow: 1px 1px #000000;
  }
  .navbar-brand{
    padding: 10px 20px;
    font-size: 200%;
    font-weight: 900;
    font-stretch: expanded;
    font-family: stencil fantasy;
	font-color: white;
  }
  .navbar a{
	  color: white;
  }
  a:hover{
    color: black;
	text-shadow: none;
	font-weight: 500;
  }
  body{
	margin: 0;
	font-family: Roboto, sans-serif;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	color: #212529;
	text-align: left;
	background-color: #fff;
  }
  </style>
  </head>
  <body>
  <div class="head">
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a href="index.php" class="navbar-brand">OSP PROJECT</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <!--a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a-->
              </li>
              <li class="nav-item">
                <a href="">Covid-19 Daily Statistics</a>
                
              </li>
              <li class="nav-item">
                <a href="https://www.mohfw.gov.in/covid_vaccination/vaccination/index.html">Covid-19 Vaccine Information</a>
              </li>
                <li class="nav-item">
                <a href="https://www.mohfw.gov.in/pdf/StatewiseCovidHospitalslink19062020.pdf">Covid-19 facilities by State</a>
              </li>
              <li class="nav-item">
                <a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu&hl=en_GB">Arogya Setu App</a>

              </li>

             

              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
	</div>
