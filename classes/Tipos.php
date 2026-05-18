<?php


class Tipos {
    private string $nombre;
    private string $debilidades;
    


    //methods
    

    //trae el array de tipos completos.
    /**
     * Devuelve el listado completo de los tipos de pokemons.
     * @return Tipos[] Un array lleno de los tipos de Pokemon.
     */
    public static function tipos_completo():array{
        $tipos=[];

        $JSON = file_get_contents('datos/tipos.json');
        $JSONData = json_decode($JSON);

        foreach($JSONData as $value){
            $tipo = new self();

            $tipo->nombre = $value->nombre;
            $tipo->debilidades = $value->debilidades;
           
            

            $tipos[]= $tipo;
        }

        return $tipos;
    }


    /**
     * Get the value of debilidades
     */ 
    public function getDebilidades()
    {
        return $this->debilidades;
    }

    /**
     * Set the value of debilidades
     *
     * @return  self
     */ 
    public function setDebilidades($debilidades)
    {
        $this->debilidades = $debilidades;

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
}