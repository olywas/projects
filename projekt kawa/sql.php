<form method="POST">
    Wprowadz komende sql:<br>
    <input style="width: 600px; height: 100px;" type="text" name="sql">
    <br>
    <input type="submit" value="Wykonaj">
</form>


<?php
/*$baza = new mysqli("192.168.101.62", "labzsk_owasilewski", "uVw+kV1=(V5G", "labzsk_owasilewski");

if ($baza->connect_error) {
    die("Nie udało się połączyc z bazą danych: " . $baza->connect_error);
}*/

include 'connbaza.php';

if (!empty($_POST['sql'])) {
    $komenda = $_POST['sql'];
    $sql = "$komenda";

    if ($baza->query($sql) === true) {
        echo 'poprawnie wykonano';
    } else {
        echo 'błąd';
    }
}



?>