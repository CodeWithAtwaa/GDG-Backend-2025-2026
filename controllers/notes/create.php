<?php
use Core\Database;
use Core\Validator;

require base_path("Core/Validator.php");
$config = require base_path("config.php");
$statment = new Database($config['database']);
$errors = [];


$body = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $body = $_POST['body'];

    // check if body is less than 3 and greater than 255 characters
    if (! Validator::string($body, 3, 255)) {
        $errors['body'] = "Description must be greater then 3 and  less than 255 characters";
    }


    //  inser into database
    if (empty($errors)) {
        $statment->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => $body,
            'user_id' => 1
        ]);
    }
}

$heading = "Create Note";
view("notes/create.view.php", compact("heading", "errors"));
