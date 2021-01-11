<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$year = $_GET['year'];
$month = $_GET['month'];
$dateFrom = "$year-$month-01";
$dateTo = "$year-$month-31";

try {
    $stmt = $dbh->prepare("SELECT * FROM salesinvoices WHERE invoiceDate>=:dateFrom AND invoiceDate<=:dateTo");
    $stmt->execute(["dateFrom"=>$dateFrom, "dateTo"=>$dateTo]);
    $sellInvoicesList = $stmt->fetchAll(PDO::FETCH_CLASS, "SellInvoice");
//    echoTop($sellInvoicesList);
    $gross = 0;
    $cost = 0;
    $netto = 0;
    foreach ($sellInvoicesList as $invoice) {
        $gross += $invoice->getGrossAmount();
        $netto += $invoice->getNetAmount();
        $cost += $gross-$netto;
    }
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}


displayMenu(new SummaryComponent($_GET, ["gross"=>$gross,"cost"=>$cost,"netto"=>$netto]));


?>
