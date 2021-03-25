<?php include"covid_state_conn.php"; ?>
<?php include"covid_dist_conn.php"; ?>
<?php include"covid_case_time_series_conn.php"; ?>

<?php

$daily_confirm=array(array("y"=>$cts[1][1],"label"=>$cts[1][0]));
$dai_con_num = array(array($cts[1][1]));
$dai_con_dat = array(array($cts[1][0]));
for ($i=2; $i<$r_cts; $i++)
{
    array_push($daily_confirm,array("y"=>$cts[$i][1],"label"=>$cts[$i][0]));
    array_push($dai_con_num,array($cts[$i][1]));
    array_push($dai_con_dat,array($cts[$i][0]));
}

$total_confirm=array(array("y"=>$cts[1][2],"label"=>$cts[1][0]));
$tot_con_num = array(array($cts[1][2]));
$tot_con_dat = array(array($cts[1][0]));
for ($i=2; $i<$r_cts; $i++)
{
    array_push($total_confirm,array("y"=>$cts[$i][2],"label"=>$cts[$i][0]));
    array_push($tot_con_num,array($cts[$i][2]));
    array_push($tot_con_dat,array($cts[$i][0]));
}

$daily_recover=array(array("y"=>$cts[1][2],"label"=>$cts[1][0]));
$dai_rec_num = array(array($cts[1][2]));
$dai_rec_dat = array(array($cts[1][0]));
for ($i=2; $i<$r_cts; $i++)
{
    array_push($daily_recover,array("y"=>$cts[$i][3],"label"=>$cts[$i][0]));
    array_push($dai_rec_num,array($cts[$i][3]));
    array_push($dai_rec_dat,array($cts[$i][0]));
}

$total_recover=array(array("y"=>$cts[1][4],"label"=>$cts[1][0]));
$tot_rec_num = array(array($cts[1][4]));
$tot_rec_dat = array(array($cts[1][0]));
for ($i=2; $i<$r_cts; $i++)
{
    array_push($total_recover,array("y"=>$cts[$i][4],"label"=>$cts[$i][0]));
    array_push($tot_rec_num,array($cts[$i][4]));
    array_push($tot_rec_dat,array($cts[$i][0]));
}

$daily_death=array(array("y"=>$cts[1][5],"label"=>$cts[1][0]));
$dai_ded_num = array(array($cts[1][5]));
$dai_ded_dat = array(array($cts[1][0]));
for ($i=2; $i<$r_cts; $i++)
{
    array_push($daily_death,array("y"=>$cts[$i][5],"label"=>$cts[$i][0]));
    array_push($dai_ded_num,array($cts[$i][5]));
    array_push($dai_ded_dat,array($cts[$i][0]));
}

