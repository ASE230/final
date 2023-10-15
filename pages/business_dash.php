<?php
    require_once(__DIR__."/../assets/php/json.php");

    function getAllProducts($filePath) {
        return readJSON($filePath);
    }
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve the POST data
        $postData = array(
            "id" => getAllProducts('../data/products.json')[count(getAllProducts('../data/products.json')) - 1]["id"] + 1,
            "name" => $_POST["name"],
            "limit" => $_POST["limit"],
            "description" => $_POST["description"],
            "price" => $_POST["price"],
        );
    
        writeJSON('../data/products.json', $postData);
    
    } else {
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Licensify | Business Dashboard</title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="fixed-top-navbar top-nav  ">
    <div class="wrapper">
        <?php include('./partials/business_dash/navbar.php') ?>
        <div class="content-page">
            <div class="container" style="padding-top: 2%;">
                <div class="row">
                    <?php include('./partials/business_dash/active_table.php') ?>
                    <?php include('./partials/business_dash/request_table.php') ?>
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