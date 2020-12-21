<?php
require_once __DIR__ . '/../../components/menu.php';
require_once __DIR__ . '/../../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../../components/PaginatorComponent.php';
require_once __DIR__ . '/UserListComponent.php';
require_once __DIR__ . '/../../components/databaseConnection.php';

$values=[];
$getUsers = $dbh->prepare("SELECT * FROM users ORDER BY id ASC");
$getUsers->execute();
$users = $getUsers->fetchAll();
foreach ($users as $user) {
    $userData=[];
    array_push($userData,$user['id']);
    array_push($userData,$user['login']);
    array_push($userData,$user['firstName']);
    array_push($userData,$user['surname']);
    array_push($userData,$user['phoneNumber']);
    array_push($userData,$user['role']);
    array_push($userData,$user['email']);
    array_push($values,$userData);
}
/*$values = array(
    array(
        "id" => 10,
        "name" => "Weronika"
    ),
    array(
        "id" => 10,
        "name" => "Weronika"
    ),
    array(
        "id" => 10,
        "name" => "Weronika"
    ),
);*/

displayMenu(new BaseListPage(new UserListComponent($values),  null, "Użytkownicy", new PaginatorComponent(sizeof($values))));
?>
