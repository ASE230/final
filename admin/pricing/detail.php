<?php
  require_once('pricing.php');

  $id = $_GET['id'];
  $pricing = getPricing();
  
  $plan = $pricing[$id];
?>
<html lang="en">
<head>
  <title>Plan Details</title>
</head>
<body>
  <h1>Plan Name</h1>
  <?= $plan['name'] ?>
  <h2>Plan Description</h2>
  <?= $plan['description'] ?>
  <h2>Plan Price</h2>
  <?= $plan['price'] ?>
  <h2>Actions</h2>
  <a href="edit.php?id=<?= $id ?>">Edit</a><br />
  <a href="delete.php?id=<?= $id ?>">Delete</a><br />
  <a href="index.php"><- list</a>
</body>
</html>