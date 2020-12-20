<?php

function displayMenu($page)
{
    echo "
    <div>
    <a href='sell-invoice.php'>Faktury Sprzedaży</a>
    <a href='buy-invoice.php'>Faktury Zakupu</a>
    <a href='document.php'>Dokumenty</a>
    
    </div>
    <div>" . $page . " </div>
";
}

?>