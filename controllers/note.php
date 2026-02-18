<?php
$config = require("config.php");
$statment = new db($config['database']);


$haeding = "Note";
$currentUserId = 1;

$note = $statment->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->findOrFaild();


authorize($note['user_id'] === $currentUserId);


require("views/note.view.php");
