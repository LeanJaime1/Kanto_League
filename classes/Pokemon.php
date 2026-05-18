<?php

class Pokemon
{

    private int $id;
    private string $nombre;
    private string $tipo;
    private string $descripcion;
    private string $img;
    private string $descripcion_ganadora;
    private float $altura;
    private float $peso;
    private string $ataque;
    private int $hp;
    private int $defensa;
    private string $ataque_especial;
    private int $nivel;


    //methods

    //trae el array de pokemons completos.
    /**
     * Devuelve el listado completo de pokemons
     * @return Pokemon[] Un array lleno de objetos Pokemon.
     */
    public static function pokedex_completa(): array
    {
        $pokedex = [];

        $JSON = file_get_contents('datos/pokedex.json');
        $JSONData = json_decode($JSON);

        foreach ($JSONData as $value) {
            $pokemon = new self();

            $pokemon->id = $value->id;
            $pokemon->nombre = $value->nombre;
            $pokemon->tipo = $value->tipo;
            $pokemon->descripcion = $value->descripcion;
            $pokemon->img = $value->img;
            $pokemon->descripcion_ganadora = $value->descripcion_ganadora;
            $pokemon->altura = $value->altura;
            $pokemon->peso = $value->peso;
            $pokemon->ataque = $value->ataque;
            $pokemon->hp = $value->hp;
            $pokemon->defensa = $value->defensa;
            $pokemon->ataque_especial = $value->ataque_especial;
            $pokemon->nivel = $value->nivel;

            $pokedex[] = $pokemon;
        }

        return $pokedex;
    }

    //selecciona un pokemon por ID.
    /**
     * Devuelve los datos de un pokemon en particular.
     * @param int $id El Id único del pokemon a mostrar.
     * @return ?Pokemon devuelve un objeto Pokemon o null.
     */
    public static function pokemon_x_id(int $id): ?Pokemon
    {

        $pokedex = self::pokedex_completa();
        foreach ($pokedex as $pokemon) {
            if ($pokemon->id == $id) {
                return $pokemon;
            }
        }
        return null;
    }

    //devuelve un color especifico para la clase según el tipo.
    /**
     * Devuelve el color específico según el tipo de pokemon.
     * @return string Un color espécífico para el tipo de pokemon.
     */
    public function colorTipoPokemon(): string
    {
        switch ($this->tipo) {
            case "Agua":
                return "primary";
            case "Fuego":
                return "danger";
            case "Planta":
                return "success";
            case "Electrico":
                return "warning text-dark";
            case "Psiquico":
                return "psiquico";
            case "Veneno":
                return "veneno";
            case "Tierra":
                return "brown";
            case "Lucha":
                return "brown";
            case "Fantasma":
                return "fantasma";
            case "Hada":
                return "hada";
            case "Dragon":
                return "dragon";
            default:
                return "secondary";
        }
    }

     //selecciona al rival al azar.
    /**
     * Devuelve un objeto con un pokemon al azar para luchar.
     * @param Pokemon $pokemonElegido paso por parametro el pokemon elegido.
     * @return ?Pokemon devuelve un objeto Pokemon o null.
     */
    public static function pokemonRandom($pokemonElegido): ?Pokemon
    {
        $pokedex = self::pokedex_completa();
        $randomNumber = mt_rand(1, 42);

        //si el número random es el mismo que el id, vuelvo a elegir otro para evitar pelear con el mismo.
        while ($randomNumber == $pokemonElegido->id) {
            $randomNumber = mt_rand(1, 42);
        }

        foreach ($pokedex as $pokemon) {
            if ($pokemon->id == $randomNumber) {
                return $pokemon;
            }
        }


        return null;
    }

    //pelea
    /**
     * Define un ganador entre el pokemon seleccionado y uno al azar.
     * @param Pokemon $p1 objeto del pokemon seleccionado.
     * @param Pokemon $p2 objeto del pokemon rival.
     * @param Tipos $tipos array de los tipos de pokemon para comparar sus debilidades.
     * @return ?Pokemon devuelve un objeto Pokemon o null.
     */
    public static function peleaPokemon($p1, $p2, $tipos): ?Pokemon
    {


        //calculo el poder base de cada pokemon
        $poder1 = $p1->hp * $p1->ataque * $p1->nivel;
        $poder2 = $p2->hp * $p2->ataque * $p2->nivel;

        
        foreach ($tipos as $t) {

            // si el p1 es débil frente al tipo de p2, entonces p1 pierde poder
            if ($p1->tipo === $t->getNombre()) {
                //si en el array dentro de debilidades se encuentra el tipo del otro poke.
                if (str_contains($t->getDebilidades(), $p2->tipo)) {
                    $poder1 *= 0.6; // resto el 40% del poder
                }
            }

            // si el p2 es débil frente al tipo de p1, entonces p2 pierde poder
            if ($p2->tipo === $t->getNombre()) {
                //si en el array dentro de debilidades se encuentra el tipo del otro poke.
                if (str_contains($t->getDebilidades(), $p1->tipo)) {
                    $poder2 *= 0.6; // resto el 40% del poder
                }
            }
        }

        // comparativa final
        if ($poder1 > $poder2) {
            return $p1;
        } else if ($poder2 > $poder1) {
            return $p2;
        }

        return null; 
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of descripcion_ganadora
     */
    public function getDescripcion_ganadora()
    {
        return $this->descripcion_ganadora;
    }

    /**
     * Set the value of descripcion_ganadora
     *
     * @return  self
     */
    public function setDescripcion_ganadora($descripcion_ganadora)
    {
        $this->descripcion_ganadora = $descripcion_ganadora;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of ataque
     */
    public function getAtaque()
    {
        return $this->ataque;
    }

    /**
     * Set the value of ataque
     *
     * @return  self
     */
    public function setAtaque($ataque)
    {
        $this->ataque = $ataque;

        return $this;
    }

    /**
     * Get the value of defensa
     */
    public function getDefensa()
    {
        return $this->defensa;
    }

    /**
     * Set the value of defensa
     *
     * @return  self
     */
    public function setDefensa($defensa)
    {
        $this->defensa = $defensa;

        return $this;
    }

    /**
     * Get the value of hp
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of ataque_especial
     */
    public function getAtaque_especial()
    {
        return $this->ataque_especial;
    }

    /**
     * Set the value of ataque_especial
     *
     * @return  self
     */
    public function setAtaque_especial($ataque_especial)
    {
        $this->ataque_especial = $ataque_especial;

        return $this;
    }

    /**
     * Get the value of nivel
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}
