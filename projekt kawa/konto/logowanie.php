<form method="POST">
    <h3>LOGOWANIE</h3>
    Login: <br>
    <input class="polelogin" type="text" name="login" required><br>
    Hasło:<br>
    <input class="polelogin" type="password" name="pass" required><br>
    <input class="zatwierdz" type="submit" value="Zaloguj"><br><br>

    <?php
    session_unset();
    session_destroy();
    //podłączenie bazy
    include 'connbaza.php';

    // SYSTEM LOGOWANIA
    if (!empty($_POST['login'])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];


        $checkHash = "SELECT haslo FROM uzytkownicy WHERE login='$login'";
        $result = $baza->query($checkHash);


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $wynik = $row["haslo"];
            }
            if (password_verify($pass, $wynik)) {
                session_start();
                $_SESSION['login'] = $login;
                header("Refresh:0; url=index.php?page=glowna");
            } else {
                echo "Błędne hasło lub login.";
            }
        } else {
            echo "Błędne hasło lub login.";
        }
    }
    ?>
    <br><a href="index.php?page=konto/rejestracja">Nie masz konta? Zarejestruj się</a>
</form>