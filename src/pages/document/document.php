<?php
require_once __DIR__.'/../../autoload.php';
global $dbh;

$documentsList = [];
$pagination = new Pagination("documents");
$searchValues = new SearchValues(["pagesNumber",
    ["field" => "documentDate_from", "dbField" => "documentDate", "compare" => ">="],
    ["field" => "documentDate_to", "dbField" => "documentDate", "compare" => "<="]]);

try {
    $stmt = $dbh->prepare("SELECT * FROM documents {$searchValues->getCondition()} ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute($searchValues->getSearchValues());
    $documentsList = $stmt->fetchAll(PDO::FETCH_CLASS, "Document");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}
displayMenu(new BaseListPage(
    new DocumentListComponent($documentsList),
    new DocumentSearchForm($_GET),
    "Dokumenty",
    new PaginatorComponent($pagination->getSize()),
    '/krokiety/index.php/add-document',"documents"));
?>
