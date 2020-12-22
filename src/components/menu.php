<?php

function displayMenu($page)
{
    echo "
    <div>
    <a href='/krokiety/index.php/sell-invoice'>Faktury Sprzedaży</a>
    <a href='/krokiety/index.php/buy-invoice'>Faktury Zakupu</a>
    <a href='/krokiety/index.php/licence'>Licencje</a>
    <a href='/krokiety/index.php/document'>Dokumenty</a>
    <a href='/krokiety/index.php/equipment'>Sprzęty</a>
    <a href='/krokiety/index.php/usersList'>Użytkownicy</a>
    
    </div>
        <div>" . $page . " </div>

";
}

?>