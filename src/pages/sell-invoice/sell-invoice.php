<?php
require_once __DIR__ . '/../../autoload.php';


$values = array(
    array(
        "id" => 10,
        "VAT" => 5,
        "netto" => 100,
    ),
    array(
        "id" => 10,
        "VAT" => 5,
        "netto" => 100,
    ),
    array(
        "id" => 10,
        "VAT" => 5,
        "netto" => 100,
    )
);

displayMenu(
    new BaseListPage(
        new InvoiceListComponent($values),
        new InvoiceSearchForm(),
        "Faktury Sprzedaży",
        new PaginatorComponent(sizeof($values)),
        '/krokiety/src/pages/sell-invoice/add-sell-invoice.php'));
?>
