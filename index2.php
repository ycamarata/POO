
<!--     $elfe = new Elfe(' Elfe');
    $nain = new Nain(' Nain');
    
    // Tableau des personnages
    $DomeDuTonnerre = [$elfe, $nain];
    
    //Initialiser le tour 1
    $tour = 1;
    
    //Stats elfe
    echo $elfe->getName() . " a une force de base de : " . $elfe->getForce() . ".<br>";
     
    $elfe->arc(); //Equipe arc
    echo "Bonus de force avec l'arme équipée: +" . $elfe->forceBonus . "<br>";
  
    echo $elfe->getName() . " équipe un arc et sa force augmente à : " . $elfe->getForce() . ".<br><br><br>";
  
    //Stat nain
    echo $nain->getName() . " a une force de base de : " . $nain->getForce() . ".<br>";
     
    $nain->marteau(); //Equipe marteau
    echo "Bonus de force avec l'arme équipée: +" . $nain->forceBonus . "<br>";

    echo $nain->getName() . " équipe un marteau et sa force augmente à : " . $nain->getForce() . ".<br><br><br>";
  


    // Boucle du combat au tour par tour
    while ($elfe->getEnVie() && $nain->getEnVie()) {
        echo "Tour $tour :<br>";
    
        if ($tour % 2 != 0) {
    
            // Tours impairs : L'Elfe attaque en premier
            $firstStrike = $nain->defendre() - $elfe->attaque();
            $nain->setPV($nain->getPV() + $firstStrike); // Maj des PV du Nain
            echo $elfe->getName() . " attaque en premier ! " . $nain->getName() . " subit " . abs($firstStrike) . " dégâts.<br>";
    
            // Vérifier si le Nain est encore en vie
            if ($nain->getPV() <= 0) {
                echo $nain->getName() . " est mort ! " . $elfe->getName() . " a gagné !<br>";
                break;
            }
    
            // Nain contre-attaque
            $secondStrike = $elfe->defendre() - $nain->attaque();
            $elfe->setPV($elfe->getPV() + $secondStrike); // Maj des PV de l'Elfe
            echo $nain->getName() . " contre-attaque ! " . $elfe->getName() . " subit " . abs($secondStrike) . " dégâts.<br>";
    
            // Vérifier si l'Elfe est encore en vie
            if ($elfe->getPV() <= 0) {
                echo $elfe->getName() . " est mort ! " . $nain->getName() . " a gagné !<br>";
                break;
            }
        } else {
            // Tours pairs : Le Nain attaque en premier
            $firstStrike = $elfe->defendre() - $nain->attaque();
            $elfe->setPV($elfe->getPV() + $firstStrike); // Maj des PV de l'Elfe
            echo $nain->getName() . " attaque en premier ! " . $elfe->getName() . " subit " . abs($firstStrike) . " dégâts.<br>";
    
            // Vérifier si l'Elfe est encore en vie
            if ($elfe->getPV() <= 0) {
                echo $elfe->getName() . " est mort ! " . $nain->getName() . " a gagné !<br>";
                break;
            }
    
            // Elfe contre-attaque
            $secondStrike = $nain->defendre() - $elfe->attaque();
            $nain->setPV($nain->getPV() + $secondStrike); // Maj des PV du Nain
            echo $elfe->getName() . " contre-attaque ! " . $nain->getName() . " subit " . abs($secondStrike) . " dégâts.<br>";
    
            // Vérifier si le Nain est encore en vie
            if ($nain->getPV() <= 0) {
                echo $nain->getName() . " est mort ! " . $elfe->getName() . " a gagné !<br>";
                break;
            }
        }
    
        // Afficher les PV restants
        echo $elfe->getName() . " a " . $elfe->getPV() . " PV restants.<br>";
        echo $nain->getName() . " a " . $nain->getPV() . " PV restants.<br><br>";
    
        // Passer au tour suivant
        $tour++;
    }
    
    echo "<br>Fin du combat !<br>";
 -->