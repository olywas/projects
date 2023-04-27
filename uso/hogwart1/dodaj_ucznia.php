<div style="margin-top: 8%; margin-bottom: 8%;">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Podaj imię i pierwszą literę nazwiska (np. Jan K):</label>
            <input type="text" class="form-control" name="imieN" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Wybierz dom:</label>
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
if (!empty($_POST['imieN']) && !empty($_POST['dom'])) {
    include 'conn.php';

    $imieN = $_POST['imieN'];
    $dom = $_POST['dom'];

    $sql = "INSERT INTO uczniowie (imie_nazwisko, dom) VALUES ('$imieN', '$dom')";

    if ($conn->query($sql) === true) {
        echo "Poprawnie dodano ucznia";
    } else {
        echo "błąd: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>