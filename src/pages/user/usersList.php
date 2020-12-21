<?php
require_once __DIR__ . '/../../components/menu.php';
require_once __DIR__ . '/../../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../../components/PaginatorComponent.php';
require_once __DIR__ . '/UserListComponent.php';
require_once __DIR__ . '/../../components/databaseConnection.php';
require_once __DIR__ . '/User.php';

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


displayMenu(new BaseListPage(new UserListComponent($usersList),  null, "Użytkownicy", new PaginatorComponent(sizeof($usersList))));
?>
