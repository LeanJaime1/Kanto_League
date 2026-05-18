<?php
//me traigo la pokedex completa
$pokedex_completa = Pokemon::pokedex_completa();


//me fijo si en la URL existe el parametro 'seleccionar', si no existe le asigno null
$id_seleccionado = $_GET['seleccionar'] ?? null;

//variable para el pokemon a mostrar en la derecha
$pokemon_seleccionado = null;

//busco el ID del pokemon seleccionado con el metodo pokemon_x_id y se lo asigno a la variable de la derecha
if ($id_seleccionado) {
    $pokemon_seleccionado = Pokemon::pokemon_x_id($id_seleccionado);
}

?>

<div class="container-fluid d-flex align-items-center bg-black">

    <div class="row g-4 min-vh-100 w-100 align-items-center py-4">


        <div class="col-12 col-lg-8 border-end-lg border-secondary border-opacity-25 d-flex flex-wrap justify-content-center align-content-center"
            style="min-height: 60vh;">

            <h2 class="text-white mb-4 h5 fw-bold text-uppercase text-center display-6 w-100" style="letter-spacing: 3px;">
                Elige tu Pokémon
            </h2>


            <div class="d-flex flex-wrap justify-content-center align-items-center overflow-auto custom-scrollbar p-2 w-100"
                style="max-height: 70vh;">

                <?php foreach ($pokedex_completa as $poke){?>
                    <div style="width: 85px; height: 65px; margin: 4px;">
                        <a href="index.php?view=pelea&seleccionar=<?= $poke->getId() ?>" class="text-decoration-none">

                            <div class="card bg-dark border-secondary <?= ($id_seleccionado == $poke->getId()) ? 'border-danger border-2 shadow-lg' : 'border-opacity-50' ?> shadow-sm h-100 position-relative overflow-hidden">
                                <span class="position-absolute top-0 end-0 pe-1 pt-1 text-secondary fw-bold" style="font-size: 0.5rem; z-index: 2;">
                                    L<?= $poke->getNivel() ?>
                                </span>

                                <div class="d-flex align-items-center justify-content-center p-1 h-100">
                                    <img src="img/pokemons/<?= $poke->getImg() ?>" class="img-fluid" style="object-fit: contain; max-height: 85%;" alt="<?= $poke->getNombre() ?>">
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }; ?>
            </div>
        </div>


        <div class="col-12 col-lg-4">
            <div class="card bg-black text-white shadow-lg rounded-2 border-secondary border-opacity-25">
                <div class="card-header text-center border-secondary border-opacity-25">
                    <h3 class="h5 mb-0 text-uppercase fw-bold text-white" style="letter-spacing: 2px;">
                        <?= $pokemon_seleccionado ? $pokemon_seleccionado->getNombre() : "Selección" ?>
                    </h3>
                </div>


                <div class="card-body text-center d-flex flex-column justify-content-center py-4 position-relative" style="min-height: 350px;">
                    <img src="img/pokemons/<?= $pokemon_seleccionado ? $pokemon_seleccionado->getImg() : 'pokeball.png' ?>"
                        class="img-fluid mb-4"
                        style="max-height: 300px; object-fit: contain; z-index: 1; filter: drop-shadow(0 0 30px rgba(220, 53, 69, 0.3));"
                        alt="Preview">

                    <?php if ($pokemon_seleccionado){ ?>
                        <div class="d-grid gap-2 px-4">
                            <a href="index.php?view=vs&id=<?= $pokemon_seleccionado->getId() ?>" class="btn btn-danger btn-lg rounded-2 fw-bold">PELEAR</a>
                            <a href="index.php?view=pokemon&id=<?= $pokemon_seleccionado->getId() ?>" class="btn btn-outline-light btn-sm rounded-2 fw-bold">MÁS INFO</a>
                        </div>
                    <?php }else{ ?>
                        <p class="text-secondary small mt-3">Selecciona un luchador.</p>
                    <?php }; ?>
                </div>
            </div>
        </div>

    </div>
</div>