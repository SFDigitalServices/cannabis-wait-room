<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");


$config = include('config.php');
date_default_timezone_set("US/Pacific");

$launchDate = $config['launchDate'];
// $launchDate = "May 15, 2018 8:10:00pm";
$launchTime = strtotime($launchDate);

$todayDate = date("F j, Y H:i:s");
$todayTime = strtotime($todayDate);

// echo '<div>today date time: ' . $today . '</div>';
// echo '<div>launch date time: ' . date("F j, Y h:i:s", $launchTime) . '</div>';

// echo $todayTime > $launchTime ? 'we are past launch' : 'we are not past launch';
if($todayTime > $launchTime) {
  header('Location:'.$config['redirect']);
} else {
  include('wait.php');
}

?>