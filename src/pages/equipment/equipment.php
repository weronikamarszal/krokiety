<?php
require_once __DIR__ . '/../../autoload.php';

$equipmentsList = [];
$pagination = new Pagination("devices");

try {
    $stmt = $dbh->prepare("SELECT * FROM devices ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute();
    $equipmentsList = $stmt->fetchAll(PDO::FETCH_CLASS, "Equipment");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

displayMenu(new BaseListPage(
    new EquipmentListComponent($equipmentsList),
    new EquipmentSearchForm(),
    "Sprzęty",
    new PaginatorComponent($pagination->getSize()),
    '/krokiety/index.php/add-equipment'));
?>
