<?php
require_once __DIR__ . '/../../autoload.php';

$errors = array(
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array(
        'plik' => ($_FILES["plik"]["size"] > 2 * 1024 * 1024) ? "Błąd" : "",
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


displayMenu(new BaseAddPage("Dodaj fakturę sprzedaży", new AddInvoiceComponent($errors)));