<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$sellInvoicesList = [];
$pagination = new Pagination("salesinvoices");
$searchValues = new SearchValues(["id","invoiceNumber","contractorsVatId","contractorsName", ["field" => "invoiceDate_from", "dbField" => "invoiceDate", "compare" => ">="], ["field" => "invoiceDate_to", "dbField" => "invoiceDate", "compare" => "<="]]);

try {
    $stmt = $dbh->prepare("SELECT * FROM salesinvoices {$searchValues->getCondition()} ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute($searchValues->getSearchValues());
    $sellInvoicesList = $stmt->fetchAll(PDO::FETCH_CLASS, "SellInvoice");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

displayMenu(
    new BaseListPage(
        new SellInvoiceListComponent($sellInvoicesList),
        new InvoiceSearchForm($_GET),
        "Faktury Sprzedaży",
        new PaginatorComponent($pagination->getSize()),
        '/krokiety/index.php/add-sell-invoice',"sell-invoice"));

?>
