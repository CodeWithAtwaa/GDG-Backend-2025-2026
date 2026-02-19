<?php
require 'Validator.php';
$config = require("config.php");
$statment = new db($config['database']);



$haeding = "Create Note";

$body = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
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

require ("views/notes/create.view.php");
