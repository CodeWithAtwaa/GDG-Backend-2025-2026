<?php


use Core\App;
use Core\Database;
use Core\Validator;

$statment = App::container()->resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];


// validate the form input
Validator::email($emil) ?: $errors['email'] = "Email is not valid";
Validator::string($password, 6, 255) ?: $errors['password'] = "Password must be greater than 6 characters";


if (! empty($errors)) {
    view("registeration/create.view.php", compact("errors"));
    die();
}


$statment->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
]);
$user = $statment->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);


        header('Location: /');
        die();
    }
}

return view("session/create.view.php", [
    'errors' => [
        'email' => "Email or password is not correct"
    ]
]);