<?php
require_once __DIR__.'/../../autoload.php';

$values = array(
    array(
        "documentDate" => "2020-12-20T17:38:28.150Z",
        "notes" => "notatka",
        "pagesNumber" => "strona1",
    ),
    array(
        "documentDate" => "2020-12-20T17:38:28.150Z",
        "notes" => "notatka",
        "pagesNumber" => "strona1",
    ),
    array(
        "documentDate" => "2020-12-20T17:38:28.150Z",
        "notes" => "notatka",
        "pagesNumber" => "strona1",
    )
);

displayMenu(new BaseListPage(new DocumentListComponent($values),
    new DocumentSearchForm(),
    "Dokumenty",
    new PaginatorComponent(sizeof($values)),
    '/krokiety/src/pages/document/add-document.php'));
?>
