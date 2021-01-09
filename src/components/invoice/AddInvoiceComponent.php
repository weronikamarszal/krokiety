<?php
require_once __DIR__ . '/../../autoload.php';


class AddInvoiceComponent extends BaseFormComponent implements Component
{
    public function __construct($errors, $value = null, $readonly = false)
    {
        $this->readonly = $readonly;
        $this->fields = array(
            new FileInputField('Upload skanu', 'plik', $errors['plik']),
            new NumberInputField('Numer faktury', 'invoiceNumber', $errors['invoiceNumber'], $readonly, $value->invoiceNumber),
            new NumberInputField('kwotaBrutto', 'grossAmount', $errors['grossAmount'], $readonly, $value->grossAmount),
            new NumberInputField('kwotaPodatkuVAT', 'VATTaxAmount', $errors['VATTaxAmount'], $readonly, $value->VATTaxAmount),
            new NumberInputField('netAmount', 'netAmount', $errors['netAmount'], $readonly, $value->netAmount),
            new TextInputField('contractorsName', 'contractorsName', $errors['contractorsName'], $readonly, $value->contractorsName),
            new NumberInputField('contractorsVatId', 'contractorsVatId', $errors['contractorsVatId'], $readonly, $value->contractorsVatId),
            new NumberInputField('netAmountInCurrency', 'netAmountInCurrency', $errors['netAmountInCurrency'], $readonly, $value->netAmountInCurrency),
            new TextInputField('currencyName', 'currencyName', $errors['currencyName'], $readonly, $value->currencyName),
            new DateInputField('invoiceDate', 'invoiceDate', $errors['invoiceDate'], $readonly, $value->invoiceDate),
        );
    }


}
