<?php
try
{ $BDD = new PDO( "mysql:host=localhost;dbname=annuaire;charset=utf8", "gestionnaire1","projetWEB2021",
 array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
; // connexion serveur de BD MySql et choix base
}
catch (Exception $e) {
 die('Erreur fatale : ' . $e->getMessage());
}
?>