<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page de test</title>
  </head>
  <body>
      <h1> Bienvenue <?php echo $_SESSION['identifiant'];?> sur le site des chasseurs de primes </h1>
      <?php 
      $avis=AvisDAO::getAvis();
      foreach($avis as $avise){
          echo $avise->getNom();
          echo $avise->getPhoto();
          echo $avise->getPrenom();
          echo $avise->getMontant();
          echo $avise->getDescription(),'<BR>';?>
          <form action="index.php?page=viewAvis?idAvis=<?php echo $avise->getidAvis();?>" method="post"> 
		<p> Entrez votre commentaire </p>
		<textarea type="textarea" name="content" id="content" required> </textarea>
		<input type="submit"  value="Envoyez !"> 
          </form> 
      
          <?php
          $com=AvisDAO::getCommentaireByIdAvis($avise->getIdAvis());
          if ($com==null){
              echo "Il n'y a toujours pas de commentaires soyez le premier !";
          }
          else{
            foreach ($com as $coms){
                echo $coms->getPseudo();
                echo $coms->getDate();
                echo $coms->getContent(),'<BR>';
            }
          
          }
       
          
     
     
     
      }
      ?>
      
  </body>
</html>
