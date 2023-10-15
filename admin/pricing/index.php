<?php
  require_once('./pricing.php');
  $pricing = getPricing();
?>

<html lang="en">
<head>
  <title>Pricing Plans</title>
</head>
<body>
<a href="create.php">Create Plan</a>
  <table>
    <thead>
      <tr>
        <th>Action</th>
        <th>Plan Name</th>
        <th>Plan Price</th>
        <th>Plan Description</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($pricing as $idx => $plan) { ?> 
        <?php if($plan !== []) { ?>
        <tr>
          <td>
            <a href="detail.php?id=<?= $idx; ?>">
              Details
            </a>
          </td>
          <td><?= $plan['name']; ?></td>
          <td><?= $plan['price']; ?></td>
          <td><?= $plan['description']; ?></td>
        </tr>
        <?php } ?>
      <?php } ?>
    </tbody>
  </table>
  
</body>
</html>