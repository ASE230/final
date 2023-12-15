<?php
if(count($_POST)>0 && isset($_POST['action']{0})) {
    if($_POST['action']=='signup') signup();
    else signin();
}

function signin() {
    require_once('settings.php');
    require_once('db.php');

    $result=query($pdo,'SELECT * FROM users WHERE email=?',[$_POST['email']]);
    // If no user found:
    if($result->rowCount()==0) {
        $_SESSION['error'] = 'Incorrect username/password. Please try again.';
        header('location: ../pages/login.php');
        exit();
    };
    $result=$result->fetch();
    // If password incorrect:
    if (!password_verify($_POST['password'], $result['password'])) {
        $_SESSION['error'] = 'Incorrect username/password. Please try again.';
        header('location: ../pages/login.php');
        exit();
    };
    $_SESSION['user/ID']=$result['user_id'];
    $_SESSION['user/name']=sprintf('%s %s',$result['first_name'],$result['last_name']);
    header('location: ../pages/index.php');
}

function signup() {
    require_once('settings.php');
    require_once('db.php');
    $result=query($pdo,'SELECT * FROM users WHERE email=?',[$_POST['email']]);
    // If email (user) already exists:
    if($result->rowCount()>0) {
        $_SESSION['error'] = 'User already exists. Please try a different email.';
        header('location: ../pages/register.php');
        exit();
    }
    else query($pdo,'INSERT INTO users(first_name,last_name,email,password) VALUES(?,?,?,?)',[$_POST['first_name'],$_POST['last_name'],$_POST['email'],
    password_hash($_POST['password'],PASSWORD_DEFAULT)]);
    header('location: ../pages/index.php');
}