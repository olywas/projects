<!DOCTYPE html>
<html lang="pl">

<?php
$page = 'dodaj_punkty';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="panel">
    <div class="container pt-2 pb-2">
        <a href="index.php?page=glowna">
            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"></path>
                </svg>
                Strona główna
            </button>
        </a>
        <div class="border rounded-3 p-3 mt-3">
            <div class="row">
                <div class="col-12">
                    <h2>Panel Administracyjny</h2>
                    <hr>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-3 col-sm-12 d-flex flex-column align-items-center ">

                    <a href="panel.php?page=dodaj_punkty" class="btn btn-outline-secondary m-2 panel_menu" role="button">Dodaj punkty</a>

                    <div class="dropdown m-2 panel_menu">

                        <a style="width: 100%;" class="btn btn-outline-secondary dropdown-toggle text-start" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                            Uczniowie
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="panel.php?page=dodaj_ucznia">dodaj ucznia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="panel.php?page=usun_ucznia">usuń ucznia</a></li>
                        </ul>

                    </div>

                    <a href="panel.php?page=nagrody" class="btn btn-outline-secondary m-2 panel_menu" role="button">Nagrody</a>
                    <a href="panel.php?page=reset" class="btn btn-outline-secondary m-2 panel_menu" role="button">Reset domów</a>
                    <a href="panel.php?page=kroniki" class="btn btn-outline-secondary m-2 panel_menu" role="button">Kroniki</a>
                    <a href="panel.php?page=sql" class="btn btn-outline-secondary m-2 panel_menu" role="button">SQL</a>

                </div>
                <div class="col-lg-9 col-sm-12">
                    <?php
                    include($_GET['page'] . '.php');
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>