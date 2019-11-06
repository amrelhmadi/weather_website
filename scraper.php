<?php
/* <!--
1
$city=$_GET['city'];
$city=str_replace(" ","",$city);


$contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

$subject='/<span class="phrase">(.*?)<\/s/i';

preg_match($subject,$contents,$matches);
echo $matches[0];
-->
*/

/*
2
<!--
if(!$_GET['city']) {
    $contents=file_get_contents("https://www.weather-forecast.com/");
    
} elseif ($_GET['city']) {
    $city=$_GET['city'];
    $contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
    $subject='/<span class="phrase">(.*?)<\/s/i';

    preg_match($subject,$contents,$matches);
    $weather = $matches[0];
    
}
-->
*/



$city=$_GET['city'];
$city=str_replace(" ","",$city);


$contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

$subject='/<span class="phrase">(.*?)<\/s/i';

preg_match($subject,$contents,$matches);
echo $matches[0];








?>