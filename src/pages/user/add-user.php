<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new UserValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}
function returnLastId($dbh){
    $stmt= $dbh->prepare("SELECT id FROM users ORDER BY id DESC LIMIT 1");
    $stmt->execute();
    $fetch = $stmt->fetch();
    //echoTop($fetch, 2);
    return $fetch;
}
//returnLastId($dbh);
function insertUser($data,$dbh){

    $stmt= $dbh->prepare("INSERT INTO users (login, firstName,surname, password,phoneNumber,role,email) VALUES 
        (:login,:firstName,:surname,:password,:phoneNumber,:role,:email)");
    $stmt->execute($data);
}
displayMenu(new BaseAddPage("Dodaj użytkownika", new AddUserComponent($errors)));

if (isset($_POST['firstName'])) {
    $message = "";

    if ($_POST['surname'] == NULL){
        $message = $message . "Wprowadż nazwisko" . '\n';
    }
    if ($_POST['password'] == NULL){
        $message = $message . "Wprowadż hasło" . '\n';
    }
    if ($_POST['phoneNumber'] == NULL){
        $message = $message . "Wprowadż numer telefonu" . '\n';
    }
    if ($_POST['role'] == NULL){
        $message = $message . "Wprowadż rolę" . '\n';
    }

    if ($message == "") {
        function createLogin($dbh)
        {
            $name = iconv('UTF-8', 'ASCII//TRANSLIT', $_POST['firstName']);
            $name = strtolower(preg_replace("/[^a-zA-Z]/", "", $name));
            $nameChar = $name[0];

            $surname = iconv('UTF-8', 'ASCII//TRANSLIT', $_POST['surname']);
            $surname = strtolower(preg_replace("/[^a-zA-Z]/", "", $surname));

            $id = returnLastId($dbh);
            $newId = strval($id[0] + 1);
            //echoTop($newId);
            $login = $nameChar . $surname . $newId;
            return $login;
        }

        function createEmail($login)
        {
            $email = "";
            if ($_POST['role'] == 'employee' || $_POST['role'] == 'owner') {
                $email = "@company.com";
            } else $email = "@audits.com";
            $email = $login . $email;
            //echoTop($email,4);
            return $email;
        }

        $login = createLogin($dbh);
        $email = createEmail($login);
        $pswd = $_POST['password'];
        $hashedPassword = password_hash($pswd, PASSWORD_DEFAULT);
        $data = [
            'login' => $login,
            'firstName' => $_POST['firstName'],
            'surname' => $_POST['surname'],
            'password' => $hashedPassword,
            'phoneNumber' => $_POST['phoneNumber'],
            'role' => $_POST['role'],
            'email' => $email
        ];
        insertUser($data, $dbh);
        echo "<script type='text/javascript'>alert('Użytkownik został dodany');</script>";
    } else {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}