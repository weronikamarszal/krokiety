<?php
require_once __DIR__ . '/../../autoload.php';


$usersList=[];

try{
    $stmt= $dbh->prepare("SELECT * FROM users ORDER BY id ASC");
    $stmt->execute();
    $users = $stmt->fetchAll();
    foreach ($users as $u) {
        $user = new User();
        $user->setId($u['id']);
        $user->setLogin($u['login']);
        $user->setFirstName($u['firstName']);
        $user->setSurname($u['surname']);
        $user->setPhoneNumber($u['phoneNumber']);
        $user->setRole($u['role']);
        $user->setEmail($u['email']);

        array_push($usersList,$user);
    }
}
catch(Exception $e){
    throw new Exception($e->getMessage());
}
$data = [
    'login' => "mnowak5",
    'firstName' => "Mariusz",
    'surname' => "Nowak",
    'phoneNumber'=>"567-345-532",
    'role'=>'employee"',
    'email'=>"mnowak5@company.com"
];
function insertUser($data,$dbh){
        $stmt= $dbh->prepare("INSERT INTO users (login, firstName,surname, phoneNumber,role,email) VALUES 
        (:login,:firstName,:surname,:phoneNumber,:role,:email)");
        $stmt->execute($data);
}
//insertUser($data,$dbh);

displayMenu(new BaseListPage(new UserListComponent($usersList),
    null,
    "Użytkownicy",
    new PaginatorComponent(sizeof($usersList)),
    '/krokiety/index.php/add-user'));
?>
