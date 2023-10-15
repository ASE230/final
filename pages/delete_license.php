<?php
  require_once('../assets/php/json.php');

  $idx = $_GET['id'];
  $email = $_GET['email'];

  $licenses = readJSON("../data/license.json");

  updateJSON($licenses, "../data/license.json", $idx, []);

  header('Location: customer_dash.php?email='.$email);
  exit();
?>