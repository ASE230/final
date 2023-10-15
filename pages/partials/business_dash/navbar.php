<div class="iq-top-navbar">
  <div class="container">
    <div class="iq-navbar-custom">
      <div class="d-flex align-items-center justify-content-between">
        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
          <i class="ri-menu-line wrapper-menu"></i>
          <a href="" class="header-logo">
            <h2>Licensify</h2>
          </a>
        </div>
        <div class="iq-menu-horizontal">
          <nav class="iq-sidebar-menu">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="index.html" class="header-logo">
                <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
              </a>
              <div class="iq-menu-bt-sidebar">
                <i class="las la-bars wrapper-menu"></i>
              </div>
            </div>
            <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
              <li class="active">
                <a href="business_dash.php?email=<?= $email ?>" class="">
                  <span>My Products</span>
                </a>
              </li>
              <li class="">
                <a href="form-contact-us.php" class="">
                  <span>Contact Us</span>
                </a>
              </li>
              <li class="">
                <a href="faq.php?email=<?= $email; ?>" class="">
                  <span>Support</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-list align-items-center">
              <li class="caption-content">
                <a href="#" class="search-toggle dropdown-toggle d-flex align-items-center" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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