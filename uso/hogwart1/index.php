<!DOCTYPE html>
<html lang="pl">

<?php
$page = 'glowna';
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hogwart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-black">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black  menu-top">
        <div class="container-fluid menu ">
            <a class="navbar-brand d-lg-none mobile_logo" href="index.php?page=glowna">
                <img src="img/herb.png" alt="logo">
            </a>
            <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-black" id="navbarNavDropdown">
                <ul class="navbar-nav text-center fs-2 mb-sm-2 ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php?page=glowna">STRONA GŁÓWNA</a>
                    </li>
                    <hr>
                    <li class="nav-item ">
                        <a class="nav-link " href="index.php?page=ranking">RANKINGI DOMÓW</a>
                    </li>
                    <hr>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            WIĘCEJ
                        </a>
                        <ul class="dropdown-menu bg-dark text-center" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item  " href="panel.php?page=dodaj_punkty">PANEL</a></li>
                            <li><a class="dropdown-item " href="#">PLIKI</a></li>
                        </ul>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
    </nav>
    <div id="tlo">
        <div id="tlo_box">
            <?php
            if ($_GET["page"] == 'glowna') {
                echo '<img src="./img/zamek1.png" alt="tlo">';
                echo '<div id="tlo_napis">
                        <div id="tlo_napis_maly">SZKOŁA MAGII<br> I CZARODZIEJSTWA</div>
                        <div id="tlo_napis_duzy">W HOGWARCIE</div>
                     </div>';
                echo ' <div class="logo">
                     <a href="index.php?page=glowna">
                         <img class="logo_mobile" src="./img/herb.png" alt="logo">
                     </a>
                 </div>';
            } else if ($_GET["page"] == 'ranking') {
                echo '<img src="./img/rankingi.svg" alt="tlo">';
            }
            ?>
        </div>
    </div>
    <div id="center">
        <div class="tresc">
            <?php
            include($page . ".php");
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>