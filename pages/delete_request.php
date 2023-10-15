<?php
  require_once('../assets/php/json.php');

  $idx = $_GET['id'];
  $email = $_GET['email'];

  $requests = readJSON("../data/requests.json");
  updateJSON($requests, "../data/requests.json", $idx, []);

  header('Location: customer_dash.php?email='.$email);
  exit();
?>