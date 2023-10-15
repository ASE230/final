<?php
    require_once('../assets/php/json.php');
    $email = $_GET['email'];

    $requests = readJSON("../data/requests.json");
    $myRequests = [];

    foreach($requests as $idx => $request) {
        if($request !== []) {
            if($request['email'] === $email) {
                $requestWithIndex = [
                    'request' => $request,
                    'index' => $idx
                ];
                $myRequests[] = $requestWithIndex;
            }
        }
    }

    $licenses = readJSON("../data/license.json");
    $myLicense = [];
    
    foreach ($licenses as $idx => $license) {
        if($license !== []) {
            if ($license['email'] == $email) {
                $licenseWithIndex = [
                    'license' => $license,
                    'index' => $idx
                ];
                $myLicense[] = $licenseWithIndex;
            }
        } 
    }

    function findProduct($id) {
        $products = readJSON("../data/products.json");
        foreach($products as $product) {
            if($product !== []) {
                if($product['id'] === $id) {
                  return $product;
                }
            }
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Licensify | Customer Dashboard</title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="fixed-top-navbar top-nav  ">
    <div class="wrapper">
        <?php include('./partials/customer_dash/navbar.php') ?>
        <div class="content-page">
            <div class="container" style="padding-top: 2%;">
                <div class="row">
                    <?php include('./partials/customer_dash/active_table.php') ?>
                    <?php include('./partials/customer_dash/request_table.php') ?>
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