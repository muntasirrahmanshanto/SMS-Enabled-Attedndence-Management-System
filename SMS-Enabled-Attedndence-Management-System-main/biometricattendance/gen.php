<?php

$response = file_get_contents("http://localhost/rahat/getdata.php?FingerID=1&device_token=909397a3&sn=1");
//echo $response;
$rest = substr($response, 14);
echo $rest;
