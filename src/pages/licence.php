<?php
require_once __DIR__.'/../components/menu.php';
require_once __DIR__.'/../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../components/LicenceListComponent.php';
require_once __DIR__ . '/../components/PaginatorComponent.php';

$values = array(
    array(
        "number" => 10,
        "serialKey" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    ),
    array(
        "number" => 10,
        "serialKey" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    ),
    array(
        "number" => 10,
        "serialKey" => 5,
        "purchaseDate" => "2020-12-20T17:38:28.150Z",
    )
);

displayMenu(new BaseListPage(new LicenceListComponent($values),  null, "Licencje", new PaginatorComponent(sizeof($values))));
?>
