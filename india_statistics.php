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
  noAccessIfLoggedIn();
  include("nav-bar.php");
?>

<html>
<head>
<title> India's current statistics </title>

<style type="text/css">
table, th,tr,td{
  border: 1px solid black;
  border-collapse: collapse;
font-size:22.5px;
}

.center {
  margin-left: auto; 
  margin-right: auto;
  text-align:center;
}
</style>

</head>


<body style="background-color:azure">

<table width="80%" class="center"> 

<caption style="font-size:30px"> Number of Coronavirus(COVID-19) cases across the Indian States and Union territories as of March 16, 2021 <br> <br></caption>

<tr> 
<th> State </th>
<th> Confirmed </th>
<th> Active </th>
<th> Recovered </th>
<th> Deceased </th> </tr>

<tr> 
<td> Maharahtra </td> 
<td> 2347328 </td>
<td> 138813 </td>
<td> 2154253 </td>
<td> 52996 </td>
</tr>

<tr> 
<td> Kerala </td> 
<td> 1094295 </td>
<td> 26124 </td>
<td> 1063444 </td>
<td> 4423 </td>
</tr>

<tr> 
<td> Punjab </td> 
<td> 213110 </td>
<td> 12616 </td>
<td> 182283 </td>
<td> 6137 </td>
</tr>

<tr> 
<td> Karnataka </td> 
<td> 962339 </td>
<td> 9428 </td>
<td> 940489 </td>
<td> 12403 </td>
</tr>

<tr> 
<td> Tamil Nadu </td> 
<td> 861429 </td>
<td> 5450 </td>
<td> 843423 </td>
<td> 12556 </td>
</tr>

<tr> 
<td> Madhya Pradesh </td> 
<td> 270208 </td>
<td> 5286 </td>
<td> 261031 </td>
<td> 3891 </td>
</tr>

<tr> 
<td>  Gujarat </td> 
<td> 280051 </td>
<td> 4966 </td>
<td> 270658 </td>
<td> 4427 </td>
</tr>

<tr> 
<td> Chhattisgarh </td> 
<td> 318830 </td>
<td> 4661 </td>
<td> 310260 </td>
<td> 3909 </td>
</tr>

<tr> 
<td> Haryana </td> 
<td> 276080 </td>
<td> 3484 </td>
<td> 269517 </td>
<td> 3079 </td>
</tr>

<tr> 
<td> West Bengal </td> 
<td> 578853 </td>
<td> 3158 </td>
<td> 565398 </td>
<td> 10297 </td>
</tr>

<tr> 
<td> Rajasthan </td> 
<td> 323461 </td>
<td> 2661 </td>
<td> 318009 </td>
<td> 2791 </td>
</tr>

<tr> 
<td> Delhi </td> 
<td> 644489 </td>
<td> 2488 </td>
<td> 631056 </td>
<td> 10945 </td>
</tr>

<tr> 
<td> Telangana </td> 
<td> 301522 </td>
<td> 2015 </td>
<td> 297851 </td>
<td> 1656 </td>
</tr>

<tr> 
<td> Uttar Pradesh </td> 
<td> 605655 </td>
<td> 1912 </td>
<td> 594993 </td>
<td> 8750 </td>
</tr>

<tr> 
<td> Andhra Pradesh </td> 
<td> 892269 </td>
<td> 1912 </td>
<td> 2594993 </td>
<td> 8750 </td>
</tr>

<tr> 
<td> Chandigarh </td> 
<td> 23391 </td>
<td> 1199 </td>
<td> 21833 </td>
<td> 359 </td>
</tr>

<tr> 
<td> Jammu and Kashmir </td> 
<td> 127831  </td>
<td> 973 </td>
<td> 124882 </td>
<td> 1976 </td>
</tr>

<tr> 
<td> Himachal Pradesh </td> 
<td> 59869 </td>
<td> 820 </td>
<td> 58037 </td>
<td> 998 </td>
</tr>

<tr> 
<td> Goa </td> 
<td> 56100 </td>
<td> 792 </td>
<td> 54497 </td>
<td> 811 </td>
</tr>

<tr> 
<td> Uttarakhand </td> 
<td> 97931 </td>
<td> 599 </td>
<td> 94215 </td>
<td> 1704 </td>
</tr>

<tr> 
<td> Jharkhand </td> 
<td> 120771 </td>
<td> 577 </td>
<td> 119100 </td>
<td> 1094 </td>
</tr>

<tr> 
<td> Odisha </td> 
<td> 338323 </td>
<td> 556 </td>
<td> 335796 </td>
<td> 1971 </td>
</tr>

<tr> 
<td> Bihar </td> 
<td> 263100 </td>
<td> 346 </td>
<td> 261200 </td>
<td> 1553 </td>
</tr>

<tr> 
<td> Assam </td> 
<td> 217839 </td>
<td> 266 </td>
<td> 215127 </td>
<td> 1099 </td>
</tr>

<tr> 
<td> Puducherry </td> 
<td> 40068 </td>
<td> 180 </td>
<td> 39215 </td>
<td> 673 </td>
</tr>

<tr> 
<td> Lakshadweep </td> 
<td> 629 </td>
<td> 167 </td>
<td> 453 </td>
<td> 1 </td>
</tr>

<tr> 
<td> Sikkim </td> 
<td> 6191 </td>
<td> 44 </td>
<td> 5915 </td>
<td> 135 </td>
</tr>

<tr> 
<td> Ladakh </td> 
<td> 9863 </td>
<td> 43 </td>
<td> 9690 </td>
<td> 130 </td>
</tr>

<tr> 
<td> Meghalaya </td> 
<td> 14000 </td>
<td> 31 </td>
<td> 13821 </td>
<td> 148 </td>
</tr>

<tr> 
<td> Dadra and Nagar Haveli and Daman and Diu </td> 
<td> 3427 </td>
<td> 26 </td>
<td> 3369 </td>
<td> 2 </td>
</tr>

<tr> 
<td> Manipur </td> 
<td> 29315 </td>
<td> 24 </td>
<td> 28918 </td>
<td> 373 </td>
</tr>

<tr> 
<td> Tripura </td> 
<td> 33437 </td>
<td> 20 </td>
<td> 33006 </td>
<td> 388 </td>
</tr>

<tr> 
<td> Nagaland </td> 
<td> 12225 </td>
<td> 14 </td>
<td> 11966 </td>
<td> 91 </td>
</tr>

<tr> 
<td> Mizoram </td> 
<td> 4439 </td>
<td> 12 </td>
<td> 4417 </td>
<td> 10 </td>
</tr>

<tr> 
<td> Andaman and Nicobar Islands </td> 
<td> 5032 </td>
<td> 3 </td>
<td> 4967 </td>
<td> 62 </td>
</tr>

<tr> 
<td> Arunachal Pradesh </td> 
<td> 16841 </td>
<td> 2 </td>
<td> 16783 </td>
<td> 56 </td>
</tr>

</table> 
</body>
</html>

<?php 
include("footer.php"); ?>
