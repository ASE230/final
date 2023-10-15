<?php

require_once('../../assets/php/json.php');

function getAllContacts($filePath) {
    return readJSON($filePath);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the POST data
    $postData = array(
        "firstname" => $_POST["firstname"],
        "lastname" => $_POST["lastname"],
        "email" => $_POST["email"],
        "message" => $_POST["message"],
    );

    writeJSON('../../data/contacts.json', $postData);

} else {
}
?>