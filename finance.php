<?php

class Finance{
    private string $tva;
    private string $typeSociety;
    private string $nomSociety;

    public function getTva(){
        $this->calculTva();

        return $this->tva;
    }

    public function setTva(string $tva){
        $this->tva = $tva;

        return $this;

    }

    public function getTypeSociety(){

        return $this->typeSociety;
    }

    public function setTypeSociety(String $type){

        $this->typeSociety  = $type;

        return $this;

    }

    public function getNomSociety(){

        return $this->nomSociety;

    }

    public function setNomSociety(string $nom){

        $this->nomSociety  = $nom;

        return $this;

    }

    private function calculTva(){

        if($this->typeSociety == 's'){
            $this->setTva("18%");

            return $this;
        }
        if($this->typeSociety == 'l'){
            $this->setTva("24%");

            return $this;
        }
        if($this->typeSociety == 'xl'){
            $this->setTva("40%");

            return $this;
        }

        $this->setTva("20%");

        return $this;
    }

}


$dtc = new Finance(); 
$dtc->setTypeSociety('s');
$dtc->setNomSociety('DTC');
echo $dtc->getTva();