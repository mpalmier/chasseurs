<?php

class CommentaireDAO{
   public static function getCommentaireById($idCommentaire){

	$bdd = DatabaseLinker::getConnexion();
	$reponse = $bdd->prepare("SELECT * from commentaire where idCommentaire=?");
	$reponse->execute(array($idCommentaire));
	$com = $reponse->fetchAll();
	if (empty($com[0])){
		return null;
	}

	else{
		$CommentaireDTO = new CommentaireDTO();
		$CommentaireDTO->setidCommentaire($com[0]);
		$CommentaireDTO->setpseudo($com[1]);
		$CommentaireDTO->setdate($com[2]);
		$CommentaireDTO->setcontent($com[3]);
                $CommentaireDTO->setIdChasseur($com[4]);
		$CommentaireDTO->setIdAvis($com[5]);
		return $CommentaireDTO;
	}
    }
    public static function insertCommentaire($commentaireDTO){
	$bdd = DatabaseLinker::getConnexion();
	$reponse = $bdd->prepare("INSERT INTO commentaire (pseudo,date,content,idChasseur,idAvis) values (?,CURDATE(),?,?,?)");
	$reponse->execute(array($commentaireDTO->getPseudo(),$commentaireDTO->getContent(),$commentaireDTO->getIdChasseur(),$commentaireDTO->getIdAvis()));
        
        
					

    }
}
