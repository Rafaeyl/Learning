<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserID = 3;

$query = "select * from post where id = :id";
$post  = $db->query($query, ['id' => $_GET['id']])->fetchOrFail();

$currentUserID = 3;
authorize($post['user_id'] === $currentUserID);

view("notes/show.view.php", [
    'heading' => "View My Single notes",
    'post' => $post,
]);





