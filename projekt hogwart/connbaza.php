<?php
//podłączenie bazy
$baza = new mysqli("*******", "*********", "*********", "*********");

if ($baza->connect_error) {
    die("Nie udało się połączyc z bazą danych: " . $baza->connect_error);
}
