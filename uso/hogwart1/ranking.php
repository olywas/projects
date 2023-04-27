<?php
include 'conn.php';
?>

<img class="glowna_logo" src="img/hogwart.jpg">
<div class="glowna_napis">
    RANKINGI DOMÓW
</div>

<div class="container ">

    <div class="row">

        <div class="col-lg-6 col-sm-12 dom_wrap ranking_border_top ranking_border_srodek">
            <a href="index.php?page=dom_szczegoly&dom=Gryffindor">
                <div class="row row-cols-2">
                    <div class="col-6 mobile_border_left">
                        <img class="img-fluid dom_logo" src="img/1.png">
                    </div>
                    <div class="col-6 d-flex align-items-center p0">
                        <div class="row ">
                            <div class="col-12 p0">
                                <span class="ranking_nazwa" style="color: #dc3545;">GRYFFINDOR</span>
                            </div>
                            <div class="col-12 p0">
                                <span class="ranking_punkty" style="color: #dc3545;">
                                    <?php
                                    $sql1 = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Gryffindor'";

                                    if ($wynik = $conn->query($sql1)) {
                                        if ($wynik->num_rows > 0) {
                                            while ($row = $wynik->fetch_assoc()) {
                                                if (isset($row['punkty'])) {
                                                    echo $row['punkty'] . ' punktów';
                                                } else {
                                                    echo '0 pkt.';
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-6 col-sm-12 dom_wrap ranking_border_top">
            <a href="index.php?page=dom_szczegoly&dom=Slytherin">
                <div class="row row-cols-2">
                    <div class="col-6 mobile_border_left">
                        <img class="img-fluid dom_logo" src="img/2.png">
                    </div>
                    <div class="col-6 d-flex align-items-center p0">
                        <div class="row ">
                            <div class="col-12 p0">
                                <span class="ranking_nazwa" style="color: #20c997;">SLYTHERIN</span>
                            </div>
                            <div class="col-12 p0">
                                <span class="ranking_punkty" style="color: #20c997;">
                                    <?php
                                    $sql2 = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Slytherin'";

                                    if ($wynik = $conn->query($sql2)) {
                                        if ($wynik->num_rows > 0) {
                                            while ($row = $wynik->fetch_assoc()) {
                                                if (isset($row['punkty'])) {
                                                    echo $row['punkty'] . ' punktów';
                                                } else {
                                                    echo '0 pkt.';
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 dom_wrap ranking_border_bottom ranking_border_srodek">
            <a href="index.php?page=dom_szczegoly&dom=Ravenclaw">
                <div class="row row-cols-2">
                    <div class="col-6 mobile_border_left">
                        <img class="img-fluid dom_logo" src="img/3.png">
                    </div>
                    <div class="col-6 d-flex align-items-center p0">
                        <div class="row ">
                            <div class="col-12 p0">
                                <span class="ranking_nazwa" style="color: #0d6efd;">RAVENCLAW</span>
                            </div>
                            <div class="col-12 p0">
                                <span class="ranking_punkty" style="color: #0d6efd;">
                                    <?php
                                    $sql3 = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Ravenclaw'";

                                    if ($wynik = $conn->query($sql3)) {
                                        if ($wynik->num_rows > 0) {
                                            while ($row = $wynik->fetch_assoc()) {
                                                if (isset($row['punkty'])) {
                                                    echo $row['punkty'] . ' punktów';
                                                } else {
                                                    echo '0 pkt.';
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-sm-12 dom_wrap ranking_border_bottom">
            <a href="index.php?page=dom_szczegoly&dom=Hufflepuff">
                <div class="row row-cols-2">

                    <div class="col-6 mobile_border_left">
                        <img class="img-fluid dom_logo" src="img/4.png">
                    </div>
                    <div class="col-6 d-flex align-items-center p0">
                        <div class="row ">
                            <div class="col-12 p0">
                                <span class="ranking_nazwa" style="color: #ffc107;">HUFFLEPUFF
                                </span>
                            </div>
                            <div class="col-12 p0">
                                <span class="ranking_punkty" style="color: #ffc107;">
                                    <?php
                                    $sql4 = "SELECT SUM(ilosc_punktow) AS punkty FROM punkty_historia WHERE dom = 'Hufflepuff'";

                                    if ($wynik = $conn->query($sql4)) {
                                        if ($wynik->num_rows > 0) {
                                            while ($row = $wynik->fetch_assoc()) {
                                                if (isset($row['punkty'])) {
                                                    echo $row['punkty'] . ' punktów';
                                                } else {
                                                    echo '0 pkt.';
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div style="height: 200px;"></div>