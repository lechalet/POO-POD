<?php
class Personne
{
    private $lastName;
    private $firstName;
    private $address;
    private $birthDate;
    // Construct
    public function __construct($lastName, $firstName, $address, $birthDate)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->address = $address;
        $this->birthDate = $birthDate;
    }
    // Afficher infos de la personne
    public function __toString(): string
    {
        $str = 'Je m\'appelle '.$this->getFirstName(). ' ' . $this->getLastName() . ', j\'habite au '. $this->getAddress().' et je suis né le '. $this->getBirthDate() . '.<br />';;
        return $str;
    }
    // Calculer l'âge
    public function calculAge($birthDate): int
    {
        $date = strtotime($birthDate);
        $now = time();
        $age = date('Y',$now)-date('Y',$date);
        return $age;
    }
    // Setters and getters
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }
    public function getAddress(): string
    {
        return $this->address;
    }
    public function setAddress($address): void
    {
        $this->address = $address;
    }
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }
    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }
}
