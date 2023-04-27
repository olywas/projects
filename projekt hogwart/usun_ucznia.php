<div class="container">
    <div class="row">

        <div class="col-lg-8">
            <div style="max-height: 700px; max-width: 600px; overflow: auto;">

                <?php

                include 'conn.php';

                $sql = 'SELECT * FROM uczniowie ORDER BY uczniowie.dom ASC';

                $wynik = $conn->query($sql);
                if ($wynik->num_rows > 0) {
                    echo  '<form method="POST">'
                        . '<table class="table table-light table-striped table-hover ">'
                        . '<thead class="table-light">'
                        . '<tr>'
                        . '<th scope="col">ID</th>'
                        . '<th scope="col">Uczeń</th>'
                        . '<th scope="col">Dom</th>'
                        . '</tr>'
                        . '</thead>'
                        . '';
                    $i = 0;
                    while ($row = $wynik->fetch_assoc()) {

                        echo ''
                            . '<tr>'
                            . '<td>'
                            . '<input type="checkbox" name="check_list[' . $i . ']" id="check_list[' . $i . ']" value="' . $row['id'] . '"> '
                            . '' . $row['id']
                            . '</td>'
                            . '<td for=name="check_list[' . $i . ']">'
                            . '' . $row['imie_nazwisko']
                            . '</td>'
                            . '<td>'
                            . '' . $row['dom']
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

                ?>
            </div>
        </div>

        <div class="col-lg-4 d-flex justify-content-center align-items-center flex-column text-center p-3">
            <label class="form-label">Usuń zaznaczoną osobę/osoby</label>
            <button type="button" class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Usuń
            </button>


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Uwaga!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-dark">
                            <p>Czy napewno chcesz usunąć zaznaczoną osobę/osoby?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                            <button type="submit" class="btn btn-danger">Potwierdzam</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php
            if (isset($_POST['check_list'])) {
                $del = '';
                foreach ($_POST['check_list'] as $item) {
                    $del = $del . ' OR id = ' . $item;
                }

                $sql1 = 'DELETE FROM uczniowie WHERE id = -1' . $del . ';';

                $wynik = $conn->query($sql1);
                echo "<meta http-equiv='refresh' content='0'>";
                $conn->close();
            }

            ?>
        </div>
    </div>
</div>