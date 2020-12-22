<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new LicenceValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}


displayMenu(new BaseAddPage("Dodaj licencję", new AddLicenceComponent($errors)));