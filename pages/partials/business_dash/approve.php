<?php
  require_once('../../../assets/php/json.php');
  $index = $_GET['id'];
  $email = $_GET['email'];
  $_email = $_GET['_email'];
  $count = $_GET['count'];
  $productId = $_GET['productId'];

  $requests = readJSON("../../../data/requests.json");
  $licenses = readJSON("../../../data/license.json");

  updateJSON($requests, "../../../data/requests.json", $index, []);
  writeJSON("../../../data/license.json", array(
    "email" => $_email,
    "count" => $count,
    "productId" => $productId,
    "date" => date('m-d-y')
  ));

  header('Location: ../../business_dash.php?email='.$email);
  exit();
?>