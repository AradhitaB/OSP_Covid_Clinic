<?php

$data = file_get_contents("https://api.covid19india.org/csv/latest/case_time_series.csv");
$rows = explode("\n",$data);
$cts = array();

foreach($rows as $row) {
    $cts[] = str_getcsv($row);
}

$r_cts=count($cts);

?>