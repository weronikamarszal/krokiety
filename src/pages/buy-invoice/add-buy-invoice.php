<?php
require_once __DIR__ . '/../../autoload.php';

if($_SESSION["role"]=="user"){
    setcookie("File",0);
}
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
    $res=$stmt->execute($data);
    if($res == true){
        echo "<script type='text/javascript'>alert('Faktura została dodana');</script>";
    }
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

    $message = "";

    if ($_POST['netAmount'] > $_POST['grossAmount']) {
        $message = $message . "Kwota brutto nie może być mniejsza, niż kwota netto" . '\n';
    }
    if ($_POST['invoiceNumber'] == NULL) {
        $message = $message . "Wprowadż numer faktury" . '\n';
    }
    if ($_POST['netAmount'] == NULL) {
        $message = $message . "Wprowadż kwotę netto" . '\n';
    }
    if ($_POST['grossAmount'] == NULL) {
        $message = $message . "Wprowadż kwotę brutto" . '\n';
    }
    if ($_POST['contractorsName'] == NULL) {
        $message = $message . "Wprowadż nazwe kontrahenta" . '\n';
    }
    if ($_POST['contractorsVatId'] == NULL) {
        $message = $message . "Wprowadż VAT ID kontrahenta" . '\n';
    }
    if ($_POST['invoiceDate'] == NULL) {
        $message = $message . "Wprowadż datę faktury" . '\n';
    }

    if($message == ""){
        $data = [
            'invoiceNumber' => $_POST['invoiceNumber'],
            'grossAmount' => $_POST['grossAmount'],
            'VATTaxAmount' => $_POST['grossAmount'] - $_POST['netAmount'],
            'netAmount' => $_POST['netAmount'],
            'contractorsName' => $_POST['contractorsName'],
            'contractorsVatId' => $_POST['contractorsVatId'],
            'netAmountInCurrency' => $_POST['netAmountInCurrency'],
            'currencyName' => $_POST['currencyName'],
            'invoiceDate' => $_POST['invoiceDate'],
            'path' => $endpath
        ];
        insertBuyInvoice($data, $dbh);
    } else {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
else if(!(isset($_FILES['plik']))) {
    $_COOKIE["File"]=0;
}
else if( $_COOKIE["File"]=="0") {
    echo '<script language="javascript">';
    echo 'alert("Dodaj plik")';
    echo '</script>';
}
