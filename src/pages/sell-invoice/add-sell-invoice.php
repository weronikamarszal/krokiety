<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new InvoiceValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}

function insertSellInvoice($data,$dbh){
    $stmt = $dbh->prepare("INSERT INTO salesinvoices (invoiceNumber, grossAmount, VATTaxAmount, netAmount,
contractorsName, contractorsVatId, netAmountInCurrency, currencyName, invoiceDate, path)
VALUES (:invoiceNumber, :grossAmount, :VATTaxAmount, :netAmount, :contractorsName, :contractorsVatId,
:netAmountInCurrency, :currencyName, :invoiceDate, :path)") ;
    $stmt->execute($data);
}

displayMenu(new BaseAddPage("Dodaj fakturę sprzedaży", new AddInvoiceComponent($errors)));

if (isset($_FILES['plik']) && $_FILES['plik']['error'] === UPLOAD_ERR_OK) {
    // get details of the uploaded file
    $dest_path = "";
    $fileTmpPath = $_FILES['plik']['tmp_name'];
    $fileName = $_FILES['plik']['name'];
    $fileType = $_FILES['plik']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        // directory in which the uploaded file will be moved
        $uploadFileDir = './uploaded_files/sell_invoices/';
        $dest_path = $uploadFileDir . $newFileName;
        move_uploaded_file($fileTmpPath, $dest_path);
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
        'path' => $dest_path
    ];

    insertSellInvoice($data, $dbh);
}
