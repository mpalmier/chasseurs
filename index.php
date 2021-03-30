<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>World Bounty Hunters Agency</title>		
	</head>
	<body>

<?php

    require('tools/DTO/AvisDTO.php');
    require('tools/DAO/AvisDAO.php');
    require('tools/DTO/CommentaireDTO.php');
    require('tools/DAO/CommentaireDAO.php');
    require('tools/DTO/ChasseurDTO.php');
    require('tools/DAO/ChasseurDAO.php');
    require('tools/DatabaseLinker.php');
    
    session_start();
    include_once("tools/SuperController.php");
    $page = "connexion";

    if(!empty($_GET['page'])) {
	$page = $_GET['page'];
    }

	SuperController::callPage($page);	
?>		

	</body>
</html>