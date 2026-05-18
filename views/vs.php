<?php
session_start();

//me traigo los arrays completos
$pokedex_completa = Pokemon::pokedex_completa();
$tipos = Tipos::tipos_completo();

//me traigo el ID del pokemon elegido por $_GET
$id_seleccionado = $_GET['id'];

//me traigo el objeto del pokemon seleccionado
$pokemon_seleccionado = Pokemon::pokemon_x_id($id_seleccionado);

//selecciono un pokemon al azar
$pokemonRandom = Pokemon::pokemonRandom($pokemon_seleccionado);

//determino un ganador
$pokemonGanador = Pokemon::peleaPokemon($pokemon_seleccionado,$pokemonRandom, $tipos);

//paso por las SESSION el ganador y el ID del elegido
$_SESSION['resultado'] = $pokemonGanador;
$_SESSION['idElegido'] = $pokemon_seleccionado->getId();
?>


<section class="container py-5 min-vh-100 d-flex align-items-center">

   
    <div class="row align-items-center justify-content-center w-100 g-4">

        <div class="col-12 col-md-5 order-1">
            <div class="card shadow-lg bg-black border-secondary border-opacity-25">
                <img src="img/pokemons/<?= $pokemon_seleccionado->getImg()?>" 
                     class="card-img-top p-3" 
                     alt="<?= $pokemon_seleccionado->getNombre() ?>" 
                     style="filter: drop-shadow(0 0 40px rgba(220, 53, 69, 0.4)); object-fit: contain; max-height: 450px;">
                
                <div class="card-body text-center">
                    <h3 class="card-title h4 text-white text-uppercase fw-bold"><?= $pokemon_seleccionado->getNombre() ?></h3>
                    <div class="progress mb-2 bg-dark" style="height: 20px;">
                       
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $pokemon_seleccionado->getHp() ?>%">
                            HP <?= $pokemon_seleccionado->getHp() ?>
                        </div>
                    </div>
                    <p class="card-text text-secondary">Nivel <?= $pokemon_seleccionado->getNivel() ?></p>
                </div>
            </div>
        </div>

        
        <div class="col-12 col-md-2 text-center my-2 my-md-0 order-2">
            <p class="lead fst-italic text-white mb-0">¿Estás listo?</p>
            <div class="text-danger">
                <span class="fw-bolder display-3">VS</span>
            </div>
            <div class="mt-3">
                <a href="index.php?view=resultado" class="btn btn-danger btn-lg fw-bold w-100 w-md-auto">INICIAR PELEA</a>
                <a href="index.php?view=pelea" class=" mt-4 btn btn-outline-light btn-lg fw-bold w-100 w-md-auto">ESCAPAR</a>
            </div>
        </div>

       
        <div class="col-12 col-md-5 order-3">
            <div class="card shadow-lg bg-black border-secondary border-opacity-25">
                <img src="img/pokemons/<?= $pokemonRandom->getImg() ?>" 
                     class="card-img-top p-3" 
                     alt="<?= $pokemonRandom->getNombre() ?>" 
                     style="filter: drop-shadow(0 0 40px rgba(220, 53, 69, 0.4)); object-fit: contain; max-height: 450px;">
                
                <div class="card-body text-center">
                    <h3 class="card-title h4 text-white text-uppercase fw-bold"><?= $pokemonRandom->getNombre() ?></h3>
                    <div class="progress mb-2 bg-dark" style="height: 20px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $pokemonRandom->getHp() ?>%">
                            HP <?= $pokemonRandom->getHp() ?>
                        </div>
                    </div>
                    <p class="card-text text-secondary">Nivel <?= $pokemonRandom->getNivel() ?></p>
                </div>
            </div>
        </div>

    </div>
</section>