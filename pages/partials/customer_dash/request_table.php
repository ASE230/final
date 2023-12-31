<div class="col-lg-12">
  <div class="card card-block card-stretch card-height">
    <div class="card-header d-flex justify-content-between">
      <div class="iq-header-title">
        <h4 class="card-title mb-0">License Requests</h4>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive data-table">
        <table class="data-tables table" style="width:100%">
          <thead>
            <tr>
              <th>Product</th>
              <th>Requested Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($myRequests as $idx => $request) { ?>
              <tr>
                <td><?= findProduct($request['request']['productId'])['name'] ?></td>
                <td><?= $request['request']['date'] ?></td>
                <td>
                  <div class="d-flex align-items-center list-action">
                    <div class="badge bg-primary-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Action">
                      <div class="dropdown">
                        <div class="text-primary dropdown-toggle action-item" id="moreOptions1" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"></div>
                        <div class="dropdown-menu" aria-labelledby="moreOptions1">
                          <a class="dropdown-item" href="delete_request.php?id=<?= $request['index']; ?>&email=<?= $email ?>">Delete</a>
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