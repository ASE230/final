<?php
    require_once('contacts.php');
    $contacts = getAllContacts("../../data/contacts.json");

    if (isset($_GET["counter"])) {
        $counterCount = $_GET["counter"];
        $foundContact = null;
    
        foreach ($contacts as $contact) {
            $foundContact = $contacts[$counterCount];
            break;
        }
    }    
?>

<html lang="en">
<head>
  <title>Detail</title>
</head>
<body>
<?php if (isset($foundContact)) { ?>
        <h1>Contact Details</h1>
        <ul>
            <li><strong>First Name:</strong> <?= $foundContact["firstname"]; ?></li>
            <li><strong>Last Name:</strong> <?= $foundContact["lastname"]; ?></li>
            <li><strong>Email:</strong> <?= $foundContact["email"]; ?></li>
            <li><strong>Message:</strong> <?= $foundContact["message"]; ?></li>
        </ul>
    <?php } else { ?>
        <p>Contact not found.</p>
    <?php } ?>

  <h2>Actions</h2>
  <a href="index.php"><- list</a>
</body>
</html>