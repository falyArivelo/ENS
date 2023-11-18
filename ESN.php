<?php

class Employe{
    private string $nom;
    private string $adresse;
    private string $profile;
    private float $salaire;
    private array  $contact;

    public function __construct(){
        $this->contact = array();
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse(string $adresse){
        $this->adresse = $adresse;

        return $this;
    }

    public function getProfile(){
        return $this->profile;
    }

    public function setProfile(string $profile){
        $this->profile = $profile;

        return $this;
    }

    public function getSalaire(){
        return $this->salaire;
    }

    public function setSalaire(float $salaire){
        $this->salaire = $salaire;

        return $this;
    }

    public function addContact(string $contact) {
        array_push($this->contact, $contact);
    }

    public function RemoveContact(string $contact) {
        $index = array_search($contact, $this->contact);

        if ($index !== false) {
            unset($this->contact[$index]);
        }
    }
}

class ESN{
    private string $nom;
    private string $adresse;
    private int $nombreDev;
    private array $collaborators;

    public function __construct(){
        $this->collaborators = array();
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse(string $adresse){
        $this->adresse = $adresse;

        return $this;
    }

    
    public function getNombreDev(){
        return count($this->collaborators);
    }

    public function setNombreDev(int $nombreDev){
        $this->nombreDev = $nombreDev;

        return $this;
    }

    public function calculSalaire(Employe $employe): float{
        $profile = mb_strtolower($employe.getProfile());

        switch($profile){
            case "senior":
                return 200000;
            case "confirme":
                return 150000;
            case "junior":
                return 100000;
        }
    }

    public function addCollaborator(Employe $employe) {
        array_push($this->collaborators, $employe);
    }

    public function RemoveCollaborator(Employe $employe) {
        $index = array_search($employe, $this->collaborators);

        if ($index !== false) {
            unset($this->collaborators[$index]);
        }
    }

    public function listCollaborators(): void {
        echo "List collaborators of {$this->nom} :\n";

        foreach ($this->collaborators as $collaborator) {
            echo "- Name : {$collaborator->getNom()}, {$collaborator->getProfile()}, Adress : {$collaborator->getAdresse()} \n";
        }
    }
}

$bocasay = new ESN();
$bocasay->setNom("BOCASAY");
$bocasay->setAdresse("je sais pas");

$emp = new Employe();
$emp->setNom("faly");
$emp->setAdresse("andoharanofotsy");
$emp->setProfile("senior");
$emp->addContact("faly@gmail.com");
$emp->addContact("038 20 832 11");

$emp2 = new Employe();
$emp2->setNom("tovo");
$emp2->setAdresse("fianarantsoa");
$emp2->setProfile("junior");
$emp2->addContact("tovo@gmail.com");
$emp2->addContact("034 72 832 23");

$bocasay->addCollaborator($emp);
$bocasay->addCollaborator($emp2);
$bocasay->RemoveCollaborator($emp2);

// echo $bocasay->getNombreDev();
$bocasay->listCollaborators();
