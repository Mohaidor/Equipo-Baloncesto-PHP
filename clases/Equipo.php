<?php

    class Equipo 
    {
        private $nombre;
        private $quinteto;


        public function __construct($nombre, Base $base, Escolta $escolta, Alero $alero, Alapivot $alaPivot, Pivot $pivot  )
        {
            $this->nombre = $nombre;
            $this->quinteto[0] = $base;
            $this->quinteto[1] = $escolta;
            $this->quinteto[2] = $alero;
            $this->quinteto[3] = $alaPivot;
            $this->quinteto[4] = $pivot;

        }

        public function __get($name)
        {
            switch ($name) {
                case 'Nombre':
                    return $this->nombre;
                    break;
                case 'Quinteto':
                    return $this->quinteto;
                    break;
                default:
                    # code...
                    break;
            }
        }
    }
