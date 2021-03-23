<?php 
  include("header.php");
?>

<html>
<head>
<title> COVID-19 India Status </title>
<style type="text/css">
.center {
  margin: auto;
  width: 100%;
  height: 30%;
  padding: 10px;
  text-align: center;
  font-size:35px;
  font-family: Arial, Helvetica, sans-serif;
  color:teal;
}

.centerimg {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
th, td {
  border: 10px solid white;
  background-color: teal;
  height:200px;
  width=100px;
  font-size:30px;
  font-family: Arial, Helvetica, sans-serif;
}

.info_para{
	font-family: New Century Schoolbook, TeX Gyre Schola, serif;
	max-width: 700px;
	margin: auto;
	text-align: left;
	line-height: 1.6;
}
ul{
	display: inline-block;
	list-style-type: none;
	text-align: left;
	max-width: 700px;
}
li{
	display: inline-block;
	padding: 0px 0px 10px;
}
<!--.wrapper {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin: 0 auto -142px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 142px; /* .push must be the same height as .footer */
}
-->
</style>
</head>

<body>



<div class="center"> <p style="font-size:45px; color:teal" > COVID-19 STATUS DETAILS <p>
  <u> Live Updated Information </u> 
 </div>
<br> <br> <br> <br> <br>

<div style="width=100%; padding: 20px 10px 40px 10px; background-color: #d4dee8; color:black; text-align:center; font-size:20px">
<h2 style="text-align:center"> 
   <em> COVID-19 PRECAUTIONS </em> </h2>
	<div class = "info-para">
	<ul>
		<li>Clean your hands often. Use soap and water, or an alcohol-based hand rub. </li>
		<li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
		<li>Do NOT touch your eyes, nose or mouth.</li>
		<li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
		<li>Stay home if you feel unwell.</li>
		<li>If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance.</li>
	</ul>
	</div>


 </div>
 
 <br> <br> <br> <br> <br> <br> 

<div style=width:100%"> <br> 

 <table width="100%" style="text-align:center">
<caption style="font-size:40px; color:teal; text-align:center"> INFORMATION </caption> <tr><td>  <a href="india.php" style="color:black"> INDIA </a> </td>
 <td> <a href="state.php" style="color:black"> STATE </a> </td> 
 <td> <a href="district.php" style="color:black"> DISTRICT </a> </td> </tr>
 <tr> <td> <a href="indiagraph.php" style="color:black"> INDIA <br> Graphical View </a> </td> </tr>
 </table> <div class="push"></div> 
 </div>
<div class="footer"></div>

</body>
</html>

<?php 
include("footer.php"); 
?>
