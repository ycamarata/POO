<?php
class Elfe extends Perso implements Arme, Talent {
    protected string $Name;
    protected int $PV;
    protected int $Endurance;
    protected int $Force;
    protected bool $EnVie;


    public function __construct($Caca) {
        $this->Name = $Caca;
        $this->PV = 3000;
        $this->pvBonus = 0;
        $this->pvBonusClasse = 0;
        $this->Endurance = 60;
        $this->Force = 50;
        $this->forceBonus = 0;
        $this->forceBonusArme = 0;
        $this->forceBonusClasse = 0;
        $this->EnVie = true;
    }

    // Getters et Setters
    public function setName(string $Name) { 
        $this->Name = $Name;
    }

    public function setPV(int $PV) { 
        $this->PV = $PV + $this->pvBonusClasse;
    }

    public function setEndurance(int $Endurance) { 
        $this->Endurance = $Endurance;
    }

    public function setForce(int $Force) { 
        $this->Force = $Force + $this->forceBonusArme + $this->forceBonusClasse;
    }

    public function setForceBonusArme(int $forceBonusArme) { 
        $this->forceBonusArme = $forceBonusArme;
    }

    public function setForceBonusClasse(int $forceBonusClasse) { 
        $this->forceBonusClasse = $forceBonusClasse;
    }

    public function setEnVie(bool $EnVie) { 
        $this->EnVie = $EnVie;
    }

    // Getters
    public function getName() { 
        return $this->Name;
    }

    public function getPV() { 
        return $this->PV;
    }

    public function getEndurance() { 
        return $this->Endurance;
    }

    public function getForce() { 
        return $this->Force;
    }

    public function getEnVie() { 
        return $this->EnVie;
    }



    public function epee() {
        return "Epée";
    }

    public function arc() {
        $this->setForceBonusArme(10);
        return "Arc";
    }

    public function marteau() {
        $this->setForceBonusArme(30);
        return "Marteau";
    }

    public function baton(){
        return "Bâton";
    }
    public function dague(){
        return "Dague";
    }

    public function attaque() {
        return $this->getForce(); // Attaque utilise la force totale
    }

    public function defense() {
        return $this->PV; // Défense est la PV actuelle
    }

    public function cavalier() {
        return "Cavalier";
    }
    
    public function magicien() {
        return "Magicien";
    }
    
    public function guerrier() {
        $this->forceBonusClasse += 100;
        $this->pvBonusClasse += 100;
        return "Guerrier";
    }
    
    public function necromancien() {
        return "Nécromancien";
    }
    
    public function voleur() {
        return "Voleur";
    }
    
    public function assassin() {
        return "Assassin";
    }
}
?>
