<?php


class ChasseurDAO{
    public static function getChasseur() {
        $bdd = DatabaseLinker::getConnexion();
	$reponse = $bdd->prepare("SELECT * from chasseur");
	$reponse->execute();
	$chasseur = $reponse->fetchAll();
	$tab=Array(); 
	if (empty($chasseur[0])){
		return null;
	}

	else{
		foreach ($chasseur as $chasseurs) {

			$ChasseurDTO = new ChasseurDTO();
			$ChasseurDTO->setidChasseur($chasseurs[0]);
			$ChasseurDTO->setNom($chasseurs[1]);
			$ChasseurDTO->setPrenom($chasseurs[2]);
			$ChasseurDTO->setIdentifiant($chasseurs[3]);
                        $ChasseurDTO->setDateNaissance($chasseurs[4]);
                        $ChasseurDTO->setPhoto($chasseurs[5]);
                        $ChasseurDTO->setAdmin($chasseurs[6]);
                        $ChasseurDTO->setIdAvis($chasseurs[7]);
                        
                        
			$tab[]=$ChasseurDTO; 
		}
            return $tab;
        
        }
    }
    
    
    public static function getChasseurByIdentifiantEtMdp($id,$mdp){
        $bdd = DatabaseLinker::getConnexion();
	$reponse = $bdd->prepare("SELECT * from chasseur where identifiant=? and mdp=?");
	$reponse->execute(array($id,$mdp));
	$chasseur = $reponse->fetchAll();
        if (empty($chasseur[0])){
		return null;
	}

	else{
                        $lechasseur=$chasseur[0];
			$ChasseurDTO = new ChasseurDTO();
			$ChasseurDTO->setidChasseur($lechasseur['idChasseur']);
			$ChasseurDTO->setNom($lechasseur['nom']);
			$ChasseurDTO->setPrenom($lechasseur['prenom']);
			$ChasseurDTO->setIdentifiant($lechasseur['identifiant']);
                        $ChasseurDTO->setDateNaissance($lechasseur['dateNaissance']);
                        $ChasseurDTO->setPhoto($lechasseur['photo']);
                        $ChasseurDTO->setAdmin($lechasseur['admin']);
                        $ChasseurDTO->setIdAvis($lechasseur['idAvis']);
                        return $ChasseurDTO;
                        
                       
                }
                 
              
	}
    }


