<?php

namespace Petrik14s\Egridanielr\Halloween\Models;

use DateTime;
use Petrik14s\Egridanielr\Halloween\Models\Lako;

    class Esemeny {
        private $nev;
        private $szervezo;
        private $resztvevok;
        private $ido;

        public function __construct(String $Nev, Lako $Szervezo, array $Resztvevok, DateTime $Ido)
        {
            $this->nev = $Nev;
            $this->szervezo = $Szervezo;
            $this->resztvevok = $Resztvevok;
            $this->ido = $Ido;
        }

        public function getNev() : string
        {
            return $this->nev;
        }

        public function getSzervezo()
        {
            return $this->szervezo;
        }

        public function getResztvevok() : array
        {
            return $this->resztvevok;
        }

        public function getIdo() : DateTime
        {
            return $this->ido;
        }
    }

?>