<div class="pricing-content">
  <div id="pricing-data1" class="tab-pane fade active show">
    <div class="row m-0" style="padding-left: 25%; padding-top: 2%;">

    <?php foreach($pricing as $plan) { ?>
      <?php if($plan !== []) { ?>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-block card-stretch card-height blog pricing-details">
            <div class="card-body border text-center rounded">
              <div class="pricing-header">
                <div class="icon-data"><i class="ri-star-line"></i>
                </div>
                <h2 class="mb-4 display-5 font-weight-bolder"><?= $plan['price'] ?><small class="font-size-14 text-muted">/ Month</small></h2>
              </div>
              <h3 class="mb-3"><?= $plan['name'] ?></h3>
              <ul class="list-unstyled mb-0">
                <li><?= $plan['description'] ?></li>
              </ul> <a href="register.php" class="btn btn-primary mt-5">Register</a>
            </div>
          </div>
        </div>
      <?php } ?>

    <?php } ?>

    </div>
  </div>
</div>