$total_death=array(array("y"=>$cts[1][6],"label"=>$cts[1][0]));
$tot_ded_num = array(array($cts[1][6]));
$tot_ded_dat = array(array($cts[1][0]));
for ($i=2; $i<$r_cts; $i++)
{
    array_push($total_death,array("y"=>$cts[$i][6],"label"=>$cts[$i][0]));
    array_push($tot_ded_num,array($cts[$i][6]));
    array_push($tot_ded_dat,array($cts[$i][0]));
}
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>covindin</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <!-- for graph india -->
        <?php include"stylehf.php" ?>
        <!-- //for state view -->
        <script>
            function showUser(str) {
            if (str == "") {
            document.getElementById("show").innerHTML = "";
            return;
            } else { 
            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
            } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("show").innerHTML = this.responseText;
              //document.getElementById("cityid").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET","get_state_val.php?q="+str,true);
            xmlhttp.send();
            }
            }
        </script>
        <script>
          function showDist(str) {
            if (str == "") {
              document.getElementById("show_dist").innerHTML = "";
              return;
            } else { 
              if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
              } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("show_dist").innerHTML = this.responseText;
                  //document.getElementById("cityid").innerHTML = this.responseText;
                }
              };
              xmlhttp.open("GET","get_dist.php?q="+str,true);
              xmlhttp.send();
            }
          }
        </script>
        <script>
          function showDistName(str) {
            if (str == "") {
              document.getElementById("show_dist_val").innerHTML = "";
              return;
            } else { 
              if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
              } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("show_dist_val").innerHTML = this.responseText;
                  //document.getElementById("cityid").innerHTML = this.responseText;
                }
              };
              xmlhttp.open("GET","get_dist_val.php?q="+str,true);
              xmlhttp.send();
            }
          }
        </script>
    </head>
    <body>
        <?php include"header.php" ?>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Information</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info-circle fa-3x"></i></div>


                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/country.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info-circle fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/state.png" alt="state" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info-circle fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/district.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-info-circle fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/graph.jpg" alt="graph" />
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 5-->
                    
                    <!-- Portfolio Item 6-->
                    
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section text-white mb-0" id="about" style="background-color: #007bff;">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">COVID-19 PRECAUTIONS</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">

                    <div class=" col-12">

                        <ol class="content">
                            <li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
                            <li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
                            <li>Don’t touch your eyes, nose or mouth</li>
                            <li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
                            <li>Stay home if you feel unwell.</li>
                            <li>If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance.</li>
                            <li>Follow the directions of your local health authority.</li>
                        </ol>
                      
                    </div>


                    
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me For Help</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form method="POST" action="insert.php">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label><input class="form-control" id="name" type="text" placeholder="Name" required="required" name="name"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label><input class="form-control" id="email" type="email" placeholder="Email Address" required="required" name="email"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label><input class="form-control" id="phone" type="tel" name="num" placeholder="Phone Number" required="required"  />
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label><textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" name="message"></textarea>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include"footer.php" ?>
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->

        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        
                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">In India</h2>
                       
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>

                        <table class="table">
                          
                          <tr>
                            <td>Total Confirmed: <span><?php print_r($s[1][1]); ?></span></td>
                            <td>Confirmed Today: <span><?php print_r($s[1][8]); ?></span></td>
                       
                          </tr>
                          <tr>
                            <td>Total Recover: <span><?php print_r($s[1][2]); ?></span></td>
                            <td>Recover Today: <span><?php print_r($s[1][9]); ?></span></td>
                       
                          </tr>
                          <tr>
                            <td>Total Death: <span><?php print_r($s[1][3]); ?></span></td>
                            <td>Death Today: <span><?php print_r($s[1][10]); ?></span></td>
                       
                          </tr>
                          <tr>
                            <td>Total Active: <span><?php print_r($s[1][4]); ?></span></td>
                            <?php $at=$s[1][8]-$s[1][9]-$s[1][10]; 
                                if($at>0)
                                {
                                  echo "<td>Active Today: <span>".$at."</span></td>";
                                }
                                else
                                {
                                  echo "<td>Active Today: <span>0</span></td>";
                                }
                                ?>
                       
                          </tr>
                          
                          
                        </table>

                        <div class="update">Last Updated on <?php print_r($s[1][5]); ?></div>


                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"></p>
                                    <button class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                               
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2-->

        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        
                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">State Wise In India</h2>
                       
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>

                        <select class="select_state" name="state" id="state" onchange="showUser(this.value)">
                            <option style="display:none;" selected="selected">Select State</option>

                            <?php

                                for ($i=2; $i<$r_s; $i++)
                                {
                                    if($s[$i][7] != null)
                                    {
                                        echo "<option value='$i'>";print_r($s[$i][0]);echo "</option>";
                                    }
                                }

                                echo "</select></h1>";


                            ?>

                        </select>

                        <table class="table" id="show">
                          
                          <!-- <tr>
                            <td>Confirmed: <span>15500</span></td>
                            <td>Confirmed Today: <span>4777</span></td>
                       
                          </tr>
                          <tr>
                            <td>Recover: <span>7500</span></td>
                            <td>Recover Today: <span>4787</span></td>
                       
                          </tr>
                          <tr>
                            <td>Death: <span>6500</span></td>
                            <td>Death Today: <span>147</span></td>
                       
                          </tr>
                          <tr>
                            <td>Active: <span>10500</span></td>
                            <td>Active Today: <span>44777</span></td>
                       
                          </tr> -->
                          
                          
                        </table>

                        <!-- <div class="update">Last Updated on 2 june 2020</div> -->


                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"></p>
                                    <button class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                               
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 3-->

        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        
                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">District Wise In India</h2>
                       
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>

                        <select class="select_state" name="state" id="state" onchange="showDist(this.value)">
                            <option style="display:none;" selected="selected">Select State</option>

                            <?php

                                for ($i=0; $i<37; $i++)
                                {
                                    if($s[$i][7] != null)
                                    {
                                        echo "<option value='$i'>";print_r($state_name[$i]);echo "</option>";
                                    }
                                }

                                echo "</select></h1>";


                            ?>

                        </select>

                        <div id="show_dist">
                            
                        </div>

                        <table class="table" id="show_dist_val">
                          
                        </table>

                        <div class="update">Updated</div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"></p>
                                    <button class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                               
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 4-->

        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        
                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Graph In India</h2>
                       
                        <br><br>
                       
                        

                              <!-- Area Chart -->
                              <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Confirmed</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <canvas id="totalConfirm"></canvas>
                                  </div>
                                  <hr>
                                  
                                </div>
                              </div>
                            

                          <br>

                          

                              <!-- Area Chart -->
                              <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Recover</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <canvas id="totalRecover"></canvas>
                                  </div>
                                  <hr>
                                  
                                </div>
                              </div>
                            

                          <br>

                          

                              <!-- Area Chart -->
                              <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Death</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <canvas id="totalDeath"></canvas>
                                  </div>
                                  <hr>
                                  
                                </div>
                              </div>
                            


                        <!-- Portfolio Modal - Text-->
                        <p class="mb-5"></p>
                        <button class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                               
                    </div>
                </div>
            </div>
        </div>

        <script src="vendor/chart.js/Chart.js"></script>

          <!-- Page level custom scripts -->
          <script src="js/demo/chart-area-demo.js"></script>
          
          
          <script type="text/javascript">
      var ctx_india_confirm = document.getElementById("totalConfirm");
        var myLineChart_india_confirm = new Chart(ctx_india_confirm, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($tot_con_dat, JSON_NUMERIC_CHECK); ?>,
            datasets: [{
              label: "Total Confirmed",
              lineTension: 0.3,
              backgroundColor: "rgba(78, 115, 223, 0.05)",
              borderColor: "rgba(78, 115, 223, 1)",
              pointRadius: 3,
              pointBackgroundColor: "rgba(78, 115, 223, 1)",
              pointBorderColor: "rgba(78, 115, 223, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: <?php echo json_encode($tot_con_num, JSON_NUMERIC_CHECK); ?>,
            },
            {
              label: "Daily Confirmed",
              lineTension: 0.3,
              backgroundColor: "rgba(78, 115, 223, 0.05)",
              borderColor: "rgba(78, 115, 223, 1)",
              pointRadius: 3,
              pointBackgroundColor: "rgba(78, 115, 223, 1)",
              pointBorderColor: "rgba(78, 115, 223, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: <?php echo json_encode($dai_con_num, JSON_NUMERIC_CHECK); ?>,
            }],
          },
          options: {
            maintainAspectRatio: false,
            layout: {
              padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
              }
            },
            scales: {
              xAxes: [{
                time: {
                  unit: 'date'
                },
                gridLines: {
                  display: false,
                  drawBorder: false
                },
                ticks: {
                  maxTicksLimit: 7
                }
              }],
              yAxes: [{
                ticks: {
                  maxTicksLimit: 5,
                  padding: 10,
                  // Include a dollar sign in the ticks
                  callback: function(value, index, values) {
                    return number_format(value);
                  }
                },
                gridLines: {
                  color: "rgb(234, 236, 244)",
                  zeroLineColor: "rgb(234, 236, 244)",
                  drawBorder: false,
                  borderDash: [2],
                  zeroLineBorderDash: [2]
                }
              }],
            },
            legend: {
              display: false
            },
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              titleMarginBottom: 10,
              titleFontColor: '#6e707e',
              titleFontSize: 14,
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              intersect: false,
              mode: 'index',
              caretPadding: 10,
              callbacks: {
                label: function(tooltipItem, chart) {
                  var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                  return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                }
              }
            }
          }
        });

        var ctx_india_recover = document.getElementById("totalRecover");
        var myLineChart_india_recover = new Chart(ctx_india_recover, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($tot_rec_dat, JSON_NUMERIC_CHECK); ?>,
            datasets: [{
              label: "Total Recover",
              lineTension: 0.3,
              backgroundColor: "rgba(78, 115, 223, 0.05)",
              borderColor: "rgba(78, 115, 223, 1)",
              pointRadius: 3,
              pointBackgroundColor: "rgba(78, 115, 223, 1)",
              pointBorderColor: "rgba(78, 115, 223, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: <?php echo json_encode($tot_rec_num, JSON_NUMERIC_CHECK); ?>,
            },
            {
              label: "Daily Recover",
              lineTension: 0.3,
              backgroundColor: "rgba(78, 115, 223, 0.05)",
              borderColor: "rgba(78, 115, 223, 1)",
              pointRadius: 3,
              pointBackgroundColor: "rgba(78, 115, 223, 1)",
              pointBorderColor: "rgba(78, 115, 223, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: <?php echo json_encode($dai_rec_num, JSON_NUMERIC_CHECK); ?>,
            }],
          },
          options: {
            maintainAspectRatio: false,
            layout: {
              padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
              }
            },
            scales: {
              xAxes: [{
                time: {
                  unit: 'date'
                },
                gridLines: {
                  display: false,
                  drawBorder: false
                },
                ticks: {
                  maxTicksLimit: 7
                }
              }],
              yAxes: [{
                ticks: {
                  maxTicksLimit: 5,
                  padding: 10,
                  // Include a dollar sign in the ticks
                  callback: function(value, index, values) {
                    return number_format(value);
                  }
                },
                gridLines: {
                  color: "rgb(234, 236, 244)",
                  zeroLineColor: "rgb(234, 236, 244)",
                  drawBorder: false,
                  borderDash: [2],
                  zeroLineBorderDash: [2]
                }
              }],
            },
            legend: {
              display: false
            },
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              titleMarginBottom: 10,
              titleFontColor: '#6e707e',
              titleFontSize: 14,
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              intersect: false,
              mode: 'index',
              caretPadding: 10,
              callbacks: {
                label: function(tooltipItem, chart) {
                  var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                  return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                }
              }
            }
          }
        });

        var ctx_india_death = document.getElementById("totalDeath");
        var myLineChart_india_death = new Chart(ctx_india_death, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($tot_ded_dat, JSON_NUMERIC_CHECK); ?>,
            datasets: [{
              label: "Total Death",
              lineTension: 0.3,
              backgroundColor: "rgba(78, 115, 223, 0.05)",
              borderColor: "rgba(78, 115, 223, 1)",
              pointRadius: 3,
              pointBackgroundColor: "rgba(78, 115, 223, 1)",
              pointBorderColor: "rgba(78, 115, 223, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: <?php echo json_encode($tot_ded_num, JSON_NUMERIC_CHECK); ?>,
            },
            {
              label: "Daily Death",
              lineTension: 0.3,
              backgroundColor: "rgba(78, 115, 223, 0.05)",
              borderColor: "rgba(78, 115, 223, 1)",
              pointRadius: 3,
              pointBackgroundColor: "rgba(78, 115, 223, 1)",
              pointBorderColor: "rgba(78, 115, 223, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: <?php echo json_encode($dai_ded_num, JSON_NUMERIC_CHECK); ?>,
            }],
          },
          options: {
            maintainAspectRatio: false,
            layout: {
              padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
              }
            },
            scales: {
              xAxes: [{
                time: {
                  unit: 'date'
                },
                gridLines: {
                  display: false,
                  drawBorder: false
                },
                ticks: {
                  maxTicksLimit: 7
                }
              }],
              yAxes: [{
                ticks: {
                  maxTicksLimit: 5,
                  padding: 10,
                  // Include a dollar sign in the ticks
                  callback: function(value, index, values) {
                    return number_format(value);
                  }
                },
                gridLines: {
                  color: "rgb(234, 236, 244)",
                  zeroLineColor: "rgb(234, 236, 244)",
                  drawBorder: false,
                  borderDash: [2],
                  zeroLineBorderDash: [2]
                }
              }],
            },
            legend: {
              display: false
            },
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              titleMarginBottom: 10,
              titleFontColor: '#6e707e',
              titleFontSize: 14,
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              intersect: false,
              mode: 'index',
              caretPadding: 10,
              callbacks: {
                label: function(tooltipItem, chart) {
                  var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                  return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                }
              }
            }
          }
        });
  </script>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
