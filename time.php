<?php
  $data = array();
  try {
      $data = file_get_contents("https://digitalservices.sfgov.org/servertime");
  } catch (Exception $ex) {
      error_log($ex->getMessage());
      header("HTTP/1.1 500 Internal Server Error");
  }
  header('Content-Type: application/json');
  echo json_encode($data);