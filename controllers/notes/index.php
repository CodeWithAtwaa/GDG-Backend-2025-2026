<?php
use Core\Database;
$config = require base_path("config.php");
$statment = new Database($config['database']);


$notes = $statment->query("SELECT * FROM notes where user_id= ?", [1])->all();

$heading = "My Notes";
view("notes/index.view.php", compact("heading", "notes"));
