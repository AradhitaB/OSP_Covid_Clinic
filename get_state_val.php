<?php include"covid_state_conn.php"; ?>

<?php
	$q = $_GET['q'];
	$at=$s[$q][8]-$s[$q][9]-$s[$q][10];
	echo "

<tr>
  <td>Total Confirmed: <span>".$s[$q][1]."</span></td>
  <td>Confirmed Today: <span>".$s[$q][8]."</span></td>

  </tr>
  <tr>
  <td>Total Recover: <span>".$s[$q][2]."</span></td>
  <td>Recover Today: <span>".$s[$q][9]."</span></td>

  </tr>
  <tr>
  <td>Total Death: <span>".$s[$q][3]."</span></td>
  <td>Death Today: <span>".$s[$q][10]."</span></td>

  </tr>
  <tr>
  <td>Total Active: <span>".$s[$q][4]."</span></td>";

  if($at>0)
        {
          echo "<td>Active Today: <span>".$at."</span></td>";
        }
        else
        {
          echo "<td>Active Today: <span>0</span></td>";
        }

echo"</tr>

<div class='update'>Last Updated on ".$s[$q][5]."</div>

";

?>



