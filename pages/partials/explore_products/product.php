<div id="event1" class="tab-pane fade active show">
  <div class="row">

    <?php foreach($products as $product) { ?>
      <?php if($product !== []) { ?>
      <div class="col-lg-4 col-md-6">
        <div class="card card-block card-stretch card-height">
          <div class="card-body rounded event-detail event-detail-success">
            <div class="d-flex align-items-top justify-content-between">
              <div>
                <h4 class="mb-2 mr-4"><?= $product['name'] ?></h4>
                <p class="mb-2 text-success font-weight-500 text-uppercase"><i class="las la-user-friends pr-2"></i><?= $product['limit'] ?> License Per Purchase</p>
                <p class="mb-3 card-description"><?= $product['description'] ?></p>
                <div class="d-flex align-items-center pt-3">
                  <a href="#" class="btn btn-success mr-3 px-xl-3">$<?= $product['price'] ?></a>
                  <a href="request.php?id=<?= $product['id'] ?>&email=<?= $email ?>" class="btn btn-outline-success copy px-xl-3" title="Click to request" data-toggle="tooltip">Purchase</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    <?php } ?>
    
  </div>
</div>