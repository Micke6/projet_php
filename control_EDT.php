<?php
require_once 'model_EDT.php';
$idsalle = $_POST['idsalle'];
$idprofesseur = $_POST['idprofesseur'];
$Cours = $_POST['Cours'];
$Date = $_POST['Date'];
$idclasse = $_POST['id_classe'];

$nx_EDT = new EDT($idsalle,$idprofesseur,$idclasse,$Cours,$Date);
$nx_EDT->insert_edt();


?>