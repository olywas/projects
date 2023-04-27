<div style="margin-top: 8%; margin-bottom: 8%;">
    <form method="POST">
        <label class="form-label">Wprowadź komende SQL</label>
        <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="sql"></textarea>
            <label>komenda</label>
        </div>
        <input type="submit" class="btn btn-primary" value="Wykonaj">
    </form>
</div>

<?php
/*$baza = new mysqli("192.168.101.62", "labzsk_owasilewski", "uVw+kV1=(V5G", "labzsk_owasilewski");

if ($baza->connect_error) {
    die("Nie udało się połączyc z bazą danych: " . $baza->connect_error);
}*/

include 'conn.php';

if (!empty($_POST['sql'])) {
    $komenda = $_POST['sql'];
    $sql = "$komenda";

    if ($conn->query($sql) === true) {
        echo 'poprawnie wykonano';
    } else {
        echo 'błąd';
    }
}


$conn->close();
?>