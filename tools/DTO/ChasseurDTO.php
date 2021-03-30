<?php

class ChasseurDTO{
    private $idChasseur;
    private $nom;
    private $prenom;
    private $identifiant;
    private $dateNaissance;
    private $photo;
    private $admin;
    private $idAvis;
    
    function getIdChasseur() {
        return $this->idChasseur;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getIdentifiant() {
        return $this->identifiant;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getAdmin() {
        return $this->admin;
    }

    function getIdAvis() {
        return $this->idAvis;
    }

    function setIdChasseur($idChasseur): void {
        $this->idChasseur = $idChasseur;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }

    function setIdentifiant($identifiant): void {
        $this->identifiant = $identifiant;
    }

    function setDateNaissance($dateNaissance): void {
        $this->dateNaissance = $dateNaissance;
    }

    function setPhoto($photo): void {
        $this->photo = $photo;
    }

    function setAdmin($admin): void {
        $this->admin = $admin;
    }

    function setIdAvis($idAvis): void {
        $this->idAvis = $idAvis;
    }


}