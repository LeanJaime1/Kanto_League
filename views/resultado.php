<?php
session_start();
//me traigo al ganador por SESSION
$ganador = $_SESSION['resultado'];

//me traigo los resultados del form por SESSION
$entrenador = $_SESSION['entrenador'];
$ciudad = $_SESSION['ciudad'];

//me traigo el id del pokemon elegido por SESSION
$idElegido = $_SESSION['idElegido'];


//logica para ver si muestra victoria o derrota
$esVictoria = ($idElegido == $ganador->getId());
$mensajeEstado = $esVictoria ? "¡HAS GANADO " : "¡HAS PERDIDO ";
$colorEstado = $esVictoria ? "text-success" : "text-danger";
$bonificacionCombate = $esVictoria ? "+1,200" : "0";
?>


<main class="container-fluid px-lg-5 min-vh-100 d-flex align-items-center bg-black py-4">
    <div class="row justify-content-center w-100 m-0">
        <div class="col-12 col-xl-11">


            <div class="card bg-black shadow-lg border-secondary border-opacity-25" style="min-height: 80vh;">

                <div class="card-header bg-transparent border-bottom border-danger border-opacity-50 py-3 ">
                    <p class="<?= $colorEstado ?>  display-6 fw-bold Orbitron text-center mb-0" style="letter-spacing: 3px;">
                        <?= $mensajeEstado ?><?= strtoupper($entrenador) ?> DE <?= strtoupper($ciudad) ?>!
                    </p>
                </div>

                <div class="row g-0 flex-grow-1">


                    <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-dark bg-opacity-10 p-4">
                        <img src="img/pokemons/<?= $ganador->getImg() ?>"
                            alt="Ganador"
                            class="img-fluid"
                            style="max-height: 500px; width: auto; object-fit: contain; filter: drop-shadow(0 0 50px rgba(220, 53, 69, 0.5));">
                    </div>


                    <div class="col-12 col-md-6 d-flex flex-column bg-black border-start-md border-secondary border-opacity-25">

                        <div class="card-body py-4 px-4 px-lg-5 d-flex flex-column justify-content-center">
                            <h2 class="display-8 fw-bold text-white mb-3" style="line-height: 1.2;">
                                ¡<?= $ganador->getNombre() ?> es el ganador!
                            </h2>

                            <div class="mb-4 d-flex flex-wrap gap-2">
                                <span class="badge rounded-0 bg-<?= $ganador->colorTipoPokemon() ?> px-3 py-2 text-uppercase" style="letter-spacing: 2px;">
                                    <?= $ganador->getTipo() ?>
                                </span>
                                <span class="badge rounded-0 border border-secondary text-secondary px-3 py-2" style="letter-spacing: 2px;">
                                    LVL <?= $ganador->getNivel() ?>
                                </span>
                            </div>

                            <p class="text-secondary mb-4 fst-italic" style="font-size: 1.1rem; line-height: 1.6; border-left: 4px solid #dc3545; padding-left: 20px;">
                                <?= $ganador->getDescripcion_ganadora() ?>
                            </p>

                            <div class="p-3 border border-secondary border-opacity-25 bg-dark bg-opacity-25 d-inline-block w-100 w-sm-auto">
                                <small class="d-block text-secondary text-uppercase fw-bold mb-1" style="font-size: 0.7rem; letter-spacing: 2px;">Bonificación de Combate</small>
                                <span class="h2 fw-bold text-success m-0"><?= $bonificacionCombate ?> exp.</span>
                            </div>
                        </div>


                        <div class="card-footer bg-transparent border-0 py-4 px-4 px-lg-5 mt-auto">
                            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-md-end">
                                <a href="index.php?view=home" class="btn btn-outline-danger btn-lg px-4 rounded-2 fw-bold">
                                    HOME
                                </a>
                                <a href="index.php?view=pelea" class="btn btn-danger btn-lg rounded-2 px-4 py-2 fw-bold  shadow-lg" style="letter-spacing: 1px;">
                                    JUGAR OTRA VEZ
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>