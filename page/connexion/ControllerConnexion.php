<?php

class ControllerConnexion{
    public static function includeView(){
        include('connexion.php');
    }
    public static function authenticate($identifiant,$mdp){
        $bdd = DatabaseLinker::getConnexion();
	$reponse = $bdd->prepare("SELECT * from chasseur where identifiant=? and mdp=?");
	$reponse->execute(array($identifiant,$mdp));
        $chasseur = $reponse->fetchAll();
        $lechasseur=ChasseurDAO::getChasseurByIdentifiantEtMdp($identifiant,$mdp);
        
        
        if (!empty($chasseur[0])){
            $_SESSION['idChasseur']=$lechasseur->getidChasseur();
            $_SESSION['nom']=$lechasseur->getNom();
            $_SESSION['prenom']=$lechasseur->getPrenom();
            $_SESSION['identifiant']=$lechasseur->getIdentifiant();
            $_SESSION['dateNaissance']=$lechasseur->getDateNaissance();
            $_SESSION['photo']=$lechasseur->getPhoto();
            $_SESSION['admin']=$lechasseur->getAdmin();
            $_SESSION['idAvis']=$lechasseur->getIdAvis();
            return true;
        }
        else {
            return false;
        }
    }
    
    
    public static function redirectUser(){
        header('location:index.php?page=viewAvis'); 
    }
}

