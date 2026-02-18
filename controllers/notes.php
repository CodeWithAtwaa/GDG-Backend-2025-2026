<?php
$config = require("config.php");
$statment = new db($config['database']);


$haeding = "My Notes";


$notes = $statment->query( "SELECT * FROM notes where user_id= ?", [1])->all();

require("views/notes.view.php");
