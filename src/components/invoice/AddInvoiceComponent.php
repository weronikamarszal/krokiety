<?php
require_once __DIR__ . '/../../autoload.php';


class AddInvoiceComponent extends BaseFormComponent implements Component
{
    public function __construct($errors, $value = null, $readonly = false)
    {
        $this->readonly = $readonly;
        $this->fields = array(
            new FileInputField('Upload skanu', 'plik', $errors['plik']),
            new TextInputField('Numer faktury', 'invoiceNumber', $errors['invoiceNumber'], $readonly, $value->invoiceNumber),
            new NumberInputField('Kwota netto', 'netAmount', $errors['netAmount'], $readonly, $value->netAmount),
            new NumberInputField('Kwota brutto', 'grossAmount', $errors['grossAmount'], $readonly, $value->grossAmount),
            new NumberInputField('Kwota podatku VAT', 'VATTaxAmount', $errors['VATTaxAmount'], $readonly, $value->VATTaxAmount),
            new TextInputField('Nazwa kontrahenta', 'contractorsName', $errors['contractorsName'], $readonly, $value->contractorsName),
            new TextInputField('VAT ID kontrahenta', 'contractorsVatId', $errors['contractorsVatId'], $readonly, $value->contractorsVatId),
            new NumberInputField('Kwota netto w walucie', 'netAmountInCurrency', $errors['netAmountInCurrency'], $readonly, $value->netAmountInCurrency),
            new TextInputField('Nazwa waluty', 'currencyName', $errors['currencyName'], $readonly, $value->currencyName),
            new DateInputField('Data faktury', 'invoiceDate', $errors['invoiceDate'], $readonly, $value->invoiceDate),
        );
    }


}
