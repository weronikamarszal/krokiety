<?php
require_once __DIR__ . '/../../autoload.php';

$values = array(
    array(
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
        "deviceName" => "nazwa",
        "invNumber" => 1,
        "serialNumber" => 1,
        "notes" => "notatka",
        "description" => "opis",
        "nettValue" => 1,
        "inPossessionOf" => 1,
    ),
    array(
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
        "deviceName" => "nazwa",
        "invNumber" => 1,
        "serialNumber" => 1,
        "notes" => "notatka",
        "description" => "opis",
        "nettValue" => 1,
        "inPossessionOf" => 1,
    ),
    array(
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
        "deviceName" => "nazwa",
        "invNumber" => 1,
        "serialNumber" => 1,
        "notes" => "notatka",
        "description" => "opis",
        "nettValue" => 1,
        "inPossessionOf" => 1,
    )
);

displayMenu(new BaseListPage(new EquipmentListComponent($values),
    new EquipmentSearchForm(),
    "Sprzęty",
    new PaginatorComponent(sizeof($values)),
    '/krokiety/index.php/add-equipment'));
?>
