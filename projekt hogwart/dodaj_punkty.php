<script>
    function kat1() {
        var kat = document.getElementById('kat').value;
        var wypisz = document.getElementById('wypisz');

        if (kat == 'Inna') {
            wypisz.innerHTML = 'Opis<br><input type="text" class="form-control " name="inna_kat" required>';
        } else {
            wypisz.innerHTML = '';
        }
    }
</script>


<div style="margin-top: 8%; margin-bottom: 8%;">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Wprowadz ilość punktów (+/-):</label>
            <input type="number" class="form-control" name="punkty" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategoria:</label>
            <br>
            <select onchange="kat1()" class="form-select" name="kategoria" id="kat">
                <option selected value="Sprawdzian">Sprawdzian</option>
                <option value="Kartkówka">Kartkówka</option>
                <option value="Konkurs">Konkurs</option>
                <option value="Inna">Inna</option>
            </select>
            <span id="wypisz"></span>
            <br>
            <label class="form-label">Wybierz dom:</label>
            <br>
            <select class="form-select" name="dom">
                <option selected value="Gryffindor">Gryffindor</option>
                <option value="Slytherin">Slytherin</option>
                <option value="Ravenclaw">Ravenclaw</option>
                <option value="Hufflepuff">Hufflepuff</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Dodaj">
    </form>
</div>

<?php
include 'conn.php';

if (!empty($_POST['punkty']) && !empty($_POST['dom'])) {
    $punkty = $_POST['punkty'];
    $kat = $_POST['kategoria'];
    $dom = $_POST['dom'];
    if (isset($_POST['inna_kat'])) {
        $kat = $_POST['inna_kat'];
    }

    $sql = "INSERT INTO punkty_historia (kategoria, ilosc_punktow, dom) VALUES ('$kat', '$punkty', '$dom');";

    if ($conn->query($sql) === true) {
        echo "Poprawnie dodano";
    } else {
        echo "błąd: " . $sql . "<br>" . $conn->error;
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-8 col-sm-4 text-center rounded-3 bg-secondary p-1 dodaj_punkty text-light">
            <?php
            for ($i = 1; $i <= 4; $i++) {
                if ($i == 1) {
                    $sql = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Gryffindor'";
                } else if ($i == 2) {
                    $sql = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Slytherin'";
                } else if ($i == 3) {
                    $sql = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Ravenclaw'";
                } else if ($i == 4) {
                    $sql = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Hufflepuff'";
                }

                if ($wynik = $conn->query($sql)) {
                    if ($wynik->num_rows > 0) {
                        while ($row = $wynik->fetch_assoc()) {
                            $punkty = $row['punkty'];
                        }
                    }
                }

                if ($i == 1) {
                    $gryf = $punkty;
                } else if ($i == 2) {
                    $sly = $punkty;
                } else if ($i == 3) {
                    $rav = $punkty;
                } else if ($i == 4) {
                    $huff = $punkty;
                }
            }
            echo 'Gryffindor: <b>' . $gryf . ' pkt.</b> ';
            echo 'Slytherin: <b>' . $sly . ' pkt.</b> ';
            echo 'Ravenclaw: <b>' . $rav . ' pkt.</b> ';
            echo 'Hufflepuff: <b>' . $huff . ' pkt.</b>';

            $conn->close();
            ?>
        </div>
        <div class="col"></div>
    </div>
</div>