<?php

require "../Models/Database.php";
require "../Models/Appointments.php";
require "../Models/Patients.php";

$Patients = new Patients();

$errorMessage = [];
$successMessage = [];

$reggexPhone = "/^[0-9]{10}$/";
$reggexString = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u";

if (isset($_POST['next'])) {
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        if (!preg_match($reggexString, $lastname)) {
            $errorMessage['lastname'] = "Veuillez saisir un nom valide";
        }
        if (empty($lastname)) {
            $errorMessage['lastname'] = "Veuillez saisir un nom";
        }
        if (!empty($lastname) && preg_match($reggexString, $lastname)) {
            $successMessage['lastname'] = htmlspecialchars($lastname);
        }
    } 
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        if (!preg_match($reggexString, $firstname)) {
            $errorMessage['firstname'] = "Veuillez saisir un prénom valide";
        }
        if (empty($firstname)) {
            $errorMessage['firstname'] = "Veuillez saisir un nom";
        }
        if (!empty($firstname) && preg_match($reggexString, $firstname)) {
            $successMessage['firstname'] = htmlspecialchars($firstname);
        }
    }
    if (isset($_POST['birthdate'])) {
        $birthdate = $_POST['birthdate'];
        if (empty($birthdate)) {
            $errorMessage['birthdate'] = "Veuillez séléctionner une date";
        } else {
            $successMessage['birthdate'] = htmlspecialchars($birthdate);
        }
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
        if (!preg_match($reggexPhone, $phone)) {
            $errorMessage['phone'] = "Veuillez saisir un numéro de téléphone valide";
        }
        if (empty($phone)) {
            $errorMessage['phone'] = "Veuillez saisir un numéro de téléphone";
        }
        if (!empty($phone) && preg_match($reggexPhone, $phone)) {
            $successMessage['phone'] = htmlspecialchars($phone);
        }
    }
    if (isset($_POST['mail'])) {
        $mail = $_POST['mail'];
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errorMessage['mail'] = "Veuillez saisir un mail valide";
        }
        if (empty($mail)) {
            $errorMessage['mail'] = "Veuillez saisir un mail";
        }
        if (!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $successMessage['mail'] = htmlspecialchars($mail);
        }
    }
}