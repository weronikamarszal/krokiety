<?php

function displayMenu($page)
{
    echo "
    <div>
    <a href='sell-invoice.php'>Faktura Sprzedaży</a>
    <a href='buy-invoice.php'>Faktura Zakupu</a>
    </div>
    <div>" . $page . " </div>
";
}

?>