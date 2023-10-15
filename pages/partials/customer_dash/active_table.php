<?php
  function diffDate($then) {
    $now = strtotime(date('Y-m-d'));
    $subtract = strtotime($then);

    $secs = $subtract - $now;
    $days = $secs / 86400;

    return $days;
  }
?>

<div class="col-lg-12">
  <div class="card card-block card-stretch card-height">
    <div class="card-header d-flex justify-content-between">
      <div class="iq-header-title">
        <h4 class="card-title mb-0">Active Licenses</h4>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive data-table">
        <table class="data-tables table" style="width:100%">
          <thead>
            <tr>
              <th>Product</th>
              <th>Count</th>
              <th>Expiration Date</th>
              <th>Time Left (days)</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($myLicense as $idx => $license) { ?>
              <tr>
                <td><?= findProduct($license['license']['productId'])['name'] ?></td>
                <td><?= $license['license']['count'] ?></td>
                <td><?= $license['license']['date'] ?></td>
                <td><?= diffDate($license['license']['date']) ?></td>
                <td>
                  <div class="d-flex align-items-center list-action">
                    <div class="badge bg-primary-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Action">
                      <div class="dropdown">
                        <div class="text-primary dropdown-toggle action-item" id="moreOptions1" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">

                        </div>
                        <div class="dropdown-menu" aria-labelledby="moreOptions1">
                          <a class="dropdown-item" href="delete_license.php?id=<?= $license['index'] ?>&email=<?= $email ?>">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>