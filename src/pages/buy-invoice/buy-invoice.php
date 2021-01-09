<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$buyInvoicesList = [];
$pagination = new Pagination("purchaseinvoices");
$searchValues = new SearchValues(["id", "invoiceNumber", "contractorsVatId", "contractorsName"]);

try {
    $stmt = $dbh->prepare("SELECT * FROM purchaseinvoices {$searchValues->getCondition()} ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute($searchValues->getSearchValues());
    $buyInvoicesList = $stmt->fetchAll(PDO::FETCH_CLASS, "BuyInvoice");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

$href = '/krokiety/index.php/add-buy-invoice';
displayMenu(new BaseListPage(
    new SellInvoiceListComponent($buyInvoicesList),
    new InvoiceSearchForm($_GET),
    "Faktury Zakupu",
    new PaginatorComponent($pagination->getSize()),
    $href));
?>

