<!DOCTYPE html>
<html lang="pl">
<?php
session_start();
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep Kawa.pl</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if ($page == "konto/rejestracja") {
    } else if ($page == "sklep/dodajwpis") {
    } else {
        include 'konto/loginbutton.php';
    }

    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] == 'admin') {
            echo '<a class="dev" href="index.php?page=sql">TRYB DEWELOPER</a>';
        }
    }
    ?>
    <header>
        Kawa.pl
    </header>

    <div class="center">
        <nav>
            <div class="drop_menu">
                <ul>
                    <li class="look"><a href="index.php?page=glowna">STRONA GŁÓWNA</a>
                    </li>
                    <li class="look"><a href="index.php?page=sklep/sklep&rodzaj=wszystko">SKLEP INTERNETOWY</a>
                        <ul id="sklep">
                            <li><a href="index.php?page=sklep/sklep&rodzaj=kawa">Kawa</a></li>
                            <li><a href="index.php?page=sklep/sklep&rodzaj=herbata">Herbata</a></li>
                            <li><a href="index.php?page=sklep/sklep&rodzaj=yerba">Yerba mate</a></li>
                            <li><a href="index.php?page=sklep/sklep&rodzaj=ekspresy">Ekspresy i młynki</a></li>
                            <li><a href="index.php?page=sklep/sklep&rodzaj=akcesoria">Akcesoria</a></li>
                        </ul>
                    </li>

                    <li class="look"><a href="index.php?page=katering">KATERING OFERTA</a>
                        <ul id="katering">
                            <li><a href="index.php">Dowóz</a></li>
                            <li><a href="index.php">Odbiór osobisty</a></li>
                        </ul>
                    </li>
                    <li class="look">
                        <a href="index.php?page=kontakt">KONTAKT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <div class="center">
        <div class="wrap">
            <div class="content">
                <?php
                include($page . ".php")
                ?>
            </div>
        </div>
    </div>

    <footer>
        Autor: Oliwier Wasilewski
    </footer>
</body>

</html>