<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];
    public  function validate($emil, $password)
    {
        // validate the form input
        Validator::email($emil) ?: $this->errors['email'] = "Email is not valid";
        Validator::string($password, 6, 255) ?: $this->errors['password'] = "Password must be greater than 6 characters";

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function adderror($key, $message)
    {
        $this->errors[$key] = $message;
    }
}
