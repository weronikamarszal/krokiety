<?php
require_once __DIR__ . '/../../autoload.php';

$sellInvoicesList=[];

try{
    $stmt= $dbh->prepare("SELECT * FROM salesinvoices ORDER BY id ASC");
    $stmt->execute();
    $sellInvoices = $stmt->fetchAll();
    foreach ($sellInvoices as $s) {
        $sellInvoice = new SellInvoice();
        $sellInvoice->setId($s['id']);
        $sellInvoice->setInvoiceNumber($s['invoiceNumber']);
        $sellInvoice->setGrossAmount($s['grossAmount']);
        $sellInvoice->setVATTaxAmount($s['VATTaxAmount']);
        $sellInvoice->setNetAmount($s['netAmount']);
        $sellInvoice->setContractorsName($s['contractorsName']);
        $sellInvoice->setContractorsVatId($s['contractorsVatId']);
        $sellInvoice->setNetAmountInCurrency($s['netAmountInCurrency']);
        $sellInvoice->setCurrencyName($s['currencyName']);
        $sellInvoice->setPath($s['path']);


        array_push($sellInvoicesList,$sellInvoice);

    }
}
catch(Exception $e){
    throw new Exception($e->getMessage());
}
$data = [
    'numerFaktury' => "12345678",
    'kwotaBrutto' => "5000",
    'kwotaPodatkuVAT' => "1000",
    'kwotaNetto'=>"4000",
    'nazwaKontrahenta'=>"Vladimir",
    'VATIDKontrahenta'=>"87654321",
    'kwotaNettoWWalucie'=>"1333",
    'nazwaWaluty'=>"dollar",
    'path'=>"/C:/document/faktura1"

];
function insertSellInvoice($data,$dbh){
    $stmt= $dbh->prepare("INSERT INTO salesinvoices (numerFaktury, kwotaBrutto, kwotaPodatkuVAT, kwotaNetto, nazwaKontrahenta,
                          VATIDKontrahenta, kwotaNettoWWalucie, nazwaWaluty, path) VALUES 
                          (:numerFaktury,:kwotaBrutto,:kwotaPodatkuVAT,:kwotaNetto,:nazwaKontrahenta,:VATIDKontrahenta,
                          :kwotaNettoWWalucie,:nazwaWaluty,:path)");
    $stmt->execute($data);
}
/*insertSellInvoice($data,$dbh);*/

displayMenu(
    new BaseListPage(
        new SellInvoiceListComponent($sellInvoicesList),
        new InvoiceSearchForm(),
        "Faktury Sprzedaży",
        new PaginatorComponent(sizeof($sellInvoicesList)),
        '/krokiety/index.php/add-sell-invoice'));

/*displayMenu(
    new BaseListPage(
        new InvoiceListComponent($values),
        new InvoiceSearchForm(),
        "Faktury Sprzedaży",
        new PaginatorComponent(sizeof($values)),
        '/krokiety/src/pages/sell-invoice/add-sell-invoice.php'));
?>*/
?>
