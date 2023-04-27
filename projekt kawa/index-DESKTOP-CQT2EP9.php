<!DOCTYPE html>
<html lang="pl">
<?php
    if (isset($_GET["page"])){
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
        <div class="account">
            <a href="index.php?page=loginirejestracja" class="acc1">Logowanie / Rejestracja</a><br>
            <a href="index.php?page=mojekonto" class="acc1">Moje konto</a>
        </div>
    <header>
        Kawa.pl
        
    </header>

    <div class="center">
        <nav>
            <div class="drop_menu">
                <ul>
                    <li class="look"><a href="index.php?page=glowna">strona główna</a></li>

                    <li class="look"><a href="index.php?page=sklep">sklep internetowy</a>
                        <ul id="sklep">
                            <li><a href="index.php">Kawa</a></li>
                            <li><a href="index.php">Herbata</a></li>
                            <li><a href="index.php">Yerba mate</a></li>
                            <li><a href="index.php">Ekspresy i młynki</a></li>
                            <li><a href="index.php">akcesoria</a></li>
                        </ul>
                    </li>

                    <li class="look"><a href="index.php?page=katering">katering oferta</a>
                        <ul id="katering">
                            <li><a href="index.php">dowóz</a></li>
                            <li><a href="index.php">odbiór osobisty</a></li>
                        </ul>
                    </li>

                    <li class="look"><a href="index.php?page=kontakt">kontakt</a></li>
                </ul>
            </div>
        </nav>
    </div>


    <div class="center">
        <div class="wrap">
            <div class="content">
                <?php
                include( $page . ".php")
                ?>
            </div>
        </div>
    </div>

    <footer>
        Autor: Oliwier Wasilewski
    </footer>
</body>

</html>