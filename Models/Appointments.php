<?php

class Appointments extends Database
{

    private $id;
    private $dateHour;
    private $idPatients;



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
     * Get the value of dateHour
     */
    public function getDateHour()
    {
        return $this->dateHour;
    }

    /**
     * Set the value of dateHour
     *
     * @return  self
     */
    public function setDateHour($dateHour)
    {
        $this->dateHour = $dateHour;

        return $this;
    }

    /**
     * Get the value of idPatients
     */
    public function getIdPatients()
    {
        return $this->idPatients;
    }

    /**
     * Set the value of idPatients
     *
     * @return  self
     */
    public function setIdPatients($idPatients)
    {
        $this->idPatients = $idPatients;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function getInformationsAppointments()
    {
        $query = "SELECT * FROM `appointments`;";
        $builQuery = parent::getDb()->prepare($query);
        $builQuery->execute();
        $resulQuery = $builQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resulQuery)) {
            return $resulQuery;
        } else {
            return false;
        }
    }

    public function getNewAppointments($arrayParameter)
    {
        $query = "INSERT INTO `appointments` (`dateHour`, `idPatients`) VALUES (:dateHour, :idPatients);";
        $buildQuery = parent::getDb()->prepare($query);

        $buildQuery->bindParam('dateHour', $arrayParameter['dateHour']);
        $buildQuery->bindParam('idPatients', $arrayParameter['idPatients']);

        return $buildQuery->execute();
    }

    public function updateAppointments($arrayParameter)
    {
        $query = "UPDATE `appointments` SET `dateHour` = :dateHour, `idPatients` = :idPatients; WHERE `id` = :id";
        $buildQuery = parent::getDb()->prepare($query);

        $buildQuery->bindParam('dateHour', $arrayParameter['dateHour']);
        $buildQuery->bindParam('idPatients', $arrayParameter['idPatients']);

        return $buildQuery->execute();
    }
}
