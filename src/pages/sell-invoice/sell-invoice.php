<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$sellInvoicesList = [];
$pagination = new Pagination("salesinvoices");

echoTop($_GET["id"]);

try {
    $condition = "";
    if (isset($_GET["id"])) {
        $condition = $condition . " id=:id ";
    }
    if (!empty($condition)) {
        $condition = " WHERE " . $condition;
    }

    $stmt = $dbh->prepare("SELECT * FROM salesinvoices {$condition} ORDER BY id ASC {$pagination->getQueryPart()}");
    echoTop($stmt, 1);
    $stmt->execute($_GET);
    $sellInvoicesList = $stmt->fetchAll(PDO::FETCH_CLASS, "SellInvoice");
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

displayMenu(
    new BaseListPage(
        new SellInvoiceListComponent($sellInvoicesList),
        new InvoiceSearchForm([]),
        "Faktury Sprzedaży",
        new PaginatorComponent($pagination->getSize()),
        '/krokiety/index.php/add-sell-invoice'));

?>
