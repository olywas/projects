<?php
include 'conn.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 szczegoly_domu">
            SZCZEGÓŁY DOMU
        </div>
        <div class="col-12 text-center text-white szczegoly_domu_nazwa">
            <?php
            $dom = $_GET['dom'];
            echo $dom;
            ?>
        </div>
        <div class="col-12 text-center text-white ">
            <?php
            $sql = "SELECT * FROM dom WHERE nazwa = '$dom'";

            if ($wynik = $conn->query($sql)) {
                if ($wynik->num_rows > 0) {
                    while ($row = $wynik->fetch_assoc()) {
                        echo "CECHY: " . $row['opis'];
                    }
                }
            }
            ?>
        </div>

        <div class="col-12 d-flex justify-content-center align-items-center ">
            <img src="img/szczegoly_design.svg" alt="design" class="szczegoly_design ">
        </div>
        <hr style="width: 80%; color:white !important; height: 2px; margin: auto;">
        <div class="container d-flex justify-content-center">
            <div class="row szczegoly_wrap_dane">
                <div class="col-lg-6 col-sm-12 text-white szczegoly_dane_margin">

                    <div class="szczegoly_historia_tytul mt-3">HISTORIA PUNKTÓW:</div>

                    <div class="szczegoly_overflow">
                        <?php
                        $sql = "SELECT * FROM punkty_historia WHERE dom = '$dom'";

                        if ($wynik = $conn->query($sql)) {
                            if ($wynik->num_rows > 0) {
                                while ($row = $wynik->fetch_assoc()) {
                                    echo $row['ilosc_punktow'] . ' pkt. - ' . $row['kategoria'] . '<br>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 text-white szczegoly_dane_margin">
                    <div class="szczegoly_historia_tytul mt-3">UCZNIOWIE:</div>

                    <div class="szczegoly_overflow">
                        <?php
                        $sql = "SELECT * FROM uczniowie WHERE dom = '$dom'";

                        if ($wynik = $conn->query($sql)) {
                            if ($wynik->num_rows > 0) {
                                while ($row = $wynik->fetch_assoc()) {
                                    echo "- " . $row['imie_nazwisko'] . '<br>';
                                }
                            }
                        }
                        $conn->close();
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr style="width: 80%; color: white; height: 2px; margin: auto;">
    <div style="padding-top: 4%;"></div>
</div>
</div>