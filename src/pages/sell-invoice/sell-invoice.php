<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$sellInvoicesList = [];
$pagination = new Pagination("salesinvoices");

try {
    $condition = "";
    $searchValues = [];
    $AND = " AND ";
    if (!empty($_GET["id"])) {
        $condition = $condition . $AND . " id=:id " ;
        $searchValues["id"] = $_GET['id'];
    }
    if (!empty($_GET["invoiceNumber"])) {
        $condition = $condition . $AND . " invoiceNumber=:invoiceNumber ";
        $searchValues["invoiceNumber"] = $_GET['invoiceNumber'];
    }
    if (!empty($_GET["contractorsVatId"])) {
        $condition = $condition . $AND . " contractorsVatId=:contractorsVatId ";
        $searchValues["contractorsVatId"] = $_GET['contractorsVatId'];
    }
    if (!empty($_GET["contractorsName"])) {
        $condition = $condition . $AND . " contractorsName=:contractorsName ";
        $searchValues["contractorsName"] = $_GET['contractorsName'];
    }
    if (!empty($condition)) {

        $condition = " WHERE " . substr($condition, strlen($AND));
    }

    $stmt = $dbh->prepare("SELECT * FROM salesinvoices {$condition} ORDER BY id ASC {$pagination->getQueryPart()}");
    echoTop($stmt);
    echoTop($searchValues,1);
    $stmt->execute($searchValues);
    $sellInvoicesList = $stmt->fetchAll(PDO::FETCH_CLASS, "SellInvoice");
} catch (Exception $e) {
    echoTop($e->getMessage());
    throw new Exception($e->getMessage());
}

displayMenu(
    new BaseListPage(
        new SellInvoiceListComponent($sellInvoicesList),
        new InvoiceSearchForm($_GET),
        "Faktury Sprzedaży",
        new PaginatorComponent($pagination->getSize()),
        '/krokiety/index.php/add-sell-invoice'));

?>
