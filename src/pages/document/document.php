<?php
require_once __DIR__ . '/../../components/menu.php';
require_once __DIR__ . '/../../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../../components/PaginatorComponent.php';
require_once __DIR__ . '/DocumentListComponent.php';
require_once __DIR__ . '/DocumentSearchForm.php';

$values = array(
    array(
        "date" => "2020-12-20T17:38:28.150Z",
        "pages" => "strona1",
        "notes" => "notatka",
    ),
    array(
        "date" => "2020-12-20T17:38:28.150Z",
        "pages" => "strona1",
        "notes" => "notatka",
    ),
    array(
        "date" => "2020-12-20T17:38:28.150Z",
        "pages" => "strona1",
        "notes" => "notatka",
    )
);

displayMenu(new BaseListPage(new DocumentListComponent($values),  new DocumentSearchForm(), "Dokumenty", new PaginatorComponent(sizeof($values)), '#'));
?>
