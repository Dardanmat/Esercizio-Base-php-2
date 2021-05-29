<?php

$dataInput = new DateTime($_POST["data_di_nascita"]); //data di input
$data = new DateTime(); //data di oggi
$data->modify('-18 year'); //data di oggi 18 anni fa

//echo $data->format('Y-m-d')."<br>";
//echo $dataInput->format('Y-m-d');

if($dataInput <= $data) echo "<br>maggiorenne";
else echo "<br>minorenne";
?>