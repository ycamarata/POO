<?php

abstract class Perso{
    protected string $Name;
    protected int $PV;
    protected int $Endurance;
    protected int $Force;
    protected bool $EnVie;

public function __construct($Name,$PV,$Endurance,$Force,$EnVie){
        $this->Name = $Name;
        $this->PV = $PV;
        $this->Endurance = $Endurance;
        $this->Force = $Force;
        $this->EnVie = $EnVie;
    }

public function attaque(){

}

public function defendre(){

}
public function deceder(){
   
}

public function CrashTheGameIfLoose(){

}

}

?>