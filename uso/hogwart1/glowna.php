<?php
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

$conn->close();
?>

<img class="glowna_logo" src="img/okulary.png">
<div class="glowna_napis1 text-white">
    STRONA GŁÓWNA
</div>

<div style="width: 100%;">
    <hr style="color:white !important; height: 2px; margin-top: 3%; margin-bottom: 3%;">
</div>
<div class="container d-none d-lg-block">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-2 d-flex justify-content-center">
            <img class="img-fluid" src="img/Gryffindor.png" style="width: 50%; height: auto;">
        </div>
        <div class="col-lg-2 d-flex justify-content-center">
            <img class="img-fluid" src="img/Slytherin.png" style="width: 50%; height: auto;">
        </div>
        <div class="col-lg-2 d-flex justify-content-center">
            <img class="img-fluid" src="img/Ravenclaw.png" style="width: 50%; height: auto;">
        </div>
        <div class="col-lg-2 d-flex justify-content-center">
            <img class="img-fluid" src="img/Hufflepuff.png" style="width: 50%; height: auto;">
        </div>
        <div class="col"></div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<div class="margin: auto;">
    <canvas id="myChart" style="width:100%; height: 600px; margin-left:-30px;"></canvas>

    <script>
        var gry = <?php echo $gryf; ?>;
        var sly = <?php echo $sly; ?>;
        var rav = <?php echo $rav; ?>;
        var huf = <?php echo $huff; ?>;
        var xValues = ["Gryffindor", "Slytherin", "Ravenclaw", "Hufflepuff"];
        var yValues = [gry, sly, rav, huf];
        var barColors = ["red", "green", "blue", "yellow"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },

            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                },

            }
        });
    </script>
</div>
<div style="width: 100%;">
    <hr style="color:white !important; height: 2px; margin-top: 3%; margin-bottom: 3%;">
</div>