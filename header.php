<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> COVID-19 HELP DESK
    </title>
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
	}
	a:hover{
		color: black;
	}
	</style>
  </head>
  <body>
      <div class="container" style="padding: 0;">
		<div class="head">
          <a href="index.php" class="navbar-brand">OSP PROJECT</a>
            <ul class="nav nav-pills">
              <!--<li class="nav-item">-->
                <!--a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a-->
              <!--</li>-->
              <li class="nav-item">
                <a class="" href="tel:+917230053300">Ambulance Number: 108</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
		</div>
        </nav>
        </div>
