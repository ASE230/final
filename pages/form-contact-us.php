<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Licensify | Contact Us</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="card">
                     <div class="card-body text-center">
                        <h2>Contact Us</h2>
                        <p>We'd love to hear from you.</p>
                        <form method="post" action="../admin/contacts/contacts.php?email=<?= $_GET['email'] ?>&type=<?= $_GET['type'] ?>">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="firstname" id="firstname" required />
                                    <label class="form-label" for="firstname">First Name</label>
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
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="message" id="message" required />
                                    <label class="form-label" for="message">Message</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <p class="mt-3">
                              Need help? <a href="pages-faq.php" class="text-primary">Check our Support page</a>
                           </p>
                        </form>
                     </div>
                  </div>                  
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>