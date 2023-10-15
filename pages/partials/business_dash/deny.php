<?php
  require_once('../../../assets/php/json.php');

  $index = $_GET['id'];
  $email = $_GET['email'];

  $requests = readJSON("../../../data/requests.json");
  updateJSON($requests, "../../../data/requests.json", $index, []);

  header('Location: ../../business_dash.php?email='.$email);
  exit();
?>