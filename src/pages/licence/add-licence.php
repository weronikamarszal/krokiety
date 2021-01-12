<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new LicenceValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}

function insertLicence($data,$dbh){
    $stmt = $dbh->prepare("INSERT INTO licenses (purchaseInvoiceId, userId, name, serialNumber, inventoryNumber, purchaseDate, 
licenseValidTill, technicalSupportValid_till, description, note)
VALUES (:purchaseInvoiceId, :userId, :name, :serialNumber, :inventoryNumber, :purchaseDate, :licenseValidTill, 
:technicalSupportValid_till, :description, :note)") ;
    $stmt->execute($data);
}

displayMenu(new BaseAddPage("Dodaj licencję", new AddLicenceComponent($errors)));

$data = [
    'purchaseInvoiceId' => $_POST['purchaseInvoiceId'],
    'userId' => $_POST['userId'],
    'name' => $_POST['name'],
    'serialNumber' => $_POST['serialNumber'],
    'inventoryNumber' => $_POST['inventoryNumber'],
    'purchaseDate' => $_POST['purchaseDate'],
    'licenseValidTill' => $_POST['licenseValidTill'],
    'technicalSupportValid_till' => $_POST['technicalSupportValid_till'],
    'description' => $_POST['description'],
    'note' => $_POST['note']
];

echoTop("data created");

insertLicence($data, $dbh);