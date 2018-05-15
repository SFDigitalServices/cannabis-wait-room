<?php
  $data = [];
  try {
      $data = file_get_contents("https://digitalservices.sfgov.org/servertime.php");
  } catch (Exception $ex) {
      echo $ex;
  }
  header('Content-Type: application/json');
  echo json_encode($data);
?>