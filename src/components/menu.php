<?php

function displayMenu($page)
{
    echo "
    <div>
    <a href='/lab10_projekt/src/pages/sell-invoice/sell-invoice.php'>Faktury Sprzedaży</a>
    <a href='/lab10_projekt/src/pages/buy-invoice/buy-invoice.php'>Faktury Zakupu</a>
    <a href='/lab10_projekt/src/pages/document/document.php'>Dokumenty</a>
    <a href='/lab10_projekt/src/pages/licence/licence.php'>Licencje</a>
    <a href='/lab10_projekt/src/pages/equipment/equipment.php'>Sprzęty</a>
    <a href='/lab10_projekt/src/pages/user/usersList.php'>Użytkownicy</a>
    
    </div>
        <div>" . $page . " </div>

";
}

?>