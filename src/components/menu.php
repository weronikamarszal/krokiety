<?php

function displayMenu($page)
{
    echo "
    <div>
    <a href='/krokiety/src/pages/sell-invoice/sell-invoice.php'>Faktury Sprzedaży</a>
    <a href='/krokiety/src/pages/buy-invoice/buy-invoice.php'>Faktury Zakupu</a>
    <a href='/krokiety/src/pages/document/document.php'>Dokumenty</a>
    <a href='/krokiety/src/pages/licence/licence.php'>Licencje</a>
    <a href='/krokiety/src/pages/equipment/equipment.php'>Sprzęty</a>
    <a href='/krokiety/src/pages/user/usersList.php'>Użytkownicy</a>
    
    </div>
        <div>" . $page . " </div>

";
}

?>