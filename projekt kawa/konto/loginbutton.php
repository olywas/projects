<div class="account">
    <span class="acc1">
        <?php
        if (isset($_SESSION['login'])) {
            echo "Moje konto<br>";
            echo '<span style="color: green;font-size: 15px;background-color:white;border-radius: 10px;padding: 2px;">ZALOGOWANO</span>';
        } else {
            echo "Logowanie";
        }
        ?>
    </span><br>
</div>
<div class="loginpanel">
    <div class="content">
        <?php
        if (isset($_SESSION['login'])) {
            include 'konto/mojekonto.php';
        } else {
            include 'konto/logowanie.php';
        }
        ?>
    </div>
</div>