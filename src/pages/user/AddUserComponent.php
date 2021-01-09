<?php
require_once __DIR__ . '/../../autoload.php';

class AddUserComponent extends BaseFormComponent implements Component
{

    public function __construct($errors)
    {
        $this->fields = array(
            new TextInputField('Login', 'login', $errors['login']),
            new TextInputField('Imię', 'firstName', $errors['firstName']),
            new TextInputField('Nazwisko', 'surname', $errors['surname']),
            new TextInputField('Hasło', 'password', $errors['password']),
            new TextInputField('Numer telefonu', 'phoneNumber', $errors['phoneNumber']),
            new TextInputField('Rola', 'role', $errors['role']),
            new TextInputField('Email', 'email', $errors['email']),
        );
    }
}
