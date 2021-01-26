<?php
require_once __DIR__ . '/../../autoload.php';

class AddUserComponent extends BaseFormComponent implements Component
{

    public function __construct($errors, $roles)
    {
        $this->fields = array(
            new TextInputField('Imię', 'firstName', $errors['firstName']),
            new TextInputField('Nazwisko', 'surname', $errors['surname']),
            new PasswordInputField('Hasło', 'password', $errors['password']),
            new TextInputField('Numer telefonu', 'phoneNumber', $errors['phoneNumber']),
            new SelectField('Rola', 'role', $roles, $errors['purchaseInvoiceId'])
        );

    }

}
