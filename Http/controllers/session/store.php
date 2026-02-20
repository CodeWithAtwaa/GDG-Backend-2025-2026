<?php


use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$statment = App::container()->resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();


if (! $form->validate($email, $password)) {
    view("registeration/create.view.php", [
        "errors" => $form->errors()
    ]);
}


$statment->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
]);
$user = $statment->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'id' => $user['id'],
            'email' => $user['email']
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
