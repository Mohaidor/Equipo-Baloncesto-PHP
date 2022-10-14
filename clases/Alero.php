<?php 


class Alero extends Jugador {
    
    private $puntos;

    public function __construct($dorsal, $nombre, $estatura, $puntos)
    {
        parent::__construct($dorsal, $nombre, $estatura);
        $this->puntos = $puntos;
    }
    public function __get($name)
    {
        switch ($name) {
            case 'Puntos':
              return   $this->puntos;
                break;

            default:
                # code...
                break;
        }
    }
    public function __set($name, $value)
    {
        switch ($name) {
            case 'Puntos':
              $this->puntos = $value;
                break;

            default:
                # code...
                break;
        }
    }
}
?>