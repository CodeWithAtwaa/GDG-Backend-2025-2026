<?php
use Core\App;
use Core\Database;

$statment = App::container()->resolve(Database::class);



$currentUserId = 1;

$note = $statment->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->findOrFaild();


authorize($note['user_id'] === $currentUserId);


$heading = "Note";
view("notes/show.view.php", compact("heading", "note"));
