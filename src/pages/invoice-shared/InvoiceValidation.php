<?php


class InvoiceValidation
{
    public function getEmptyValidations()
    {
        return array(
            'plik' => "",
            'numerFaktury' => "",
            'kwotaBrutto' => "",
            'kwotaPodatkuVAT' => "",
            'kwotaNetto' => "",
            'nazwaKontrahenta' => "",
            'VATIDKontrahenta' => "",
            'kwotaNettoWWalucie' => "",
            'nazwaWaluty' => "",
        );
    }

    public function validate($object, $files) {
        return array(
            'plik' => ($files["plik"]["size"] > 2 * 1024 * 1024) ? "Błąd" : "",
            'numerFaktury' => "",
            'kwotaBrutto' => "",
            'kwotaPodatkuVAT' => "",
            'kwotaNetto' => "",
            'nazwaKontrahenta' => "",
            'VATIDKontrahenta' => "",
            'kwotaNettoWWalucie' => "",
            'nazwaWaluty' => "",
        );
    }
}