<?php include"covid_dist_conn.php"; ?>

<?php
	$q = $_GET['q'];
	
	echo "

<tr>
  <td>Total Confirmed: <span>".$d[$q][5]."</span></td>
  <td>Confirmed Today: <span>".$d[$q][10]."</span></td>

  </tr>
  <tr>
  <td>Total Recover: <span>".$d[$q][7]."</span></td>
  <td>Recover Today: <span>".$d[$q][12]."</span></td>

  </tr>
  <tr>
  <td>Total Death: <span>".$d[$q][8]."</span></td>
  <td>Death Today: <span>".$d[$q][13]."</span></td>

  </tr>
  <tr>
  <td>Total Active: <span>".$d[$q][6]."</span></td>
  <td>Active Today: <span>".$d[$q][11]."</span></td>";

echo"</tr>

";

?>



