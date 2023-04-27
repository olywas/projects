<table class="table table-striped table-hover tabela m-auto border border-3">
    <tr>
        <th>Identyfikator</th>
        <th>Typ</th>
        <th>Środowisko</th>
        <th>Priorytet</th>
        <th>Kategoria</th>
        <th>Tytuł</th>
        <th>Opis</th>
        <th>Autor</th>
        <th>Załączniki</th>
    </tr>
    <?php

    include 'conn.php';


    $sql1 = "SELECT * FROM `dane_form`";

    $result = mysqli_query($conn, $sql1);

    while ($row = mysqli_fetch_assoc($result)) {
        echo ''
            . '<tr>'
            . ''
            . '<td>'
            . $row['id_form']
            . '</td>'
            . ''
            . '<td>';
        if ($row['typ'] == 'bug') {
            echo '<span class="text-danger">' . $row['typ'] . '</span>';
        } else if ($row['typ'] == 'funkcja') {
            echo '<span class="text-danger">' . $row['typ'] . '</span>';
        }
        echo '</td>'
            . ''
            . '<td>'
            . $row['srodowisko']
            . '</td>'
            . ''
            . '<td>'
            . $row['priorytet']
            . '</td>'
            . ''
            . '<td>'
            . $row['kategoria']
            . '</td>'
            . ''
            . '<td>'
            . $row['tytul']
            . '</td>'
            . ''
            . '<td>'
            . '<div class="opis">'
            . $row['opis']
            . '</div>'
            . '</td>'
            . ''
            . '<td>'
            . $row['autor']
            . '</td>'
            . ''
            . '<td>';
        if ($row['zalacznik'] == 'img/') {
            echo '<i>brak</i>';
        } else if (!empty($row['zalacznik'])) {
            echo '<a href="' . $row['zalacznik'] . '" target="_blank">zdjęcie</a>';
        }
        echo '</td>'
            . ''
            . '</tr>';
    }
    mysqli_close($conn);
    ?>

</table>