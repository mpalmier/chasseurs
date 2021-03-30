<?php
class insererCom{
    public static function insererCommentaire($content,$idAvis){
	$CommentaireDTO=new CommentaireDTO;
	$CommentaireDTO->setPseudo($_SESSION['identifiant']);
	$CommentaireDTO->setContent($_POST['content']);
	$CommentaireDTO->setIdAvis($_GET['idAvis']);	
	CommentaireDAO::insertCommentaire($CommentaireDTO);
        
    }
}

