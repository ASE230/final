<?php
  require_once("../../../assets/php/json.php");
  $index = urldecode($_GET["id"]);
  $products = getAllProducts('../../../data/products.json');

  function getAllProducts($filePath) {
    return readJSON($filePath);
}

  if($_POST) {
    $delete = $_POST['delete'];

    if($delete === '1') {
      deleteJSON($products, '../../../data/products.json', $index - 1);
      header('Location: ../../business_dash.php');
      exit();
    } else {
      header('Location: ../../business_dash.php');
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
  <form method="POST">
    <button type="submit" name="delete" value="1">Yes</button>
    <button type="submit" name="delete" value="0">Cancel</button>
  </form>
</body>
</html>