<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

$config = include('config.php');
date_default_timezone_set("US/Pacific");

$launchDate = $config['launchDate'];
$launchTime = strtotime($launchDate);

$serverDate = json_decode(file_get_contents("https://digitalservices.sfgov.org/servertime.php"));
$serverHour = $serverDate->hours;
$serverMinute = $serverDate->minutes;
$serverSecond = $serverDate->seconds;
$serverMonth = $serverDate->mon;
$serverDay = $serverDate->mday;
$serverYear = $serverDate->year;

$theDate = date("F j, Y H:i:s", mktime($serverHour, $serverMinute, $serverSecond, $serverMonth, $serverDay, $serverYear));
$theTime = strtotime($theDate);

if($theTime > $launchTime) {
  header('Location:'.$config['redirect']);
} else {
  include('wait.php');
}

?>