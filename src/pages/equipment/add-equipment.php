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
    $res=$stmt->execute($data);
    if($res == true){
        echo "<script type='text/javascript'>alert('Sprzęt został dodany');</script>";
    }
}
$usersId = $dbh->prepare("SELECT id FROM users");
$usersId->execute();
$usersId = array_map(function ($i) {
    return $i->getId();
}, $usersId->fetchAll(PDO::FETCH_CLASS, "User"));

$invoicesId = $dbh->prepare("SELECT id FROM purchaseinvoices");
$invoicesId->execute();
$invoicesId = array_map(function ($i) {
    return $i->getId();
}, $invoicesId->fetchAll(PDO::FETCH_CLASS, "BuyInvoice"));

displayMenu(new BaseAddPage("Dodaj sprzęt", new AddEquipmentComponent($errors, $usersId, $invoicesId)));

if ($_POST['purchaseDate'] != NULL) {

    $message = "";

    $buyDate = $_POST['purchaseDate'];
    $buyDateConverted = str_replace(".","-", $buyDate);
    $dateNow = date("Y-m-d");
    if ($buyDateConverted > $dateNow){
        $message = $message . "Data zakupu nie może być w przyszłości" . '\n';
    }
    if ($_POST['deviceName'] == NULL){
        $message = $message . "Wprowadż nazwę sprzętu" . '\n';
    }
    if ($_POST['inventoryNumber'] == NULL){
        $message = $message . "Wprowadż numer inwentarzowy zakupu" . '\n';
    }
    if ($_POST['serialNumber'] == NULL){
        $message = $message . "Wprowadż numer seryjny" . '\n';
    }
    if ($_POST['netValue'] == NULL){
        $message = $message . "Wprowadż wartość netto" . '\n';
    }
    if ($_POST['purchaseInvNum'] == NULL){
        $message = $message . "Wprowadż numer faktury" . '\n';
    }
    if ($_POST['warrExpiryDate'] == NULL){
        $message = $message . "Wprowadż datę wygaśnięcia gwarancji" . '\n';
    }

    if ($message == "") {
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

            insertEquipment($data, $dbh);
    } else {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
