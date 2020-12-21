<?php
require_once __DIR__ . '/../../components/menu.php';
require_once __DIR__ . '/../../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../../components/PaginatorComponent.php';
require_once __DIR__ . '/EquipmentListComponent.php';
require_once __DIR__ . '/EquipmentSearchForm.php';

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

displayMenu(new BaseListPage(new EquipmentListComponent($values),  new EquipmentSearchForm(), "Sprzęty", new PaginatorComponent(sizeof($values))));
?>
