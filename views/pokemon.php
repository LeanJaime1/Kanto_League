<?php

$id = $_GET['id'] ?? 0;
$pokemon = Pokemon::pokemon_x_id($id);
?>


<main class="container py-5">

   

    <?php if (!empty($pokemon)) { ?>

        <div class="row g-4">

            <div class="col-12 col-md-5 text-center p-0">
                <div class="card shadow-sm border-0 p-4 bg-dark" style="border-radius: 20px;">
                    <img src="./img/pokemons/<?= $pokemon->getImg() ?>" alt="<?= $pokemon->getNombre() ?>" class="img-fluid mb-3" style="filter: drop-shadow(0 0 50px rgba(220, 53, 69, 0.15)">
                    <h1 class="display-4 fw-bold text-white"><?= $pokemon->getNombre() ?></h1>
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <span class="badge bg-<?= $pokemon->colorTipoPokemon() ?> px-3 py-2"><?= $pokemon->getTipo() ?></span>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-7">
                <div class="card shadow-sm border-0 h-100 text-white bg-dark" style="border-radius: 20px;">
                    <div class="card-body p-4">
                        <h3 class="mb-4 border-bottom pb-2">Estadísticas Base</h3>

                        <h4>Ataque especial</h4>
                        <p class="text"><?= $pokemon->getAtaque_especial() ?></p>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-bold">HP</span>
                                <span><?= $pokemon->getHp() ?></span>
                            </div>
                            <div class="progress" style="height: 12px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $pokemon->getHp() ?>%"></div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-bold">Ataque</span>
                                <span><?= $pokemon->getAtaque() ?></span>
                            </div>
                            <div class="progress" style="height: 12px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $pokemon->getAtaque() ?>%"></div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-bold">Defensa</span>
                                <span><?= $pokemon->getDefensa() ?></span>
                            </div>
                            <div class="progress" style="height: 12px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $pokemon->getDefensa() ?>%"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-bold">Nivel</span>
                                <span><?= $pokemon->getNivel() ?></span>
                            </div>
                            <div class="progress" style="height: 12px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $pokemon->getNivel() ?>%"></div>
                            </div>
                        </div>


                        <h3 class="mb-3 border-bottom pb-2">Datos</h3>
                        <p class="text-white italic mt-4"><?= $pokemon->getDescripcion() ?></p>
                        <div class="row text-center bg-secondary rounded p-3">
                            <div class="col-6 border-end">
                                <small class="text-white d-block">Altura</small>
                                <span class="fw-bold"><?= $pokemon->getAltura() ?> m</span>
                            </div>
                            <div class="col-6">
                                <small class="text-white d-block">Peso</small>
                                <span class="fw-bold"><?= $pokemon->getPeso() ?> kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } else { ?>
        <div class="col-12 text-center py-5 vh-100">
            <div class="bg-dark p-5 rounded-4 border border-secondary">
                <h2 class="text-white mb-4">No se encontró el pokemón.</h2>
                <a href="index.php?view=home" class="btn btn-danger px-4 fw-bold">Volver a la home.</a>
            </div>
        </div>
    <?php } ?>

     <div class="mt-4 d-flex justify-content-center gap-3">
        <a href="index.php?view=pelea" class="btn btn-danger px-4 fw-bold">Ir a Pelea</a>
        <a href="index.php?view=pokedex" class="btn btn-outline-danger px-4 fw-bold me-3">Ir a Pokedex</a>
        
    </div>

</main>