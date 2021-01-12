
<?php
require_once __DIR__ . '/../../autoload.php';


try{
    $stmt= $dbh->prepare("SELECT path FROM salesinvoices WHERE id=:id");
    $stmt->execute(array(':id' => $_GET['id']));
    $sellInvoice = $stmt->fetchObject();
}
catch(Exception $e){
    throw new Exception($e->getMessage());
}

$link = "Location: " . $sellInvoice->path;
header($link);






//header("Location: localhost/krokietyindex.php/licence");
//displayMenu("localhost/krokietyindex.php/licence");

//displayMenu(new BaseAddPage("Szczegóły", new AddInvoiceComponent([], $sellInvoice, true)));