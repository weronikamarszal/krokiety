<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new LoginValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}
displayMenu(new BaseAddPage("Zaloguj się",new LoginComponent($errors)));
?>