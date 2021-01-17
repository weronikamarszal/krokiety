<?php
require_once __DIR__.'/../../autoload.php';
global $dbh;

$documentsList = [];
$pagination = new Pagination("documents");

try {
    $stmt = $dbh->prepare("SELECT * FROM documents ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute();
    $documentsList = $stmt->fetchAll(PDO::FETCH_CLASS, "Document");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}
displayMenu(new BaseListPage(
    new DocumentListComponent($documentsList),
    new DocumentSearchForm(),
    "Dokumenty",
    new PaginatorComponent($pagination->getSize()),
    '/krokiety/index.php/add-document'));
?>
