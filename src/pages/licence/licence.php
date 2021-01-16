<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$sellInvoicesList = [];
$pagination = new Pagination("salesinvoices");


$values = array(
    array(
        "inventoryNumber" => 10,
        "serialNumber" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    ),
    array(
        "inventoryNumber" => 10,
        "serialNumber" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    ),
    array(
        "inventoryNumber" => 10,
        "serialNumber" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    )
);

displayMenu(new BaseListPage(new LicenceListComponent($values),
    null,
    "Licencje",
    new PaginatorComponent(sizeof($values)),
    '/krokiety/index.php/add-licence'));
?>
