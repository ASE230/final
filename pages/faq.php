<?php
    require_once("../assets/php/json.php");
    $faqData = readJSON("../data/faq.json");

    $email = $_GET['email'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Support | FAQ</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">  </head>
  <body class="fixed-top-navbar  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-top-navbar">
          <div class="container">
              <div class="iq-navbar-custom">
                  <div class="d-flex align-items-center justify-content-between">
                      <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                          <i class="ri-menu-line wrapper-menu"></i>
                          <a href="index.html" class="header-logo">
                              <!-- <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> -->
                              <h1>Licensify</h1>
                          </a>
                      </div>
                      <div class="iq-menu-horizontal">
                          <nav class="iq-sidebar-menu">
                              <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                                  <a href="index.html" class="header-logo">
                                      <!-- <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo"> -->
                                      <h1>Licensify</h1>
                                  </a>
                                  <div class="iq-menu-bt-sidebar">
                                      <i class="las la-bars wrapper-menu"></i>
                                  </div>
                              </div>
                              <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                                  <li class="">
                                      <a href="business_dash.php?email=<?= $email; ?>" class="">
                                          <span>My Products</span>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="form-contact-us.php?email=<?= $email; ?>" class="">
                                          <span>Contact Us</span>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="?email=<?= $email ?>" class="">
                                          <span>Support</span>
                                      </a>
                                  </li>
                              </ul>
                          </nav>
                      </div>
                      <nav class="navbar navbar-expand-lg navbar-light p-0">
                          <button class="navbar-toggler" type="button" data-toggle="collapse"
                              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-label="Toggle navigation">
                              <i class="ri-menu-3-line"></i>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                  <li class="caption-content">
                                      <a href="#" class="search-toggle dropdown-toggle d-flex align-items-center" id="dropdownMenuButton3" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <div class="caption ml-3">
                                              <h6 class="mb-0 line-height">My Account<i class="las la-angle-down ml-3"></i></h6>
                                          </div>
                                      </a>
                                      <div class="iq-sub-dropdown dropdown-menu user-dropdown" aria-labelledby="dropdownMenuButton3">
                                          <div class="card m-0">
                                              <div class="card-body p-0">
                                                  <div class="py-3">
                                                      <a href="account.php?email=<?= $email ?>" class="iq-sub-card">
                                                          <div class="media align-items-center">
                                                              <i class="ri-user-line mr-3"></i>
                                                              <h6>Account Settings</h6>
                                                          </div>
                                                      </a>
                                                  </div>
                                                  <a class="right-ic p-3 border-top btn-block position-relative text-center" href="login.php" role="button">
                                                       Logout
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div class="content-page">
        <div class="container-fluid container">
      <div id="faqAccordion">
         <div class="row">
            <div class="col-lg-6">
               <div class="iq-accordion career-style faq-style">
                <?php
                    if ($faqData !== false) {
                        foreach ($faqData as $index => $faqItem) {
                            $collapseId = 'collapse' . ($index + 1);
                            $headingId = 'heading' . ($index + 1);

                            echo '<div class="card iq-accordion-block">';
                            echo '<div class="active-faq clearfix" id="' . $headingId . '">';
                            echo '<div class="container-fluid">';
                            echo '<div class="row">';
                            echo '<div class="col-sm-12">';
                            echo '<a role="contentinfo" class="accordion-title" data-toggle="collapse" data-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">';
                            echo '<span>' . $faqItem['title'] . '</span>';
                            echo '</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="accordion-details collapse" id="' . $collapseId . '" aria-labelledby="' . $headingId . '" data-parent="#faqAccordion">';
                            echo '<p class="mb-0">' . $faqItem['body'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo 'Failed to load FAQ data.';
                    }
                ?>
               </div>
            </div>
         </div>
      </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="popup text-left" id="popup">
              <h4 class="mb-3">Add Action</h4>
              <div class="content create-workform">
                <div class="form-group">
                  <h6 class="form-label mb-3">Copy Your Link</h6>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><i class="las la-link"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <h6 class="form-label mb-3">Email Your Link</h6>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <h6 class="form-label mb-3">Add to Your Website</h6>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon4"><i class="las la-code"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                    <button type="submit" data-dismiss="modal" class="btn btn-primary mr-4">Cancel</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-outline-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2021 <a href="#">Calendify</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>