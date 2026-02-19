<?php
use Core\Database;

$config = require base_path("config.php");
$statment = new Database($config['database']);

$currentUserId = 1;

$id = $_POST['id'] ?? $_GET['id'] ?? null;
if (! $id) {
    abort(400);
}

$note = $statment->query("SELECT * FROM notes where id = :id", [
    'id' => $id
])->findOrFaild();

authorize($note['user_id'] === $currentUserId);

$statment->query("DELETE FROM notes WHERE id = :id", [
    'id' => $id
]);

header('Location: /notes');
exit();
