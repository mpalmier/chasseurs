<?php

class AvisDTO{
    private $idAvis;
    private $photo;
    private $nom;
    private $prenom;
    private $montant;
    private $description;
    function getPhoto() {
        return $this->photo;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getMontant() {
        return $this->montant;
    }

    function getDescription() {
        return $this->description;
    }

    function setPhoto($photo): void {
        $this->photo = $photo;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }

    function setMontant($montant): void {
        $this->montant = $montant;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

        function getIdAvis() {
        return $this->idAvis;
    }

    function setIdAvis($idAvis): void {
        $this->idAvis = $idAvis;
    }


}

