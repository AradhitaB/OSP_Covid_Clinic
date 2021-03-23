<?php

$data = file_get_contents("https://api.covid19india.org/csv/latest/district_wise.csv");
$rows = explode("\n",$data);
$d = array();

foreach($rows as $row) {
    $d[] = str_getcsv($row);
}

$r_d=count($d);

$state_name=array();
$state_code=array();

for ($i=1; $i<$r_d; $i++)
{
	$state_code[]=$d[$i][1];
	$state_name[]=$d[$i][2];
}


$state_code = array_values(array_unique($state_code));
$state_name = array_values(array_unique($state_name));


?>