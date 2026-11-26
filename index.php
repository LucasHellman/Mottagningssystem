<?php
require_once "includes/config.php";
require_once "includes/functions.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Mottagningssystem</title>
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
                        <a class="nav-link active fw-bold bg-primary text-white rounded px-3 me-2" href="index.php">Översikt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 me-2" href="nyttarenden.php">Nytt ärende</a>
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

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 fw-bold">Ärendeöversikt</h1>
            <a href="nyttarenden.php" class="btn btn-secondary">＋ Skapa nytt ärende</a>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="p-3 border bg-light rounded text-center">
                    <h2 class="h4 fw-bold mb-0">12</h2>
                    <small class="text-muted">Aktuella ärenden</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border bg-light rounded text-center">
                    <h2 class="h4 fw-bold mb-0">5</h2>
                    <small class="text-muted">Under arbete</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border bg-light rounded text-center">
                    <h2 class="h4 fw-bold mb-0">3</h2>
                    <small class="text-muted">Väntar på delar</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border bg-light rounded text-center">
                    <h2 class="h4 fw-bold mb-0">4</h2>
                    <small class="text-muted">Klara för avhämtning</small>
                </div>
            </div>
        </div>


        <div class="mb-4">
            <input type="text" class="form-control" placeholder="Sök ärende:">
        </div>

        <div class="table-responsive border rounded bg-white">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ÄRENDENUMMER</th>
                        <th>KUND</th>
                        <th>PRODUKT</th>
                        <th>STATUS</th>
                        <th>MOTTAGET</th>
                        <th class="text-end">ÅTGÄRD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">IT-2026-001</td>
                        <td>Anna Andersson</td>
                        <td>Lenovo ThinkPad</td>
                        <td><span class="badge bg-warning text-dark">Under arbete</span></td>
                        <td>12.11.2026</td>
                        <td class="text-end"><a href="detaljer.php?id=1" class="btn btn-sm btn-outline-secondary">Öppna</a></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">IT-2026-002</td>
                        <td>Erik Karlsson</td>
                        <td>HP Pavilion</td>
                        <td><span class="badge bg-secondary">Väntar på delar</span></td>
                        <td>12.11.2026</td>
                        <td class="text-end"><a href="detaljer.php?id=2" class="btn btn-sm btn-outline-secondary">Öppna</a></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">IT-2026-003</td>
                        <td>Sara Lind</td>
                        <td>ASUS TUF</td>
                        <td><span class="badge bg-info text-dark">Mottagen</span></td>
                        <td>13.11.2026</td>
                        <td class="text-end"><a href="detaljer.php?id=3" class="btn btn-sm btn-outline-secondary">Öppna</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


</body>

</html> 




