
<?php
require_once __DIR__ . '/../../autoload.php';


try{
    $stmt= $dbh->prepare("SELECT path FROM purchaseinvoices WHERE id=:id");
    $stmt->execute(array(':id' => $_GET['id']));
    $buyInvoice = $stmt->fetchObject();
    echoTop($buyInvoice->path);
}
catch(Exception $e){
    throw new Exception($e->getMessage());
}

$link = "Location: " . $buyInvoice->path;
header($link);
