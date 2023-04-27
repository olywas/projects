<?php
include 'connbaza.php';

$rodzaj = $_GET['rodzaj'];
$id = $_GET["id"];

$sql = "SELECT * FROM produkty WHERE id=$id";

if ($wynik = $baza->query($sql)) {
    if ($wynik->num_rows > 0) {
        while ($row = $wynik->fetch_assoc()) {
            echo '<div class="about">'
                . '<div>Rodzaj: ' . $row['rodzaj'] . '</div>'
                . '<div class="itemheader">'
                . $row['nazwa']
                . '</div>
                
                <div class="price">
                Cena '
                . $row['cena']
                . ' zł</div>
                
                    <div class="details">'
                . $row['info']
                . '</div>
                </div>'

                . '<div class="photo"><img class="url" src="' . $row['url'] . '" alt="brak zdjęcia"></div>';
        }
    } else {
        echo "0 wyników";
    }
}


?>
<div class="add">
    <?php

    echo '<a href="index.php?page=sklep/sklep&rodzaj=' .
        $rodzaj . '" class="back">POWRÓT</a>';
    ?>
</div>