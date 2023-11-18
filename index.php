<?php

//Capsule => Encapsulation => class

class Chien
{
    protected String $race;
    public String $nom;
    private int $age;

    public function __construct()
    {
        $this->setNom("bobi");
    }

    public function getRace(): string
    {
        return $this->race;
    }

    public function setRace(?string $race)
    {
        $this->race = $race;

        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(?string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }
}

$bobi = new Chien();
$bobi->setRace("saucisse");
$bobi->setNom("boule");
$bobi->setAge(19);

echo $bobi->getRace();
echo "\n";
echo $bobi->getNom();
echo "\n";
echo $bobi->getAge();
