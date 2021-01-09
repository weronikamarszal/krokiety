<?php

require_once __DIR__ . '/../../autoload.php';

class InvoiceSearchForm extends BaseFormComponent implements Component
{
    protected $fields;

    public function __construct($errors)
    {
        $this->method = "get";
        $this->fields = array(
            new TextInputField('Id', 'id', $errors['id']),
//            new TextInputField('Imię', 'firstName', $errors['firstName']),
//            new TextInputField('Nazwisko', 'surname', $errors['surname']),
//            new DateInputField('Email', 'email', $errors['email']),
//            new DateInputField('Email', 'email', $errors['email']),
        );
    }



}