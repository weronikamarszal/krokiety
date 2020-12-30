<?php
require_once __DIR__ . '/../../components/menu.php';
require_once __DIR__ . '/../../components/list-page/BaseListPage.php';
require_once __DIR__ . '/../../components/PaginatorComponent.php';
require_once __DIR__ . '/../../components/component.interface.php';
require_once __DIR__ . '/../../components/invoice/InvoiceSearchForm.php';
require_once __DIR__ . '/SellInvoice.php';
require_once __DIR__ . '/SellInvoiceListComponent.php';
require_once __DIR__ . '/../../components/databaseConnection.php';


$sellInvoicesList=[];

try{
    $stmt= $dbh->prepare("SELECT * FROM salesinvoices ORDER BY id ASC");
    $stmt->execute();
    $sellInvoices = $stmt->fetchAll();
    foreach ($sellInvoices as $s) {
        $sellInvoice = new SellInvoice();
        $sellInvoice->setId($s['id']);
        $sellInvoice->setSellInvoiceNumber($s['numerFaktury']);
        $sellInvoice->setGrossAmount($s['kwotaBrutto']);
        $sellInvoice->setVatTaxAmount($s['kwotaPodatkuVAT']);
        $sellInvoice->setNetAmount($s['kwotaNetto']);
        $sellInvoice->setContractorsName($s['nazwaKontrahenta']);
        $sellInvoice->setContractorsVATId($s['VATIDKontrahenta']);
        $sellInvoice->setNetAmountInCurrency($s['kwotaNettoWWalucie']);
        $sellInvoice->setCurrencyName($s['nazwaWaluty']);
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
