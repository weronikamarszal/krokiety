<?php
require_once __DIR__ . '/../../autoload.php';


$values = array(
    array(
        "inventoryNumber" => 10,
        "serialKey" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    ),
    array(
        "inventoryNumber" => 10,
        "serialKey" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    ),
    array(
        "inventoryNumber" => 10,
        "serialKey" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    )
);

displayMenu(new BaseListPage(new EquipmentListComponent($values),  new EquipmentSearchForm(), "Sprzęty", new PaginatorComponent(sizeof($values)), '#'));
?>
