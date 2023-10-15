<?php
  require_once('pricing.php');

  $id = $_GET['id'];

  if($_POST) {
    $delete = $_POST['delete'];

    if($delete === '1') {
      deletePricing($id);
      header('Location: index.php');
      exit();
    } else {
      header('Location: detail.php?id='.$id);
      exit();
    }
  }
?>

<html lang="en">
<head>
  <title>Delete Plan</title>
</head>
<body>
  <h1>Delete Plan <?= $id ?>?</h1>
  <form method="POST">
    <button type="submit" name="delete" value="1">Yes</button>
    <button type="submit" name="delete" value="0">Cancel</button>
  </form>
</body>
</html>