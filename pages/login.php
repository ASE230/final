<?php
   require_once('../assets/php/json.php');
   function findUser($email) {
      $theUser = [];

      $users = readJSON("../data/users/users.json");

      foreach($users as $user) {
         if($user['email'] === $email) {
            $theUser = $user;
         }
      }

      return $theUser;
   }

   if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $user = findUser($email);
      
      if($password === $user['password']) {
         if($user['type'] === 'customer') {
            header('Location: customer_dash.php?email='.$email);
            exit();
         } else {
            header('Location: business_dash.php?email='.$email);
            exit();
         }
      } else {
         print_r("Incorrect password");
      }
   }
?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Licensify | Login</title>

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
                        <h2>Login</h2>
                        <p>Login to stay connected.</p>
                        <form method="POST" action="login.php">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="email" id="email" required />
                                    <label class="form-label" for="email">Email</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password" name="password" id="password" required />
                                    <label class="form-label" for="password">Password</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Login</button>
                           <p class="mt-3">
                              Create an Account <a href="register.php" class="text-primary">Register</a>
                           </p>
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