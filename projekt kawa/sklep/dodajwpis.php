<form method="POST">
    Wprowadź nazwę: <br>
    <input type="text" name="nazwa" required><br>
    Wprowadź cenę: <br>
    <input type="number" name="cena" required><br>
    Wybierz rodzaj:
    <select name="rodzaj">
        <option value="kawa">kawa</option>
        <option value="herbata">herbata</option>
        <option value="yerba">yerba mate</option>
        <option value="ekspresy">ekspresy</option>
        <option value="akcesoria">akcesoria</option>
    </select><br>
    Wprowadz dodatkowe informacje: <br>
    <textarea name="informacje" rows="5" cols="30"></textarea><br>
    Dodaj URL zdjęcia:<br>
    <input type="text" name="url"><br>
    <input type="submit" value="Dodaj produkt">
</form>

<div class="add">
    <?php
    echo '<a href="index.php?page=sklep/sklep&rodzaj=' .
        $_SESSION['rodzaj'] . '" class="back">POWRÓT</a>';
    ?>
</div>

<?php

if (!empty($_POST["nazwa"])) {
    $nazwa = $_POST["nazwa"];
    $cena = $_POST["cena"];
    $info = $_POST["informacje"];
    $url = $_POST["url"];
    $rodzaj = $_POST['rodzaj'];

    include 'connbaza.php';

    $sql = "INSERT INTO produkty (url, nazwa, cena, rodzaj, info) VALUES ('$url', '$nazwa', '$cena', '$rodzaj', '$info')";

    if ($cena > 0) {
        if ($baza->query($sql) === true) {
            echo '<div id="dodanie">' . "Poprawnie dodano produkt." . "</div>";
        } else {
            echo "błąd: " . $sql . "<br>" . $baza->error;
        }
    } else {
        echo "cena musi byc większa od zera!";
    }


    $baza->close();
}

?>