<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new DocumentValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}

function insertDocument($data,$dbh){
    $stmt = $dbh->prepare("INSERT INTO documents (documentDate, notes, pagesNumber, path)
VALUES (:documentDate, :notes, :pagesNumber, :path)") ;
    $stmt->execute($data);
}

displayMenu(new BaseAddPage("Dodaj dokument", new AddDocumentComponent($errors)));

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
        $uploadFileDir = './uploaded_files/documents/';
        $dest_path = $uploadFileDir . $newFileName;
        move_uploaded_file($fileTmpPath, $dest_path);
    }

    $data = [
        'documentDate' => $_POST['documentDate'],
        'notes' => $_POST['notes'],
        'pagesNumber' => $_POST['pagesNumber'],
        'path' => $dest_path
    ];

    insertDocument($data, $dbh);
}