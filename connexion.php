<?php
    function Connexion ($ID, $MdP){
        require("connect.php");
            
        if($BDD){
            $_Requete = "SELECT * FROM utilisateur WHERE IdUtilisateur='$ID' AND MdPUtilisateur='$MdP'";
            $_utilisateur = $BDD->query($_Requete);

            $Compteur = 0;

            while($Tuple = $_utilisateur -> fetch()){
                $Compteur = $Compteur + 1;
            }
            if ($Compteur==1){
                header("Location: Recherche.php");
            }
            else{
                $error = "Utilisateur non reconnu";
            }
        }
    }


//require_once "connect.php";
        
//if(!empty($_POST['id']) and !empty($_POST['mdp'])){
//    $ID = $_POST['id'];
//    $MdP = $_POST['mdp'];
//    $_Requete = getDb()-> prepare('select * from utilisateur where IdUtilisateur=? and MdPUtilisateur=?');
//    $_Requete ->execute(array($ID, $MdP));
//    if ($_Requete->rowCount()==1){
//        header("Location: Recherche.php");
//    }
//    else{
//        $error = "Utilisateur non reconnu";
//    }
//}

?>
