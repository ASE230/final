<?php
require_once('../assets/php/json.php');

function findUser($email) {
    $theUser = [];

    $users = readJSON("../data/users/users.json");

    foreach ($users as $user) {
        if ($user['email'] === $email) {
            $theUser = $user;
        }
    }

    return $theUser;
}

$email = $_GET['email'];
$user = findUser($_GET['email']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_email = $_POST['email'];
    $_password = $_POST['password'];

    $users = readJSON("../data/users/users.json");

    foreach ($users as $idx=>$user) {
        if ($user['email'] === $email) {
            $user = array(
                "email" => $_email,
                "password" => $_password,
                "type" => $user['type'],
            );

            updateJSON($users, "../data/users/users.json", $idx, $user);
            header('Location: customer_dash.php?email='.$_email);
            exit();
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Licensify | Account Settings</title>
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
                                <h2>Account Settings</h2>
                                <p>Change your account settings below</p>
                                <form method="POST" action="account.php?email=<?= $email; ?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="floating-input form-group">
                                                <input class="form-control" type="text" name="email" id="email" required value="<?= $user['email'] ?>" />
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="floating-input form-group">
                                                <input class="form-control" type="password" name="password" id="password" required value="<?= $user['password'] ?>" />
                                                <label class="form-label" for="count">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
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