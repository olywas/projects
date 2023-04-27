<div class="container d-flex align-items-center" style="min-height: 400px; overflow: auto;">
    <?php

    include 'conn.php';

    $sql = 'SELECT * FROM kroniki';

    $wynik = $conn->query($sql);
    if ($wynik->num_rows > 0) {
        echo  ''
            . '<table class="table table-light table-striped table-hover ">'
            . '<thead class="table-light">'
            . '<tr>'
            . '<th scope="col">ID</th>'
            . '<th scope="col">Nazwa kroniki</th>'
            . '<th scope="col">Gryffindor</th>'
            . '<th scope="col">Slytherin</th>'
            . '<th scope="col">Ravenclaw</th>'
            . '<th scope="col">Hufflepuff</th>'
            . '</tr>'
            . '</thead>'
            . '';
        $i = 0;
        while ($row = $wynik->fetch_assoc()) {

            echo ''
                . '<tr>'
                . '<td>'
                . ''
                . '' . $row['id']
                . '</td>'
                . '<td>'
                . '' . $row['nazwa_kroniki']
                . '</td>'
                . '<td>'
                . '' . $row['Gryffindor'] . ' pkt.'
                . '</td>'
                . '<td>'
                . '' . $row['Slytherin'] . ' pkt.'
                . '</td>'
                . '<td>'
                . '' . $row['Ravenclaw'] . ' pkt.'
                . '</td>'
                . '<td>'
                . '' . $row['Hufflepuff'] . ' pkt.'
                . '</td>'
                . '</tr>'
                . '';
            $i = $i + 1;
        }
        echo ''
            . '<tbody>'
            . '</table>'
            . '';
    }
    $conn->close();
    ?>
</div>