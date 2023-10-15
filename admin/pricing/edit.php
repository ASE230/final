<?php
  require_once('pricing.php');

  $id = $_GET['id'];
  $pricing = getPricing();
  $plan = $pricing[$id];

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    updatePricing($id, array("name" => $name, "description" => $description, "price" => $price));

    header('Location: detail.php?id='.$id);
    exit();
  }
?>

<html lang="en">
<head>
  <title>Edit Details</title>
</head>
<body>
<form method="POST" action="edit.php?id=<?= $id ?>">
  <label>Plan Name</label><br />
  <input type="text" name="name" id="name" value="<?= $plan['name'] ?>" /><br />

  <label>Plan Description</label><br />
  <input type="text" name="description" id="description" value="<?= $plan['description'] ?>" /><br />

  <label>Plan Price</label><br />
  <input type="text" name="price" id="price" value="<?= $plan['price'] ?>" /><br />

  <button type="submit">Save</button>
  <a href="detail.php?id=<?= $id ?>">Cancel</a>
</form>
</body>
</html>