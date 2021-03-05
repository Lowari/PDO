<?php

require "../Models/Database.php";
require "../Models/Appointments.php";

$Appointments = new Appointments();
$showAllAppointments = $Appointments -> getInformationsAppointments();