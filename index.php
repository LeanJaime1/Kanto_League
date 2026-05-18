<?php
require_once 'classes/Pokemon.php';
require_once 'classes/Vista.php';
require_once 'classes/Tipos.php';

$vista = Vista::validar_vista($_GET['view'] ?? 'home');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=1.0.1">
    <title>Kanto League</title>
</head>

<body class="bg-black">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-secondary">

        <div class="container  fw-bold">
            <a class="navbar-brand" href="index.php?view=home"><img src="img/home/logo.png" alt="Logo Kanto League" style="height: 30px; width: auto; object-fit: contain;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold px-3 link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?view=home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold px-3 link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover" href="index.php?view=pelea">PELEA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold px-3 link-danger link-offset-2 link-underline-opacity-100-hover" href="index.php?view=pokedex">POKEDEX</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container ">
        <?php
        require_once "views/{$vista->getNombre()}.php";
        ?>
    </main>


    <footer class="bg-dark text-center text-light p-4 ">Kanto.League @2026 | Designed by <a href="index.php?view=autor" class="text-danger fw-bold" style="text-decoration :none;"> Leandro Jaime</a></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>