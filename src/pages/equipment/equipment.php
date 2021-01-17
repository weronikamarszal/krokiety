<?php
require_once __DIR__ . '/../../autoload.php';

$equipmentsList = [];
$pagination = new Pagination("devices");
$searchValues = new SearchValues([
    "inventoryNumber",
    "serialNumber",
    ["field" => "purchaseDate_from", "dbField" => "purchaseDate", "compare" => ">="],
    ["field" => "purchaseDate_to", "dbField" => "purchaseDate", "compare" => "<="]]);

try {
    $stmt = $dbh->prepare("SELECT * FROM devices {$searchValues->getCondition()} ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute($searchValues->getSearchValues());
    $equipmentsList = $stmt->fetchAll(PDO::FETCH_CLASS, "Equipment");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

displayMenu(new BaseListPage(
    new EquipmentListComponent($equipmentsList),
    new EquipmentSearchForm($_GET),
    "Sprzęty",
    new PaginatorComponent($pagination->getSize()),
    '/krokiety/index.php/add-equipment'));
?>
