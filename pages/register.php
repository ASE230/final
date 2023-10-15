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

   function createUser($email, $password, $type) {
      $postData = array(
         "email" => $email,
         "password" => $password,
         "type" => $type,
      );

      writeJSON("../data/users/users.json", $postData);
   }

   if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $type = 'business';
      
      if($_POST['customCheck1'] == null) {
         $type = 'customer';
      }

      $user = findUser($email);
      
      if($user === []) {
         createUser($email, $password, $type);
         if($type == 'customer') {
            header('Location: customer_dash.php?email='.$email);
            exit();
         } else {
            header('Location: business_dash.php?email='.$email);
            exit();
         }
      } else {
         print_r("An account with that email address already exists");
      }
   }
?>


<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Licensify | Register</title>

   <link rel="shortcut icon" href="../assets/images/favicon.ico" />
   <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
   <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
   <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
   <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="">
   <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="card">
                     <div class="card-body text-center">
                        <h2>Register</h2>
                        <p>Create your Licensify account.</p>
                        <form method="POST" action="register.php">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="firstName" id="firstName" required />
                                    <label class="form-label" for="firstName">First Name</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="lastname" id="lastname" required />
                                    <label class="form-label" for="lastname">Last Name</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="email" id="email" required />
                                    <label class="form-label" for="email">Email</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password" name="password" id="password" required />
                                    <label class="form-label" for="password">Password</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password" name="password" id="password1" required />
                                    <label class="form-label" for="password1">Confirm Password</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="custom-control custom-checkbox mb-3 text-left">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I want to register a business account</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Register</button>
                           <p class="mt-3">
                              Already have an Account <a href="login.php" class="text-primary">Login</a>
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