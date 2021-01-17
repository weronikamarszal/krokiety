<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new InvoiceValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}

function insertBuyInvoice($data,$dbh){
    $stmt = $dbh->prepare("INSERT INTO purchaseinvoices (invoiceNumber, grossAmount, VATTaxAmount, netAmount,
contractorsName, contractorsVatId, netAmountInCurrency, currencyName, invoiceDate, path)
VALUES (:invoiceNumber, :grossAmount, :VATTaxAmount, :netAmount, :contractorsName, :contractorsVatId,
:netAmountInCurrency, :currencyName, :invoiceDate, :path)") ;
    $stmt->execute($data);
}

displayMenu(new BaseAddPage("Dodaj fakturę zakupu", new AddInvoiceComponent($errors)));

if (isset($_FILES['plik']) && $_FILES['plik']['error'] === UPLOAD_ERR_OK) {
    $dest_path = "";
    $fileTmpPath = $_FILES['plik']['tmp_name'];
    $fileName = $_FILES['plik']['name'];
    $fileType = $_FILES['plik']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        // directory in which the uploaded file will be moved
        $uploadFileDir = './uploaded_files/buy_invoices/';
        $dest_path = $uploadFileDir . $newFileName;
        move_uploaded_file($fileTmpPath, $dest_path);
        $path = 'http://localhost/krokiety/uploaded_files/buy_invoices/';
        $endpath = $path . $newFileName;
    }

    $data = [
        'invoiceNumber' => $_POST['invoiceNumber'],
        'grossAmount' => $_POST['grossAmount'],
        'VATTaxAmount' => $_POST['VATTaxAmount'],
        'netAmount' => $_POST['netAmount'],
        'contractorsName' => $_POST['contractorsName'],
        'contractorsVatId' => $_POST['contractorsVatId'],
        'netAmountInCurrency' => $_POST['netAmountInCurrency'],
        'currencyName' => $_POST['currencyName'],
        'invoiceDate' => $_POST['invoiceDate'],
        'path' => $endpath
    ];

    insertBuyInvoice($data, $dbh);
}