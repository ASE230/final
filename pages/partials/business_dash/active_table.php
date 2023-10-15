<?php
  require_once("business_dash.php");
  $products = getAllProducts("../data/products.json");

?>

<div class="col-lg-12">
  <div class="card card-block card-stretch card-height">
    <div class="card-header d-flex justify-content-between">
      <div class="iq-header-title">
        <h4 class="card-title mb-0">Active Products</h4>
      </div>
      <a href="add_products.php" class="btn btn-danger mr-3 px-xl-3">Add Products</a>
    </div>
    <div class="card-body">
      <div class="table-responsive data-table">
        <table class="data-tables table" style="width:100%">
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Per Purchase Limit</th>
              <th>Description</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php foreach ($products as $product) { ?>
              <tr>
                <td><?php echo $product["id"]; ?></td>
                <td><?php echo $product["name"]; ?></td>
                <td><?php echo $product["limit"]; ?></td>
                <td><?php echo $product["description"]; ?></td>
                <td><?php echo $product["price"]; ?></td>
                <td>
                  <div class="d-flex align-items-center list-action">
                    <div class="badge bg-primary-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Action">
                      <div class="dropdown">
                        <div class="text-primary dropdown-toggle action-item" id="moreOptions1" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                        </div>
                        <div class="dropdown-menu" aria-labelledby="moreOptions1">
                          <a class="dropdown-item" href="partials/business_dash/editproduct.php?id=<?= urlencode($product["id"]); ?>">Edit</a>
                          <a class="dropdown-item" href="partials/business_dash/deleteproduct.php?id=<?= urlencode($product["id"]); ?>">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php } ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>