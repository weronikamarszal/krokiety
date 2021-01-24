<?php
require_once __DIR__ . '/src/autoload.php';
session_save_path(getcwd() . "/session_files");
session_start();
if(isset($_SESSION["userid"])){
    $name=$_SESSION["firstname"];
    $role=$_SESSION["role"];
}
error_reporting(error_reporting() & ~E_NOTICE);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//bootstapHead();

if ('/krokiety/index.php' === $uri) {
    displayMenu("");
} elseif ('/krokiety/index.php/document' === $uri) {
    require __DIR__ . '/src/pages/document/document.php';
} elseif ('/krokiety/index.php/equipment' === $uri) {
    require __DIR__ . '/src/pages/equipment/equipment.php';
} elseif ('/krokiety/index.php/licence' === $uri) {
    require __DIR__ . '/src/pages/licence/licence.php';
} elseif ('/krokiety/index.php/buy-invoice' === $uri) {
    require __DIR__ . '/src/pages/buy-invoice/buy-invoice.php';
} elseif ('/krokiety/index.php/sell-invoice' === $uri) {
    require __DIR__ . '/src/pages/sell-invoice/sell-invoice.php';
} elseif ('/krokiety/index.php/usersList' === $uri) {
    require __DIR__ . '/src/pages/user/usersList.php';
} elseif ('/krokiety/index.php/add-buy-invoice' === $uri) {
    require __DIR__ . '/src/pages/buy-invoice/add-buy-invoice.php';
} elseif ('/krokiety/index.php/add-document' === $uri) {
    require __DIR__ . '/src/pages/document/add-document.php';
} elseif ('/krokiety/index.php/add-equipment' === $uri) {
    require __DIR__ . '/src/pages/equipment/add-equipment.php';
} elseif ('/krokiety/index.php/add-licence' === $uri) {
    require __DIR__ . '/src/pages/licence/add-licence.php';
} elseif ('/krokiety/index.php/add-sell-invoice' === $uri) {
    require __DIR__ . '/src/pages/sell-invoice/add-sell-invoice.php';
} elseif ('/krokiety/index.php/add-user' === $uri) {
    require __DIR__ . '/src/pages/user/add-user.php';
} elseif ('/krokiety/index.php/sell-invoice-details' === $uri) {
    require __DIR__ . '/src/pages/sell-invoice/sell-invoice-details.php';
} elseif ('/krokiety/index.php/buy-invoice-details' === $uri) {
    require __DIR__ . '/src/pages/buy-invoice/buy-invoice-details.php';
} elseif ('/krokiety/index.php/document-details' === $uri) {
    require __DIR__ . '/src/pages/document/document-details.php';
} elseif ('/krokiety/index.php/summary' === $uri) {
    require __DIR__ . '/src/pages/summary/summary.php';
} elseif ('/krokiety/index.php/login' === $uri) {
    require __DIR__ . '/src/pages/login/login.php';
} elseif ('/krokiety/index.php/logout' === $uri) {
    require __DIR__ . '/src/pages/login/logout.php';
} elseif ('/krokiety/index.php/welcome' === $uri) {
    require __DIR__ . '/src/pages/welcome/welcomePage.php';
}

//bootstrapFoot();
?>
