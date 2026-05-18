<?php
?>
<section class="py-5 d-flex align-items-center" style="min-height: 750px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-start">
                <div class="d-flex align-items-center mb-2">
                    <div class="border-bottom border-danger" style="width: 40px; border-width: 3px !important;"> </div>
                    <p class="text-white ms-3 mb-0 fw-bold display-8" style="letter-spacing: -1px;">LIGA POKEMON - TEMPORADA 2026</p>
                </div>
                <h1 class="display-2 fw-bold text-white">Donde se forjan los <span class="text-danger">Campeones.</span></h1>
                <p class="lead text-secondary">Una arena donde solo los mejores saldrán victoriosos. Completá tus datos, elegí a tu compañero y lanzate al combate.</p>

                <div class="d-flex align-items-center text-white mt-5">
                    <div>
                        <p class="mb-0 fw-bolder">42</p>
                        <p class="mb-0 lead text-secondary fs-6">POKEMONES DISPONIBLES</p>
                    </div>

                    <div class="vr mx-3 text-white"></div>
                    <div>
                        <p class="mb-0 fw-bolder">1V1</p>
                        <p class="mb-0 lead text-secondary fs-6">ELIMINACIÓN DIRECTA</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mt-5 mt-md-0">
                <div class="bg-dark p-4 rounded-1 shadow-lg border border-secondary border-opacity-25">
                    <h2 class="text-white fw-bold mb-1 display-6">Registrate</h2>
                    <p class="text-secondary small mb-4">Tu pase para el torneo. Ya no tenes excusas.</p>

                    <form action="actions/procesar.php" method="POST">
                        <div class="mb-4">
                            <label class="text-secondary fw-bold mb-2 small d-block" style="letter-spacing: 1px;">NOMBRE DEL ENTRENADOR</label>
                            <input type="text" name="entrenador" class="form-control bg-black border-0 text-white py-3 shadow-none rounded-0" placeholder="Ash Ketchum" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-secondary fw-bold mb-2 small d-block" style="letter-spacing: 1px;">CIUDAD</label>
                            <input type="text" name="ciudad" class="form-control bg-black border-0 text-white py-3 shadow-none rounded-0" placeholder="Pueblo Paleta" required>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger btn-lg mt-3 px-5 rounded-0">
                                Comenzar Aventura
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<<div class="container my-5">
    <div class="d-flex align-items-center mb-5">
        <div class="border-bottom border-danger" style="width: 40px; border-width: 3px !important;"></div>
        <p class="text-white ms-3 mb-0 fw-bold display-8" style="letter-spacing: -1px;">REPORTES DE BATALLA</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="position-relative overflow-hidden border border-secondary border-opacity-25 shadow-lg bg-black"
                style="min-height: 250px;">

                <div class="position-absolute w-100 h-100"
                    style="background: url('./img/home/charizard-home.png') no-repeat center; 
                            background-size: 150%; 
                            filter: blur(5px) brightness(0.3); 
                            opacity: 0.5; 
                            top: 0; left: 0;">
                </div>

                <div class="p-4 position-relative z-1 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <span class="badge bg-danger rounded-0 mb-3 px-3 py-2" style="letter-spacing: 2px; font-size: 0.6rem;">PREDOMINIO FUEGO</span>
                        <h3 class="text-white fw-bold display-6 mb-2">Charizard <span class="text-danger">Inmortal</span></h3>
                        <p class="text-secondary small w-75">Dominó la Arena del Volcán con una ferocidad sin precedentes. Charizard selló su victoria definitiva al liberar un Envite Ígneo devastador que arrasó con el campo de batalla, logrando un KO técnico inmediato. Esta demostración de fuerza bruta imbatible confirma su lugar en la liga como un coloso difícil de igualar.</p>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="position-relative overflow-hidden border border-secondary border-opacity-25 shadow-lg bg-black"
                style="min-height: 250px;">
                <div class="position-absolute w-100 h-100"
                    style="background: url('./img/home/vaporeon-home.png') no-repeat center; 
                            background-size: 150%; 
                            filter: blur(5px) brightness(0.3); 
                            opacity: 0.5; 
                            top: 0; left: 0;">
                </div>
                <div class="p-4 position-relative z-1 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <span class="badge bg-info text-dark rounded-0 mb-3 px-3 py-2" style="letter-spacing: 2px; font-size: 0.6rem;">ADAPTABILIDAD</span>
                        <h3 class="text-white fw-bold display-6 mb-2">Vaporeon <span class="text-info">Letal</span></h3>
                        <p class="text-secondary small w-75">Consolidado como el 'Terror Letal' tras su paso por el Estadio de Niebla, Vaporeon utilizó su capacidad de adaptación molecular para volverse invisible y desgastar a sus rivales, finalizando con una Hidrobomba a quemarropa que redefinió la estrategia táctica de esta temporada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-12">

            <div class="position-relative overflow-hidden border border-warning border-opacity-25 shadow-lg bg-black"
                style="min-height: 250px;">
                <div class="position-absolute w-100 h-100"
                    style="background: url('./img/home/raichu-home.png') no-repeat center; 
                            background-size: 150%; 
                            filter: blur(5px) brightness(0.3); 
                            opacity: 0.5; 
                            top: 0; left: 0;">
                </div>
                <div class="p-4 position-relative z-1 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <span class="badge bg-warning text-dark rounded-0 mb-3 px-3 py-2" style="letter-spacing: 2px; font-size: 0.6rem;">VOLTAJE ELÉCTRICO</span>
                        <h3 class="text-white fw-bold display-6 mb-2">Raichu <span class="text-warning">Implacable</span></h3>
                        <p class="text-secondary small w-75">Dominó el Estadio Eléctrico tras sobrecargar los sistemas de defensa con un Trueno de precisión quirúrgica, asegurando su clasificación mediante una velocidad de reacción que superó los 200ms en combate.</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
    </div>