
<?php
require_once __DIR__ . '/../../autoload.php';


try{
    $stmt= $dbh->prepare("SELECT * FROM salesinvoices WHERE id=:id");
    $stmt->execute(array(':id' => $_GET['id']));
    $sellInvoice = $stmt->fetchObject();
}
catch(Exception $e){
    throw new Exception($e->getMessage());
}

displayMenu(new BaseAddPage("Szczegóły", new AddInvoiceComponent([], $sellInvoice, true)));