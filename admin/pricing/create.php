<?php
  require_once('pricing.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $content = array(
      "name" => $name,
      "description" => $description,
      "price" => $price
    );

    createPricing($content);

    header('Location: index.php');
    exit();
  }

?>

<html lang="en">
<head>
  <title>Create Plan</title>
</head>
<body>
  <h1>Create Plan</h1>
  <form action="create.php" method="POST">
    <label>Plan Name</label><br />
    <input type="text" name="name" id="name" /><br />

    <label>Plan Description</label><br />
    <input type="text" name="description" id="description" /><br />

    <label>Plan Price</label><br />
    <input type="text" name="price" id="price" /><br />

    <button type="submit">Create</button>
    <a href="index.php">Cancel</a>
  </form>
</body>
</html>