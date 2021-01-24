<?php
require_once __DIR__ . '/../../autoload.php';
global $dbh;

$licenceList = [];
$pagination = new Pagination("licenses");

try {
    if (isset($_SESSION["userid"])) {
        $id = $_SESSION["userid"];
        if (($_SESSION["role"] == "employee")) {
        $stmt = $dbh->prepare("SELECT * FROM licenses WHERE userId=$id ORDER BY id ASC {$pagination->getQueryPart()}");
        $stmt->execute();
        $licenceList = $stmt->fetchAll(PDO::FETCH_CLASS, "Licence");
        }
        else {
            $stmt = $dbh->prepare("SELECT * FROM licenses ORDER BY id ASC {$pagination->getQueryPart()}");
            $stmt->execute();
            $licenceList = $stmt->fetchAll(PDO::FETCH_CLASS, "Licence");
        }
    }
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

$href = '/krokiety/index.php/add-licence';
displayMenu(new BaseListPage(
    new LicenceListComponent($licenceList),
    null,
    "Licencje",
    new PaginatorComponent($pagination->getSize()),
    $href,"licenses"));
?>
