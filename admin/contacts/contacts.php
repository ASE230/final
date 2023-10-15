<?php

use function PHPSTORM_META\type;

require_once('../../assets/php/json.php');

if($_GET['type'] == null) {
    header('Location: index.php?email=1&type=1');
    exit();
}

$type = $_GET['type'];
$email = $_GET['email'];


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
    if($type === 'business') {
        header('Location: ../../pages/business_dash.php?email='.$email);
        exit();
    } else {
        header('Location: ../../pages/customer_dash.php?email='.$email);
        exit();
    }

} else {
}
?>