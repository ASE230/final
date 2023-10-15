<?php
  require_once('../assets/php/json.php');
  $pricing = readJSON("../data/pricing.json");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Licensify</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />

  <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="fixed-top-navbar">
  <div class="wrapper">
    <div class="content-page">
      <div class="container-fluid container">
        <div class="row">
          <div class="pricing-custom-tab w-100">

            <?php include('./partials/landing/header.php') ?>
            <center>
              <a href="login.php" class="btn btn-primary mt-5">Login</a>
            </center>
            <?php include('./partials/landing/pricing.php') ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('./partials/footer.php') ?>

  <script src="../assets/js/backend-bundle.min.js"></script>
  <script src="../assets/js/customizer.js"></script>
  <script src="../assets/js/app.js"></script>
</body>

</html>