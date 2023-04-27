<div class="dane">
    <b>Twoje dane</b>
    <?php
    include 'connbaza.php';

    $login = $_SESSION["login"];

    $dane = "SELECT avatarURL FROM uzytkownicy WHERE login='$login'";
    $results = mysqli_query($baza, $dane);

    if (mysqli_num_rows($results) > 0) {
        while ($row = $results->fetch_assoc()) {
            $avatar = $row['avatarURL'];
        }
    }
    echo '<img class="avatar" src="' . $avatar . '">';
    ?>
</div>


<div>
    <div class="dane1">
        <?php

        $dane = "SELECT imie, nazwisko, kontakt, avatarURL FROM uzytkownicy WHERE login='$login'";
        $results = mysqli_query($baza, $dane);

        if (mysqli_num_rows($results) > 0) {
            echo 'Login: <b>' . $_SESSION["login"] . '</b><br>';
            while ($row = $results->fetch_assoc()) {
                echo 'Imie i Nazwisko: <b>' . $row['imie'] . ' ' . $row['nazwisko'] . '</b>'
                    . '<br>Kontakt: <b>' . $row['kontakt'] . '</b>';
            }
        }
        $baza->close();
        ?>
    </div>
    <form method="POST">
        <input class="poledane" type="text" name="kontakt" value="Wprowadź nowy kontakt">
        <input class="zatwierdz" type="submit" value="Zmien">
    </form>

    <form method="POST">
        <input class="poledane" type="text" name="url" value="Wprowadź URL avatru">
        <input class="zatwierdz" type="submit" value="Zmien">
    </form>

</div>

<form method="$_POST" action="konto/wyloguj.php">
    <input class="zatwierdz" type="submit" value="Wyloguj">
</form>

<?php
include 'connbaza.php';

if (!empty($_POST['kontakt'])) {

    $kontakt = $_POST['kontakt'];
    $login = $_SESSION["login"];

    $zmiana = "UPDATE uzytkownicy SET kontakt = '$kontakt' WHERE uzytkownicy.login = '$login'";

    if ($baza->query($zmiana) === true) {
        header("Refresh:0");
    } else {
        echo "błąd: " . $sql . "<br>" . $baza->error;
    }
    unset($_POST['kontakt']);
} else if (!empty($_POST['url'])) {
    $url = $_POST['url'];
    $login = $_SESSION["login"];

    $zmiana = "UPDATE uzytkownicy SET avatarURL = '$url' WHERE uzytkownicy.login = '$login'";

    if ($baza->query($zmiana) === true) {
        header("Refresh:0");
    } else {
        echo "błąd: " . $sql . "<br>" . $baza->error;
    }
}
$baza->close();
?>