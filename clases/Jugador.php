<?php 
abstract class Jugador {

    protected $dorsal;
    protected $nombre;
    protected $estatura;

    public function __construct($dorsal, $nombre, $estatura)
    {
        $this->dorsal = $dorsal;
        $this->nombre = $nombre;
        $this->estatura = $estatura;
    }
    public function __get($name)
    {
        switch ($name) {
            case 'Dorsal':
              return   $this->dorsal;
                break;
            case 'Nombre':
              return   $this->nombre;
                break;
            case 'Telefono':
                return $this->telefono;
                break;
            default:
                # code...
                break;
        }
    }
    public function __set($name, $value)
    {
        switch ($name) {
            case 'Dorsal':
                $this->dorsal = $value;
                break;
            case 'Nombre':
                $this->nombre = $value;
                break;
            case 'Telefono':
                $this->telefono = $value;
                break;
            default:
                # code...
                break;
        }
    }
}


?>