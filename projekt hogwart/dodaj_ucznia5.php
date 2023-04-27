<div style="margin-top: 8%; margin-bottom: 8%;">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Podaj imię i pierwszą literę nazwiska (np. Jan K)</label>
            <input type="text" class="form-control mt-2" name="imieN1" required>
            <input type="text" class="form-control mt-2" name="imieN2" required>
            <input type="text" class="form-control mt-2" name="imieN3" required>
            <input type="text" class="form-control mt-2" name="imieN4" required>
            <input type="text" class="form-control mt-2" name="imieN5" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Wybierz dom</label>
            <br>
            <select class="form-select" name="dom">
                <option selected value="Gryffindor">Gryffindor</option>
                <option value="Slytherin">Slytherin</option>
                <option value="Ravenclaw">Ravenclaw</option>
                <option value="Hufflepuff">Hufflepuff</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Dodaj ucznia">
    </form>
</div>

<?php
if (!empty($_POST['imieN1']) && !empty($_POST['dom'])) {
    include 'conn.php';

    $dom = $_POST['dom'];
    $i = 1;

    while ($i <= 5) {
        $imie = 'imieN';
        $imie = $imie . $i;
        $imieN = $_POST[$imie];

        $sql = "INSERT INTO uczniowie (imie_nazwisko, dom) VALUES ('$imieN', '$dom')";

        $i = $i + 1;

        if ($conn->query($sql) === true) {
            echo "dodano " . $imieN . " ,";
        } else {
            echo "błąd: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}

?>