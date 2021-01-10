<?php

require_once __DIR__ . '/../../autoload.php';

class InvoiceSearchForm extends BaseFormComponent implements Component
{
    public function __construct($value = null, $errors = null)
    {
        $this->method = "get";
        $this->fields = array(
            new TextInputField('Id', 'id', $errors['id'], false, $value['id']),
            new TextInputField('Numer faktury', 'invoiceNumber', $errors['invoiceNumber'], false, $value['invoiceNumber']),
            new TextInputField('Vat ID kontrahenta', 'contractorsVatId', $errors['contractorsVatId'], false, $value['contractorsVatId']),
            new TextInputField('Nazwa kontrahenta', 'contractorsName', $errors['contractorsName'], false, $value['contractorsName']),
            new DateInputField('Data od', 'invoiceDate_from', $errors['invoiceDate_from'], false, $value['invoiceDate_from']),
            new DateInputField('Data do', 'invoiceDate_to', $errors['invoiceDate_to'], false, $value['invoiceDate_to']),
        );
    }



}