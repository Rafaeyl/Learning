<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];


$title = $_POST['title'];
if (! Validator::string($title, 2, 20)) {
    $errors['title'] = 'A title is required';
}

if (! empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => "Create a note",
        'errors' => $errors,
    ]);
}

$db->query('INSERT INTO post(title, user_id) VALUES(:title, :user_id)', [
    'title' => $title,
    'user_id' => 3,
]);

header('location: /notes');
die();