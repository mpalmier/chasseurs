<?php

class AvisDAO{
    public static function getAvis(){

		$bdd = DatabaseLinker::getConnexion();
		$reponse = $bdd->prepare("SELECT * from avis");
		$reponse->execute();
		$avis = $reponse->fetchAll();
		$tab=Array(); 
		if (empty($avis[0])){
			return null;
		}

		else{
			foreach ($avis as $lesavis) {

				$AvisDTO = new AvisDTO();
				$AvisDTO->setidAvis($lesavis[0]);
				$AvisDTO->setphoto($lesavis[1]);
				$AvisDTO->setnom($lesavis[2]);
				$AvisDTO->setprenom($lesavis[3]);
                                $AvisDTO->setmontant($lesavis[4]);
                                $AvisDTO->setdescription($lesavis[5]);
				$tab[]=$AvisDTO; 
			}
			return $tab;
		}
    }
    
    public static function getCommentaireByIdAvis($idAvis){
        $bdd = DatabaseLinker::getConnexion();
	$reponse = $bdd->prepare("SELECT * from commentaire where idAvis=?");
	$reponse->execute(array($idAvis));
	$com = $reponse->fetchAll();
	$tab=[];
	if (empty($com[0])){
		return null;
	}

	else{
		foreach ($com as $commentaire) {
			$CommentaireDTO = new CommentaireDTO();
			$CommentaireDTO->setidCommentaire($commentaire[0]);
			$CommentaireDTO->setpseudo($commentaire[1]);
			$CommentaireDTO->setdate($commentaire[2]);
			$CommentaireDTO->setcontent($commentaire[3]);
                        $CommentaireDTO->setIdChasseur($commentaire[4]);
			$CommentaireDTO->setIdAvis($commentaire[5]);
			$tab[]=$CommentaireDTO;
		}
		return $tab;
	}
	
    }
}

