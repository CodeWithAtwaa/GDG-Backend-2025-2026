<?php
use Core\App;
use Core\Database;

$statment = App::container()->resolve(Database::class);


$notes = $statment->query("SELECT * FROM notes where user_id= ?", [1])->all();

$heading = "My Notes";
view("notes/index.view.php", compact("heading", "notes"));
