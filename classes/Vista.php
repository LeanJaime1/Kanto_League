<?php

class Vista{

private string $nombre;
private string $titulo;



    //methods
    /**
     * Valida el identificador de una vista y devuelve un objeto con los datos de la misma.
     * @param ?string $identificador identificador de la vista, o null.
     * @return Vista devuelve objeto Vista.
     */
    public static function validar_vista(?string $identificador)
    {
        $JSON = file_get_contents('datos/vistas.json');
        $vistasData = json_decode($JSON);

        foreach ($vistasData as $v) {

         if($v->nombre == $identificador){
            $vista = new self();
            $vista->nombre = $v->nombre;
            $vista->titulo = $v->titulo;
            return $vista;
         }
           
        }

        $vista = new self();
        $vista->nombre = '404';
        $vista->titulo = 'Página no encontrada';

        return $vista;
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
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }
}
