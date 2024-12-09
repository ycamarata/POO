<link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
<?php 

    include('./autoLoader.php');
   
//  $maVoiture = new Voiture('Audi' , 'A3' , 0 , 260, 6);
/*   $maVoiture -> setMarque("BMW"); */ 
 //   echo $maVoiture->getMarque(), '<br>';
   // echo $maVoiture->getModele(), '<br>';
   // echo $maVoiture->getKilometrage(), '<br>';
   // echo $maVoiture->getVitesseMax(), '<br>';
    //echo $maVoiture->getCylindre(), '<br><br>';

    //$monAvion = new Avion('Airbus' , 'A380' , 0 , 900, 600);

//        echo $monAvion->getMarque(), '<br>';
 //       echo $monAvion->getModele(), '<br>';
  //      echo $monAvion->getKilometrage(), '<br>';
   //     echo $monAvion->getVitesseMax(), '<br>';
    //    echo $monAvion->getCylindre(), '<br><br>';

   //     echo $monAvion->deplace(), '<br>';
    //    echo $monAvion->accelere(), '<br>';
      //  echo $monAvion->freine(), '<br>';
        //echo $monAvion->bruit(), '<br><br>';
        
  //   $monAvion->deplace() ; echo " , " ;  $monAvion-> accelere(); echo " , " ; $monAvion->freine();
  //  echo " , " ; $monAvion->bruit(); echo "!" ; echo'<br><br><br><br>'; */
 
    

// Jeu perso

    $elfe = new Elfe(' Elfe');
    $nain = new Nain(' Nain');
    
    // Tableau des personnages
    $DomeDuTonnerre = [$elfe, $nain];
    
    //Initialiser le tour 1
    $tour = 1;
    
    echo '
    <section class="container  my-2">
        <div class="row justify-content-between">
            <!-- Carte du Nain -->
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-header text-center">Nain</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">PV : ' . $nain->getPV().'</li>
                        <li class="list-group-item">Endurance : ' . $nain->getEndurance() . '</li>
                        <li class="list-group-item">Force : ' . $nain->getForce() . '</li>
                        <li class="list-group-item">Classe : ' . $nain->guerrier() . '</li>
                    </ul>
                </div>
                <div class="card">
                    <h2 class="card-header text-center">Stats :</h2>
                    <div class="card-body">
                        <p>' . $nain->getName() . ' a une classe '.$nain->guerrier().' (+'.$nain->forceBonusClasse.' force)</p>
                        <p>' . $nain->getName() . '  '.$nain->guerrier().'  a : ' . $nain->getForce(). ' de force</p>
                        <p>' . $nain->getName() . ' a équipé : ' . $nain->marteau() . ' (+'.$nain->forceBonusArme.' force)</p>
                      
                        <p class="text-white bg-primary text-center"> TOTAL FORCE  : ' . $nain->getForce() . '</p>

                        <p>Bonus de PV avec la classe : + ' . $nain->pvBonusClasse . '.</p>
                        <p class="text-white bg-danger text-center">TOTAL PV : ' . $nain->getPV() . '</p>
                        
                    </div>
                </div>
            </div>
            
            <!-- Carte de l\'Elfe -->
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-header text-center">Elfe</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">PV : ' . $elfe->getPV() . '</li>
                        <li class="list-group-item">Endurance : ' . $elfe->getEndurance() . '</li>
                        <li class="list-group-item">Force : ' . $elfe->getForce() . '</li>
                    </ul>
                </div>
                <div class="card">
                    <h2 class="card-header text-center">Stats :</h2>
                    <div class="card-body">
                        <p>' . $elfe->getName() . ' a une force de base de : ' . $elfe->getForce() . '.</p>
                        <p>' . $elfe->getName() . ' a équipé : ' . $elfe->arc() . '</p>
                        <p>Bonus de force avec l\'arme équipée : + ' . $elfe->forceBonus . '.</p>
                        <p>' . $elfe->getName() . ' équipe une arme et sa force augmente à : ' . $elfe->getForce() . '</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    
    // Boucle au tour par tour
    while ($elfe->getEnVie() && $nain->getEnVie()) {
        echo ' <div class="card text-center m-2"> <h2> Tour '.$tour.' : </h2></div>';
    
        if ($tour % 2 != 0) {
    
            // Tours impairs : Elfe attaque en premier
            $firstStrike = $nain->defendre() - $elfe->attaque();
            $nain->getPV() + $firstStrike; // Maj des PV du Nain
            echo '
            <div class = "text-center">
            '/* .$firstStrike */ .$elfe->getName().' attaque en premier !'. $nain->getName() .' subit  '. abs($firstStrike) .' de dégâts.<br>
            </div>
            ';
    
            // Vérifier si le Nain est encore en vie
            if ($nain->getPV() <= 0) {
                echo '
                <div class = "text-center">
                 '.$nain->getName().' est mort !'. $elfe->getName() .' a gagné !
                 </div>';
                break;
            }
    
            // Nain contre attaque
            $secondStrike = $elfe->defendre() - $nain->attaque();
            $elfe->setPV($elfe->getPV() + $secondStrike); // Maj des PV de l'Elfe
            echo '
            <div class = "text-center">
             '.$nain->getName().' contre-attaque !'. $elfe->getName().' subit '. abs($secondStrike) . ' dégâts.
            </div>
             ';

    
            // Vérifier si l'Elfe est encore en vie
            if ($elfe->getPV() <= 0) {
                echo '
                <div class = "text-center">
                 '.$elfe->getName().' est mort !'. $nain->getName() .' a gagné !
                 </div>';
                break;
            }
        } else {
            // Tours pairs : Nain attaque en premier
            $firstStrike = $elfe->defendre() - $nain->attaque();
            $elfe->setPV($elfe->getPV() + $firstStrike); // Maj des PV de l'Elfe
            echo '
            <div class = "text-center">
            '.$nain->getName().' attaque en premier !'. $elfe->getName() .' subit  '. abs($firstStrike) .' de dégâts.<br>
            </div>
            ';
    
            // Vérifier si l'Elfe est encore en vie
            if ($elfe->getPV() <= 0) {
                echo '
                <div class = "text-center">
                 '.$elfe->getName().' est mort !'. $nain->getName() .' a gagné !
                 </div>';
                break;
            }
    
            // Elfe contre attaque
            $secondStrike = $nain->defendre() - $elfe->attaque();
            $nain->setPV($nain->getPV() + $secondStrike); // Maj des PV du Nain
            echo '
            <div class = "text-center">
             '.$elfe->getName().' contre-attaque !'. $nain->getName().' subit '. abs($secondStrike) . ' dégâts.
            </div>
             ';
    
            // Vérifier si le Nain est encore en vie
            if ($nain->getPV() <= 0) {
                echo '
                <div class = "text-center">
                 '.$nain->getName().' est mort !'. $elfe->getName() .' a gagné !
                 </div>';
                break;
            }
        }
    
        // Afficher les PV restants
        echo'<div class="text-center"> '.$elfe->getName().' a '. $elfe->getPV().'  PV restants.</div>';
        echo '<div class="text-center"> '.$nain->getName().' a '. $nain->getPV().'  PV restants.</div>';
    
        // Passer au tour suivant
        $tour++;
    }
    
    echo '<div class = "card text-center m-2 bg-danger">Fin du combat !</div>';
    ?>
    

    <script src="bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
