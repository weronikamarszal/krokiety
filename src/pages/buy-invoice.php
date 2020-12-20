<?php
require_once __DIR__.'/../components/menu.php';
require_once __DIR__.'/../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../components/InvoiceListComponent.php';
require_once __DIR__ . '/../components/PaginatorComponent.php';
require_once __DIR__ . '/../components/InvoiceSearchForm.php';

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

displayMenu(new BaseListPage(new InvoiceListComponent($values),  new InvoiceSearchForm(), "Faktury Zakupu", new PaginatorComponent(sizeof($values))));
?>
