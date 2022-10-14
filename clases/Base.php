<?php 


class Base extends Jugador {
    
    private $asistencias;

    public function __construct($dorsal, $nombre, $estatura, $asistencias)
    {
        parent::__construct($dorsal, $nombre, $estatura);
        $this->asistencias = $asistencias;
    }
    public function __get($name)
    {
        switch ($name) {
            case 'Asistencias':
              return   $this->asistencias;
                break;

            default:
                # code...
                break;
        }
    }
    public function __set($name, $value)
    {
        switch ($name) {
            case 'Asistencias':
              $this->asistencias = $value;
                break;

            default:
                # code...
                break;
        }
    }
}
?>