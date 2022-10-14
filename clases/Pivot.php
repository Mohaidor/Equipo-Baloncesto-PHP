<?php 


class Pivot extends Jugador {
    
    private $rebotes;

    public function __construct($dorsal, $nombre, $estatura, $rebotes)
    {
        parent::__construct($dorsal, $nombre, $estatura);
        $this->rebotes = $rebotes;
    }
    public function __get($name)
    {
        switch ($name) {
            case 'Rebotes':
              return   $this->rebotes;
                break;

            default:
                # code...
                break;
        }
    }
    public function __set($name, $value)
    {
        switch ($name) {
            case 'Rebotes':
              $this->Rebotes = $value;
                break;

            default:
                # code...
                break;
        }
    }
}
?>