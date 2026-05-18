<?php
//me traigo la pokedex completa
$pokedex_completa = Pokemon::pokedex_completa();
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 text-center">
            <h1 class="display-4 fw-bold text-white mb-4">POKÉDEX</h1>

            <h2 class="text-white mb-4 h4 fw-bold" style="letter-spacing: 5px; opacity: 0.8;">
                Elige para ver más información.
            </h2>

            <div class="d-flex flex-wrap justify-content-center gap-3">
                <?php foreach ($pokedex_completa as $poke): ?>

                    <div style="width: 120px; height: 120px;">
                        <div class="card bg-dark border-secondary border-2 ratio ratio-1x1 shadow h-100"
                            style="cursor: pointer; border-radius: 15px;">
                            <div class="d-flex align-items-center justify-content-center p-2">
                                <a href="index.php?view=pokemon&id=<?= $poke->getId() ?>" class="d-block w-100 h-100">
                                    <img src="img/pokemons/<?= $poke->getImg() ?>"
                                        class="img-fluid"
                                        style="object-fit: contain; width: 100%; height: 100%;"
                                        alt="<?= $poke->getNombre() ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>