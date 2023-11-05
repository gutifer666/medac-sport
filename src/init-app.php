<?php

$userForm = [
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'shippingAddress' => $_POST['shippingAddress']
];
echo "hello";
$userController = new UserController();
$userController->register($userForm);
    
