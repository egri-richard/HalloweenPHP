<?php

    namespace Petrik14s\Egridanielr\Halloween\Models;

    class Lako  {
        private $nev;

        public function __construct(String $Nev)
        {
            $this->nev = $Nev;
        }

        public function getLakoNev() : string
        {
            return $this->nev;
        }
    }

?>