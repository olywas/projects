<form method="POST">
    <h3>REJESTRACJA</h3><br>
    Imie:<br>
    <input type="text" name="imie"><br>
    Nazwisko:<br>
    <input type="text" name="nazwisko"><br>
    Login: <br>
    <input type="text" name="login" required><br>
    Hasło:<br>
    <input type="password" name="haslo" required><br><br>
    Kontakt:<br>
    <textarea name="kontakt" rows="5" cols="30"></textarea><br>
    <input type="submit" value="Zarejestruj">
</form>
<div class="add">
    <a href="index.php?page=glowna" class="acc1">POWRÓT</a>
</div>



<?php

include 'connbaza.php';

if (!empty($_POST["login"])) {

    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    $kontakt = $_POST["kontakt"];

    $hasloHash = password_hash($haslo, PASSWORD_DEFAULT);

    //sprawdzenie czy login jest zajęty
    $logincheck = "SELECT * FROM uzytkownicy WHERE login='$login'";
    $results = mysqli_query($baza, $logincheck);

    if (mysqli_num_rows($results) > 0) {
        echo "login <b>" . $login . "</b> jest już zajęty.";
    } else {
        //jeżeli nie jest to dodaje użytkownika
        $sql = "INSERT INTO uzytkownicy (imie, nazwisko, login, haslo, kontakt) VALUES ('$imie', '$nazwisko','$login','$hasloHash','$kontakt')";

        if ($baza->query($sql) === true) {
            echo "Poprawnie dodano osobę.";
            header("Refresh:5; url=index.php?page=glowna");
        } else {
            echo "błąd: " . $sql . "<br>" . $baza->error;
        }
    }

    $baza->close();
}
?>