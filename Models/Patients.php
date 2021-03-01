<?php

class Patients extends Database {

    private $id;
    private $lastname;
    private $firstname;
    private $birthdate;
    private $phone;
    private $mail;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of birthdate
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }

    public function getInformationsPatients() {
        $query = "SELECT * FROM `patients`;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    public function getNewPatient($arrayParameter) {
        $query = "INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES (:lastname, :firstname, :birthdate, :phone, :mail);";
        $buildQuery = parent::getDb()->prepare($query);

        $buildQuery -> bindParam('lastname', $arrayParameter['lastname']);
        $buildQuery -> bindParam('firstname', $arrayParameter['firstname']);
        $buildQuery -> bindParam('birthdate', $arrayParameter['birthdate']);
        $buildQuery -> bindParam('phone', $arrayParameter['phone']);
        $buildQuery -> bindParam('mail', $arrayParameter['mail']);

        return $buildQuery -> execute();

    }
}