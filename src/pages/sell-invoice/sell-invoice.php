<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$sellInvoicesList = [];
$pagination = new Pagination();

try {
    $stmt = $dbh->prepare("SELECT * FROM salesinvoices ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute();
    $sellInvoicesList = $stmt->fetchAll(PDO::FETCH_CLASS, "SellInvoice");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

displayMenu(
    new BaseListPage(
        new SellInvoiceListComponent($sellInvoicesList),
        new InvoiceSearchForm(),
        "Faktury Sprzedaży",
        new PaginatorComponent($pagination->getSize()),
        '/krokiety/index.php/add-sell-invoice'));

?>
