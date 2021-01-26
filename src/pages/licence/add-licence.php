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
    $res=$stmt->execute($data);
    if($res == true){
        echo "<script type='text/javascript'>alert('Licencja została dodana');</script>";
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

displayMenu(new BaseAddPage("Dodaj licencję", new AddLicenceComponent($errors, $usersId, $invoicesId)));

if ($_POST['name'] != NULL) {

    $message = "";

    if ($_POST['serialNumber'] == NULL){
        $message = $message . "Wprowadż numer seryjny" . '\n';
    }
    if ($_POST['inventoryNumber'] == NULL){
        $message = $message . "Wprowadż numer inwentarzowy" . '\n';
    }
    if ($_POST['purchaseDate'] == NULL){
        $message = $message . "Wprowadż datę zakupu" . '\n';
    }
    if ($_POST['technicalSupportValid_till'] == NULL){
        $message = $message . "Wprowadż datę do kiedy ważne wsparcie techniczne" . '\n';
    }
    if ($_POST['description'] == NULL){
        $message = $message . "Wprowdż opis" . '\n';
    }
    $buyDate = $_POST['purchaseDate'];
    $buyDateConverted = str_replace(".","-", $buyDate);
    $dateNow = date("Y-m-d");
    if ($buyDateConverted > $dateNow){
        $message = $message . "Data zakupu nie może być w przyszłości" . '\n';
    }

    if ($message == ""){
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
    } else {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}