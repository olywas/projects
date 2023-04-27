<?php
//podłączenie bazy
$baza = new mysqli("192.168.101.62", "labzsk_owasilewski", "uVw+kV1=(V5G", "labzsk_owasilewski");

if ($baza->connect_error) {
    die("Nie udało się połączyc z bazą danych: " . $baza->connect_error);
}
