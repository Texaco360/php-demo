<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

if( $_SERVER['REQUEST_METHOD'] === 'POST'){

    $query = "select * from notes where id=:id";

    $note = $db->query($query, [
        ':id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] == $currentUserId);
    //delete
    $db->query('delete from notes where id = :id',['id' => $_GET['id']]);

    header('location: /notes');
}else{

    $query = "select * from notes where id=:id";

    $note = $db->query($query, [
        ':id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] == $currentUserId);

    view("notes/show.view.php" , [
        'heading' => 'My Notes',
        'note' => $note,
    ]);
}

