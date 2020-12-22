<?php
require_once __DIR__ . '/src/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

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
}

?>

