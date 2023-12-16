<?php
   require_once('../lib/settings.php');
   require_once('../lib/db.php');
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
                        <?php
                        if (isset($_SESSION['error'])) {
                        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
                        unset($_SESSION['error']); // Clear the error message after displaying it
                        }
                        ?>
                        <form method="POST" action="../lib/auth.php">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="first_name" id="first_name" required />
                                    <label class="form-label" for="first_name">First Name</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="last_name" id="last_name" required />
                                    <label class="form-label" for="last_name">Last Name</label>
                                 </div>
                              </div>
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
                              <div class="col-lg-12">
                                 <div class="custom-control custom-checkbox mb-3 text-left">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I want to register a business account</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary" name="action" value="signup">Register</button>
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