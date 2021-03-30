<?php

class SuperController{
    public static function callPage($page){
        switch($page){
            case "connexion":
                include_once("page/connexion/ControllerConnexion.php");
                $instanceController=new ControllerConnexion();
                $instanceController->includeView();
                if (isset($_POST['identifiant'])){
                    if ($instanceController->authenticate($_POST['identifiant'], $_POST['mdp'])!=false){
                        $instanceController->redirectUser();
                    }
                    else{
                        echo "ERREUR";
                    }
                    
                }
                break;
            case "viewAvis":
                include("page/viewAvis/insererCom.php");
                if (isset($_SESSION['identifiant'])){
                    include_once("page/viewAvis/viewAvis.php");
                    
                }
                if (isset($_POST['content']) && isset($_GET['idAvis']) ){
                    insererCom::insererCommentaire($_POST['content'], $_GET['idAvis']);
                }
                break;
                
        }
    }
}


