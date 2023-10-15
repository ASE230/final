<?php
  require_once('../assets/php/json.php');

  $email = $_GET['email'];
  $id = $_GET['id'];
  $products = readJSON("../data/products.json");
  $theProduct = $products[$id - 1];

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $count = $_POST['count'];

    $postData = array(
      "email" => $email,
      "count" => $count,
      "productId" => $_GET['id'],
      "date" => date('Y-m-d')
    );

    writeJSON("../data/requests.json", $postData);
    header('Location: explore_products.php?email='.$email);
    exit();
  }

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Licensify | Request License</title>
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />
  <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
</head>
<body class=" ">
  <div class="wrapper">
    <section class="login-content">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center height-self-center">
          <div class="col-md-5 col-sm-12 col-12 align-self-center">
            <div class="card">
                <div class="card-body text-center">
                  <h2>License Request</h2>
                  <p>You are requesting a license for "<?= $theProduct['name'] ?>"</p>
                  <form method="POST" action="request.php?id=<?= $id; ?>">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="floating-input form-group">
                          <input class="form-control" type="text" name="email" id="email" required />
                          <label class="form-label" for="email">Email</label>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="floating-input form-group">
                          <input class="form-control" type="number" name="count" id="count" required />
                          <label class="form-label" for="count">Count (Max: <?= $theProduct['limit'] ?>)</label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Request</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="../assets/js/backend-bundle.min.js"></script>
  <script src="../assets/js/customizer.js"></script>
  <script src="../assets/js/app.js"></script>
</body>

</html>