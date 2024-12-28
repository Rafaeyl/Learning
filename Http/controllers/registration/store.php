<?php

use Core\Validator;
use Core\App;
use Core\Database;

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];


// Validate the user inputs

$errors = [];

if (!Validator::string($password, 5, 255)) {
    $errors['password'] = "Please provide a password";
}

if (!Validator::string($username, 2, 255)) {
    $errors['username'] = "Please provide a username";
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

// Check if theres already a user

$db   = App::resolve(Database::class);
$user = $db->query('select * from users where email = :email', [
    'email' => $email,
])->fetch();

if ($user) {

    header('location: /');

} else {

    $db->query('INSERT INTO users(username, email, password) VALUES (:username, :email, :password)', [
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),

    ]);

    login($user);

    header('location: /');
    exit();
}