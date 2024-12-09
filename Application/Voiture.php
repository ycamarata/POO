<?php
class Voiture extends Vehicule{
 public   string $marque;
 public   string $modele;
 public   int $kilometrage;
 public   int $vitesseMax;
 public   int $cylindre;

    public function __construct($marque,$modele,$kilometrage,$vitesseMax,$cylindre){
$this->marque = $marque;
$this->modele = $modele;
$this->kilometrage = $kilometrage;
$this->vitesseMax = $vitesseMax;
$this->cylindre = $cylindre;
    }

public function roule(){}

public function setMarque(string $marque){ // changer les valeurs
$this->marque = $marque;
    }

public function setModele(string $modele){ // changer les valeurs
$this->modele = $modele;
} 
            
public function setKilometrage(string $kilometrage){ // changer les valeurs
$this->kilometrage = $kilometrage;
}

public function setVitesseMax(string $vitesseMax){ // changer les valeurs
    $this->vitesseMax = $vitesseMax;
    }

    public function setCylindre(string $cylindre){ // changer les valeurs
        $this->cylindre = $cylindre;
        }

public function getMarque(){ // récupérer le valeurs
    return $this->marque;
}

public function getModele(){ // récupérer le valeurs
    return $this->modele;
}

public function getKilometrage(){ // récupérer le valeurs
    return $this->kilometrage;
}

public function getVitesseMax(){ // récupérer le valeurs
    return $this->vitesseMax;
}

public function getCylindre(){ // récupérer le valeurs
    return $this->cylindre;
}
}