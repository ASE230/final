<?php
  
  require_once("../../../assets/php/json.php");

  function getAllProducts($filePath) {
      return readJSON($filePath);
  }

  $email = $_GET['email'];

  $index = $_GET['id'];
  $jsonFilePath = '../../../data/products.json';

  $products = getAllProducts($jsonFilePath);

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $limit = $_POST['limit'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $memberData = array(
        'id' => $id,
        'name' => $name,
        'limit' => $limit,
        'description' => $description,
        'price' => $price
    );

    updateJSON($products, $jsonFilePath, $index, $memberData);

    header('Location: ../../business_dash.php?email='.$email);

    exit();
  }
?>

<html lang="en">
<head>
  <title>Edit Product</title>
</head>
<body>
  <form method="POST" action="editproduct.php?id=<?= $index ?>&email=<?= $email ?>">
    <label>ID</label>
    <input type="text" name="id" value="<?= $products[$index]['id'] ?>" /> <br />
    <label>Name</label><br />
    <input type="text" name="name" value="<?= $products[$index]['name'] ?>" /> <br />
    <label>Limit</label><br />
    <input type="text" name="limit" value="<?= $products[$index]['limit'] ?>" /> <br />
    <label>Description</label><br />
    <textarea name="description" cols="96" rows="4"><?= $products[$index]['description'] ?></textarea><br />
    <label>Price</label><br />
    <input type="text" name="price" value="<?= $products[$index]['price'] ?>" /> <br />
    <button type="submit">Save</button>
    <a href="../../business_dash.php?email=<?= $email ?>">Cancel</a>
  </form>
</body>
</html>