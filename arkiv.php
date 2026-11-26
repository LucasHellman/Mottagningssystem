<?php
require_once "includes/config.php";
require_once "includes/functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mottagningssystem - Arkiv</title>
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
                        <a class="nav-link px-3 me-2" href="nyttarenden.php">Nytt ärende</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold bg-primary text-white rounded px-3 me-2" href="arkiv.php">Arkiv</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link px-3 border rounded bg-white" href="personal.php">Personal</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="mb-4">
            <h1 class="h3 fw-bold">Levererade ärenden</h1>
        </div>


        <form action="arkiv.php" method="GET" class="mb-4">
            <div class="input-group">
                <span class="input-group-text bg-light fw-bold small">Sök i arkivet:</span>
                <input type="text" class="form-control" name="sok" placeholder="Kundnamn eller ärendenummer">
                <button class="btn btn-outline-secondary px-4" type="submit">Sök</button>
            </div>
        </form>


        <div class="table-responsive border rounded bg-white mb-4">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ÄRENDENUMMER</th>
                        <th>KUND</th>
                        <th>PRODUKT</th>
                        <th>LEVERERAD</th>
                        <th class="text-end">ÖPPNA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">IT-2026-010</td>
                        <td>Mikael Berg</td>
                        <td>Dell Latitude</td>
                        <td>10.11.2026</td>
                        <td class="text-end"><a href="detaljer.php?id=10" class="btn btn-sm btn-outline-secondary">Visa</a></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">IT-2026-008</td>
                        <td>Lina Holm</td>
                        <td>Acer Aspire</td>
                        <td>08.11.2026</td>
                        <td class="text-end"><a href="detaljer.php?id=8" class="btn btn-sm btn-outline-secondary">Visa</a></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">IT-2026-005</td>
                        <td>Oskar Nyman</td>
                        <td>HP EliteBook</td>
                        <td>04.11.2026</td>
                        <td class="text-end"><a href="detaljer.php?id=5" class="btn btn-sm btn-outline-secondary">Visa</a></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">IT-2026-003</td>
                        <td>Emma Sjö</td>
                        <td>ASUS VivoBook</td>
                        <td>01.11.2026</td>
                        <td class="text-end"><a href="detaljer.php?id=3" class="btn btn-sm btn-outline-secondary">Visa</a></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="p-3 bg-light border rounded small text-muted">
            Öppna ett ärende för att granska tidigare arbetsanteckningar och komponenter. Levererade ärenden visas här.
        </div>

    </div>

</body>
</html>