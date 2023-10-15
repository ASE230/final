<?php
    require_once('../assets/php/json.php');
    $products = readJSON("../data/products.json");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Licensify | Explore Products</title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="fixed-top-navbar top-nav  ">
    <div class="wrapper">
        <?php include('./partials/explore_products/navbar.php') ?>
        <div class="content-page">
            <?php include('./partials/explore_products/header.php') ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="event-content">
                            <?php include('./partials/explore_products/product.php') ?>
                        </div>
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