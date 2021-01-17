<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new EquipmentValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}

function insertEquipment($data, $dbh)
{
    $stmt = $dbh->prepare("INSERT INTO devices (purchaseDate, deviceName, inventoryNumber, serialNumber, notes, 
description, netValue, inPossessionOf, purchaseInvNum, warrExpiryDate)
VALUES (:purchaseDate, :deviceName, :inventoryNumber, :serialNumber, :notes, 
:description, :netValue, :inPossessionOf, :purchaseInvNum, :warrExpiryDate)");
    $stmt->execute($data);
}

displayMenu(new BaseAddPage("Dodaj sprzęt", new AddEquipmentComponent($errors, $_POST)));

$data = [
    'purchaseDate' => $_POST['purchaseDate'],
    'deviceName' => $_POST['deviceName'],
    'inventoryNumber' => $_POST['inventoryNumber'],
    'serialNumber' => $_POST['serialNumber'],
    'notes' => $_POST['notes'],
    'description' => $_POST['description'],
    'netValue' => $_POST['netValue'],
    'inPossessionOf' => $_POST['inPossessionOf'],
    'purchaseInvNum' => $_POST['purchaseInvNum'],
    'warrExpiryDate' => $_POST['warrExpiryDate']
];

global $dbh;
insertEquipment($data, $dbh);

