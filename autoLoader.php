<?php
spl_autoload_register(function ($class) {
   
   // Vérifie si le fichier existe
   if (file_exists('./Application/' . $class . '.php')) {
       include './Application/' . $class . '.php';
   }
}
);

?>
