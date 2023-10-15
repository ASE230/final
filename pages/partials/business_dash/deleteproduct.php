<?php
  require_once("../../../assets/php/json.php");
  $index = urldecode($_GET["id"]);
  $products = getAllProducts('../../../data/products.json');

  $email = $_GET['email'];

  function getAllProducts($filePath) {
    return readJSON($filePath);
  }

  if($_POST) {
    $delete = $_POST['delete'];

    if($delete === '1') {
      updateJSON($products, "../../../data/products.json", $index, []);
      header('Location: ../../business_dash.php?email='.$email);
      exit();
    } else {
      header('Location: ../../business_dash.php?email='.$email);
      exit();
    }
  }
?>

<html lang="en">
<head>
  <title>Delete Product</title>
</head>
<body>
  <h1>Delete Product <?= $products[$index - 1]['name']; ?>?</h1>
  <form method="POST" action="deleteproduct.php?email=<?= $email ?>&id=<?= $index - 1 ?>">
    <button type="submit" name="delete" value="1">Yes</button>
    <button type="submit" name="delete" value="0">Cancel</button>
  </form>
</body>
</html>