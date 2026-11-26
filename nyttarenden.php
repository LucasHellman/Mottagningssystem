<?php
require_once "includes/config.php";
require_once "includes/functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mottagningssystem - Nytt ärende</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container my-4">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded px-3 mb-4 border">
            <a class="navbar-brand fw-bold" href="index.php">IT-SUPPORT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3 me-2" href="index.php">Översikt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold bg-primary text-white rounded px-3 me-2" href="nyttarenden.php">Nytt ärende</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 me-2" href="arkiv.php">Arkiv</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link px-3 border rounded bg-white" href="personal.php">Personal</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="border rounded bg-white p-4">
            <h1 class="h4 fw-bold mb-4">Registrera kund, produkt och problembeskrivning</h1>

            <form action="nyttarenden.php" method="POST">
                <div class="row g-3 mb-3">

                    <div class="col-md-6">
                        <label for="kund_namn" class="form-label fw-bold small">Kundens namn</label>
                        <input type="text" class="form-control bg-light" id="kund_namn" name="kund_namn" required>
                    </div>
                    <div class="col-md-6">
                        <label for="kontakt" class="form-label fw-bold small">Telefon / e-post</label>
                        <input type="text" class="form-control bg-light" id="kontakt" name="kontakt" required>
                    </div>

                    <div class="col-md-6">
                        <label for="produktmarke" class="form-label fw-bold small">Produktmärke</label>
                        <input type="text" class="form-control bg-light" id="produktmarke" name="produktmarke" required>
                    </div>
                    <div class="col-md-6">
                        <label for="modell" class="form-label fw-bold small">Modell</label>
                        <input type="text" class="form-control bg-light" id="modell" name="modell" required>
                    </div>

                    <div class="col-md-6">
                        <label for="serienummer" class="form-label fw-bold small">Serienummer</label>
                        <input type="text" class="form-control bg-light" id="serienummer" name="serienummer">
                    </div>
                    <div class="col-md-6">
                        <label for="mottagningsdatum" class="form-label fw-bold small">Mottagningsdatum</label>
                        <input type="date" class="form-control bg-light" id="mottagningsdatum" name="mottagningsdatum" value="<?php echo date('Y-m-d'); ?>" required>
                    </div>


                    <div class="col-md-6">
                        <label for="typ_av_arende" class="form-label fw-bold small">Typ av ärende</label>
                        <select class="form-select bg-light" id="typ_av_arende" name="typ_av_arende" required>
                            <option value="" selected disabled>Välj: felsökning / reparation / uppgradering</option>
                            <option value="felsokning">Felsökning</option>
                            <option value="reparation">Reparation</option>
                            <option value="uppgradering">Uppgradering</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="problem" class="form-label fw-bold small">Problem / önskemål</label>
                        <input type="text" class="form-control bg-light" id="problem" name="problem" required>
                    </div>
                </div>


                <div class="p-2 px-3 mb-4 bg-light border rounded small text-muted">
                    Ärendenummer skapas automatiskt när ärendet sparas.
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="index.php" class="btn btn-light border px-4">Avbryt</a>
                    <button type="submit" class="btn btn-primary px-4 fw-bold">Spara ärende</button>
                </div>
            </form>
        </div>

    </div>

</body>
</html>