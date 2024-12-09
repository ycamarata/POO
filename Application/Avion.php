<?php
class Avion extends Vehicule{
 protected   string $marque;
 protected   string $modele;
 protected   int $kilometrage;
 protected   int $vitesseMax;
 protected   int $cylindre;

    public function __construct($marque,$modele,$kilometrage,$vitesseMax,$cylindre){
$this->marque = $marque;
$this->modele = $modele;
$this->kilometrage = $kilometrage;
$this->vitesseMax = $vitesseMax;
$this->cylindre = $cylindre;
    }


public function deplace(){
    echo ' je vole ';
}

public function accelere(){
    echo ' je peux mettre les gaz ';
}

public  function freine(){
    echo ' je freines si je veux ';
}

public  function bruit(){
    echo ' les moteurs font vroummm ';
}


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