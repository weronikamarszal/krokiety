<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$validator = new LicenceValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}

function insertLicence($data, $dbh)
{
    $stmt = $dbh->prepare("INSERT INTO licenses (purchaseInvoiceId, userId, name, serialNumber, inventoryNumber, purchaseDate, 
licenseValidTill, technicalSupportValid_till, description, note)
VALUES (:purchaseInvoiceId, :userId, :name, :serialNumber, :inventoryNumber, :purchaseDate, :licenseValidTill, 
:technicalSupportValid_till, :description, :note)");
    $stmt->execute($data);
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

displayMenu(new BaseAddPage("Dodaj licencję", new AddLicenceComponent($errors, $usersId, $invoicesId)));


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

insertLicence($data, $dbh);