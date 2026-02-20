<?php


use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();


if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        redirct(path: "/");
    }
    $form->adderror("email", "Email is not valid");
}

Session::flash('_flashed', $form->errors());

return redirct('/login');



