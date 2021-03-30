<?php


class CommentaireDTO{
    private $idCommentaire;
    private $pseudo;
    private $date;
    private $content;
    private $idChasseur;
    private $idAvis;
    function getIdCommentaire() {
        return $this->idCommentaire;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getDate() {
        return $this->date;
    }

    function getContent() {
        return $this->content;
    }

    function getIdChasseur() {
        return $this->idChasseur;
    }

    function getIdAvis() {
        return $this->idAvis;
    }

    function setIdCommentaire($idCommentaire): void {
        $this->idCommentaire = $idCommentaire;
    }

    function setPseudo($pseudo): void {
        $this->pseudo = $pseudo;
    }

    function setDate($date): void {
        $this->date = $date;
    }

    function setContent($content): void {
        $this->content = $content;
    }

    function setIdChasseur($idChasseur): void {
        $this->idChasseur = $idChasseur;
    }

    function setIdAvis($idAvis): void {
        $this->idAvis = $idAvis;
    }


}