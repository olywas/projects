<div style="margin-top: 8%; margin-bottom: 8%;">
    <form method="POST">
        <label class="form-label">Wprowadź nazwę kroniki</label><br>
        <input type="text" name="nazwa_kroniki" class="form-control " required><br>
        <label class="form-label">Pozostaw uczniów</label>
        <input type="checkbox" name="reset" class="form-check-input"><br><br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Stwórz
        </button>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">Uwaga!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                        <p>Stworzenie kroniki wyczyści wszystkich uczniów oraz punktacje z bazy danych,
                            następnie zapisze je w formie nazwy kroniki wraz z uzyskanymi punktami przez każdy z domów.
                        </p>
                        <p>
                            Czy napewno chcesz kontynuować?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                        <button type="submit" class="btn btn-danger">Potwierdzam</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php

if (isset($_POST['nazwa_kroniki'])) {
    include 'conn.php';


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

    $nazwa = $_POST['nazwa_kroniki'];

    $sql = "INSERT INTO kroniki (nazwa_kroniki, Gryffindor, Slytherin, Ravenclaw, Hufflepuff) VALUES ('$nazwa', '$gryf', '$sly', '$rav', '$huff');";

    if ($conn->query($sql) === true) {
        echo 'Poprawnie utworzono kronikę. ';
    } else {
        echo 'błąd';
    }

    if (!isset($_POST['reset'])) {
        $sql2 = "DELETE FROM uczniowie WHERE id BETWEEN 1 AND 1000000";

        if ($conn->query($sql2) === true) {
            echo 'Poprawnie wyczyszcono rekordy uczniów.';
        } else {
            echo 'błąd';
        }
    }


    $sql3 = "DELETE FROM punkty_historia WHERE id BETWEEN 1 AND 1000000";

    if ($conn->query($sql3) === true) {
        echo ' Poprawnie zresetowano punkty. ';
    } else {
        echo 'błąd';
    }

    unset($_POST['nazwa_kroniki']);
    $conn->close();
}
?>