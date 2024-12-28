<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query =  "select * from post where user_id = 3";

$posts = $db->query($query)->fetchAll();


view("notes/index.view.php",[
    'heading' => "My notes",
    'posts' => $posts,
]);

