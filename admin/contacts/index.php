<?php

require_once('contacts.php');
$contacts = getAllContacts('../../data/contacts.json');
$index = 0;

?>

<html lang="en">
<head>
    <title>Contact Requests</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Action</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) { ?>
                <tr>
                    <td>
                        <a href="detail.php?counter=<?= urlencode($index); ?>&email=1&type=1">
                            Details
                        </a>
                    </td>
                    <td><?= $contact['firstname']; ?></td>
                    <td><?= $contact['lastname']; ?></td>
                    <td><?= $contact['email']; ?></td>
                    <td><?= $contact['message']; ?></td>
                </tr>
            <?php $index++; } ?>
        </tbody>
    </table>
</body>
</html>