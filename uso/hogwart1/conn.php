<?php
$conn = mysqli_connect('localhost', 'root', '', 'hogwart');

if ($conn->connect_error) {
    die("Nie udało się połączyc z bazą danych: " . $conn->connect_error);
}
