<?php
require "vendor/autoload.php";
use illuminate\database\capsule\manager as capsule;

$message = '';
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['adress']) && isset($_POST['class']) && isset($_POST['password']) && isset($_POST['roll'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $class = $_POST['class'];
    $password = $_POST['password'];
    $roll = $_POST['roll'];

    Capsule::table('students')->insert([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'adress' => $adress,
        'class' => $class,
        'password' => $password,
        'roll' => $roll
    ]);

    $message = 'registered successfully';
};
require 'views/index.view.php';
?>