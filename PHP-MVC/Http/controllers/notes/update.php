<?php

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

// Find the corresponding note
$query = "select * from post where id = :id";
$post  = $db->query($query, ['id' => $_POST['id']])->fetchOrFail();

// Authorize the user
$currentUserID = 3;
authorize($post['user_id'] === $currentUserID);

// Validate the form    
$errors = [];

$title = $_POST['title'];
if (! Validator::string($title, 2, 30)) {
    $errors['title'] = 'A title with no more than 50 characters is required';
}

if (count($errors)) {
    return view("notes/edit.view.php", [
        'heading' => "Edit a note",
        'errors' => $errors,
        'post' => $post,
    ]);
}

$db->query('UPDATE post set title = :title Where id = :id', [
    'id' => $_POST['id'],
    'title' => $title,
    
]);


header('location: /notes');

die();