
<?php
require_once __DIR__ . '/../../autoload.php';


try{
    $stmt= $dbh->prepare("SELECT * FROM purchaseinvoices WHERE id=:id");
    $stmt->execute(array(':id' => $_GET['id']));
    $buyInvoice = $stmt->fetchObject();
}
catch(Exception $e){
    throw new Exception($e->getMessage());
}

displayMenu(new BaseAddPage("Szczegóły", new AddInvoiceComponent([], $buyInvoice, true)));