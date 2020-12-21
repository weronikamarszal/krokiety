<?php
require_once __DIR__ . '/../../components/menu.php';
require_once __DIR__ . '/../../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../../components/PaginatorComponent.php';
require_once __DIR__ . '/UserListComponent.php';

$values = array(
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
);

displayMenu(new BaseListPage(new UserListComponent($values),  null, "Użytkownicy", new PaginatorComponent(sizeof($values))));
?>
