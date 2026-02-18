<?php
$config = require("config.php");
$statment = new db($config['database']);


$haeding = "Note";


$notes = $statment->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']]);
$note = $notes->fetch();

require("views/note.view.php");
