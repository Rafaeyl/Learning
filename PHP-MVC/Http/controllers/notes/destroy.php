<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "select * from post where id = :id";
$post  = $db->query($query, ['id' => $_POST['id']])->fetchOrFail();

$currentUserID = 3;
authorize($post['user_id'] === $currentUserID);


$db->query('delete from post where id = :id', [
    'id' => $_POST['id'],
]);

header('location: /notes');
exit();




