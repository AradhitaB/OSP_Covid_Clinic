<?php include"covid_dist_conn.php"; ?>
<?php
	$q = $_GET['q'];
?>

<select class="select_state" name="state" id="state" onchange="showDistName(this.value)">
    <option style="display:none;" selected="selected">Select District</option>

    <?php

        for ($i=0; $i<$r_d; $i++)
        {
             if($state_name[$q] == $d[$i][2])
  			{
                echo "<option value='$i'>";print_r($d[$i][4]);echo "</option>";
            }
        }

        echo "</select></h1>";


    ?>

</select>