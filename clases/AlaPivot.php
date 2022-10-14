<?php 


class AlaPivot extends Jugador {
    
    private $tapones;

    public function __construct($dorsal, $nombre, $estatura, $tapones)
    {
        parent::__construct($dorsal, $nombre, $estatura);
        $this->tapones = $tapones;
    }
    public function __get($name)
    {
        switch ($name) {
            case 'Tapones':
              return   $this->tapones;
                break;

            default:
                # code...
                break;
        }
    }
    public function __set($name, $value)
    {
        switch ($name) {
            case 'Tapones':
              $this->tapones = $value;
                break;

            default:
                # code...
                break;
        }
    }
}
?>