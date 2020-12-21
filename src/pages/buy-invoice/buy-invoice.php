<?php

require_once __DIR__.'/../../autoload.php';

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

$href = '/krokiety/src/pages/buy-invoice/add-buy-invoice.php';
displayMenu(new BaseListPage(new InvoiceListComponent($values),
    new InvoiceSearchForm(),
    "Faktury Zakupu",
    new PaginatorComponent(sizeof($values)),
    $href));
?>
