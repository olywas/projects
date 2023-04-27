<?php
if (isset($_SESSION['login'])) {
    echo '<div class="add">';
    echo '<a href="index.php?page=sklep/dodajwpis" class="acc1">Dodaj wpis</a></div>';
}
$rodzaj = $_GET['rodzaj'];

echo '<form class="center" method="POST" action="index.php?page=sklep/wyszukaj&rodzaj=wszystko">';
?>
<span class="napiswyszukaj">Wyszkuj w sklepie</span>
<input class="pole" type="text" name="wyszukaj">
<input class="wyszukaj" type="submit" value="Wyszukaj/Pokaż wszystko">
</form>

<div class="center" style="margin-top: 20px;">
    <?php
    $wyszukaj = $_POST['wyszukaj'];
    include 'connbaza.php';
    if ($wyszukaj == '') {
        $sql = "SELECT * FROM produkty WHERE id NOT IN (37,38,41)";
    } else {
        echo '<span style="position: absolute;" >Wyszukano frazę <b>' . $wyszukaj . "</b></span>";
        $sql = "SELECT * FROM produkty WHERE nazwa OR info LIKE '%$wyszukaj%'";
    }


    if ($wynik = $baza->query($sql)) {
        if ($wynik->num_rows > 0) {
            $l = 0;
            echo '<table>';
            while ($row = $wynik->fetch_assoc()) {
                if ($l == 0) {
                    echo '<tr>';
                } else if ($l == 4) {
                    echo '</tr>';
                    $l = 0;
                }
                $l++;
                echo '<td><a style="text-decoration: none;" href="index.php?page=sklep/szczegoly&id=' . $row["id"] . '&rodzaj=' . $rodzaj . '">'
                    . '<div class="product">'
                    . '<div class="center"><img class="productimage" src="' . $row['url'] . '" alt="brak zdjęcia"></div>'
                    . $row["nazwa"] . '<br>'
                    . '<span style="color: red;">' . $row["cena"] . ' zł</span>'
                    . '</div></a></td>';
            }
            echo "</table></tr>";
        } else {
            echo "<br>0 wyników wyszukiwania";
        }
    }

    $wynik->free_result();
    $baza->close();
    ?>
</div>