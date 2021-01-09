<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$buyInvoicesList = [];
$pagination = new Pagination("purchaseinvoices");

try {
    $stmt = $dbh->prepare("SELECT * FROM purchaseinvoices ORDER BY id ASC {$pagination->getQueryPart()}");
    $stmt->execute();
    $buyInvoicesList = $stmt->fetchAll(PDO::FETCH_CLASS, "BuyInvoice");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

$href = '/krokiety/index.php/add-buy-invoice';
displayMenu(new BaseListPage(
    new SellInvoiceListComponent($buyInvoicesList),
    new InvoiceSearchForm([]),
    "Faktury Zakupu",
    new PaginatorComponent($pagination->getSize()),
    $href));
?>

?>
