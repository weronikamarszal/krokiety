<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new DocumentValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}


displayMenu(new BaseAddPage("Dodaj dokument", new AddDocumentComponent($errors)));