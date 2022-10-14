<?php 


class Escolta extends Jugador {
    
    private $robos;

    public function __construct($dorsal, $nombre, $estatura, $robos)
    {
        parent::__construct($dorsal, $nombre, $estatura);
        $this->robos = $robos;
    }
    public function __get($name)
    {
        switch ($name) {
            case 'Robos':
              return   $this->robos;
                break;

            default:
                # code...
                break;
        }
    }
    public function __set($name, $value)
    {
        switch ($name) {
            case 'Robos':
              $this->robos = $value;
                break;

            default:
                # code...
                break;
        }
    }
}
?>