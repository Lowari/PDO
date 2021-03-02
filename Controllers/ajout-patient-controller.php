<?php

require "../Models/Database.php";
require "../Models/Patients.php";

$errorMessage = [];
$successMessage = [];

$reggexPhone = "/^(\+33\s[1-9]{8})|(0[1-9]\s{8})$/";
$reggexString = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u";

if (isset($_POST['submit'])) {
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        if (!preg_match($reggexString, $lastname)) {
            $errorMessage['lastname'] = "Veuillez saisir un nom valide";
        }
        if (empty($lastname)) {
            $errorMessage['lastname'] = "Veuillez saisir un nom";
        }
        if (!empty($lastname) && preg_match($reggexString, $lastname)) {
            $successMessage['lastname'] = $lastname;
        }
    }

    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        if (!preg_match($reggexString, $firstname)) {
            $errorMessage['firstname'] = "Veuillez saisir un prénom valide";
        }
        if (empty($firstname)) {
            $errorMessage["firstname"] = "Veullez saisir un prénom";
        }
        if (!empty($firstname) && preg_match($reggexString, $firstname)) {
            $successMessage['firstname'] = $firstname;
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
            $successMessage['phone'] = $phone;
        }

        if (isset($_POST['mail'])) {
            $mail = $_POST['mail'];
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $errorMessage['mail'] = "Veuillez saisir un mail valide";
            }
            if (empty($mail)) {
                $errorMessage['mail'] = "Veuillez saisir un e-mail";
            }
            if (!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $successMessage['mail'] = $mail;
            }
        }

        if (isset($_POST['birthdate'])) {
            $birthdate = $_POST['birthdate'];
            if (empty($birthdate)) {
                $errorMessage['birthdate'] = "Veuillez saisir une date de naissance";
            } else {
                $successMessage['birthdate'] = $birthdate;
            }
        }
    }

    if ($successMessage == 5) {

        $arrayParameter = [];

        $arrayParameter['lastname'] = htmlspecialchars($_POST['lastname']);
        $arrayParameter['firstname'] = htmlspecialchars($_POST['firstname']);
        $arrayParameter['birthdate'] = htmlspecialchars($_POST['birthdate']);
        $arrayParameter['phone'] = htmlspecialchars($_POST['phone']);
        $arrayParameter['mail'] = htmlspecialchars($_POST['mail']);

    }
}
