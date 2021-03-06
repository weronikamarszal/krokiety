<?php

function displayMenu($page)
{
    bootstrapHead();
    ob_start();
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand">Menu</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
        </button>
        <?php
        if (isset ($_SESSION['username'])) {
            $name = $_SESSION['firstname'];
            echo "<p style='color:white;'> Witaj, $name</p>";
        }

        ?>
    </nav>


    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!--<a class="nav-link" href='/krokiety/index.php/sell-invoice'>
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Faktury sprzedaży
                        </a>
                        <a class="nav-link" href='/krokiety/index.php/buy-invoice'>
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Faktury zakupu
                        </a>
                        <a class="nav-link" href='/krokiety/index.php/licence'>
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Licencje
                        </a>
                        <a class="nav-link" href='/krokiety/index.php/document'>
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Dokumenty
                        </a>
                        <a class="nav-link" href='/krokiety/index.php/equipment'>
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Sprzęty
                        </a>
                        <a class="nav-link" href='/krokiety/index.php/usersList'>
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Użytkownicy
                        </a>
                        <a class="nav-link" href='/krokiety/index.php/summary'>
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Podsumowanie
                        </a>-->
                        <?php
                        if (isset($_SESSION["userid"])) {
                            if (!($_SESSION["role"] == "employee")) {
                                echo "<a class='nav-link' href='/krokiety/index.php/sell-invoice'>
                            <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                            Faktury sprzedaży
                        </a>";
                            }
                            else{
                                echo "<a class='nav-link' href='/krokiety/index.php/add-sell-invoice'>
                            <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                            Dodaj fakturę sprzedaży
                        </a>";
                            }
                        }
                        if (isset($_SESSION["userid"])) {
                            if (!($_SESSION["role"] == "employee")) {
                                echo "<a class='nav-link' href='/krokiety/index.php/buy-invoice'>
                            <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                            Faktury zakupu
                        </a>";
                                }
                            else{
                                    echo "<a class='nav-link' href='/krokiety/index.php/add-buy-invoice'>
                            <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                            Dodaj fakturę zakupu
                        </a>";
                            }
                        }
                        if (isset($_SESSION["userid"])) {
                            if (1) {
                                echo "<a class='nav-link' href='/krokiety/index.php/licence''>
                            <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                            Licencje
                        </a>";
                            }
                        }
                        if (isset($_SESSION["userid"])) {
                            if (!($_SESSION["role"] == "employee")) {
                                echo "<a class='nav-link' href='/krokiety/index.php/document'>
                            <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                            Dokumenty
                        </a>";
                            }
                        }
                        if (isset($_SESSION["userid"])) {
                            if (1) {
                                echo "<a class='nav-link' href='/krokiety/index.php/equipment'>
                                <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                                Sprzęty
                            </a>";
                            }
                        }
                        if (isset($_SESSION["userid"])) {
                            if (!($_SESSION["role"] == "employee")) {
                                echo "<a class='nav-link' href='/krokiety/index.php/usersList'>
                                                <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                                                Użytkownicy
                                            </a>";
                            }
                        }
                        if (isset($_SESSION["userid"])) {
                            if (!($_SESSION["role"] == "employee")) {
                                echo "<a class='nav-link' href='/krokiety/index.php/summary'>
                            <div class='sb-nav-link-icon'><i class='fas fa-book-open'></i></div>
                            Podsumowanie
                        </a>";
                            }
                        }
                        if (!isset($_SESSION["userid"])) {
                            echo "<a class='btn btn-outline-success' href='/krokiety/index.php/login'>
                            <div class='sb-nav-link-icon'><i class='fas fa-sign-in-alt'></i></div>
                            Zaloguj się
                        </a><br>";
                        }
                        if (isset($_SESSION["userid"])) {
                            echo "<a class='btn btn-outline-danger' href='/krokiety/index.php/logout'>
                            <div class='sb-nav-link-icon'><i class='fas fa-sign-out-alt '></i></div>
                             Wyloguj się
                            </a>";
                        }
                        ?>
                        <!-- <a class='btn btn-outline-danger' href='/krokiety/index.php/logout'>
                             <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt "></i></div>
                             Wyloguj się
                         </a>-->
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?= $page ?>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Arbuzov, Grzelak, Marszał</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php
    //echo ob_get_clean();
    bootstrapFoot();
}

?>