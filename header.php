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
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a href="index.php" class="navbar-brand">OSP PROJECT</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <!--a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a-->
              </li>
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
        </nav>
        </div>
