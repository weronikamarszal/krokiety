<?php
require_once __DIR__ . '/../../autoload.php';

$validator = new LoginValidation();
$errors = $validator->getEmptyValidations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = $validator->validate($_POST, $_FILES);
}
displayMenu(new BaseAddPage("Zaloguj się",new LoginComponent($errors)));
function uidExists($dbh,$userName,$email){
    $stmt=$dbh->prepare('SELECT * FROM users WHERE login=:userName OR email=:email;');
    if(!$stmt){
        header("location: /krokiety/index.php?error=stmtfailed");
        exit();
    }
    $stmt->bindParam(':userName',$userName, PDO:: PARAM_STR, 128);
    $stmt->bindParam(':email',$email, PDO:: PARAM_STR,128);
    $stmt->execute();
    $row=$stmt->fetch();
    if($row){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
}
if(isset($_POST['username'])) {
    $userName=$_POST["username"];
    $password=$_POST["password"];
    $uidExists = uidExists($dbh, $userName, $password);
    if ($uidExists === false) {
        header("location: ./login?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);
    if ($checkPwd === false) {
        header("location: ./login?error=wrongpassword");
        exit();
    } else if ($checkPwd === true) {
        session_save_path("/krokiety/session_files");
        session_start();
        $_SESSION["username"] = $uidExists["login"];
        $_SESSION["firstname"] = $uidExists["firstName"];
        $_SESSION["userid"] = $uidExists["id"];
        $_SESSION["role"] = $uidExists["role"];
        header("location: ./welcome");
        exit();
    }
}


