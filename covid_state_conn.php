<?php
$data = file_get_contents("https://api.covid19india.org/csv/latest/state_wise.csv");
$rows = explode("\n",$data);
$s = array();

foreach($rows as $row) {
    $s[] = str_getcsv($row);
}

$r_s=count($s);
?>