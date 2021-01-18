<?php
require_once __DIR__ . '/../../autoload.php';

class LoginComponent extends BaseFormComponent implements Component
{

    public function __construct($errors, $value = null, $readonly = false)
    {

        $this->readonly = $readonly;
        $this->fields = array(
            new TextInputField('Login', 'username', $errors['username'],$readonly, $value->username),
            new PasswordInputField('Hasło', 'password', $errors['password'], $readonly, $value->password),
        );
    }

}
