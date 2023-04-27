
<?php
if (isset($_SESSION['login'])) {
    echo "<h1>Witaj " . $_SESSION["login"] . "</h1>";
} else {
    echo "<h1>Witaj</h1>";
}
?>