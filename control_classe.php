<?php
require_once 'model_classe.php';

$idclasse = $_POST['id_classe'];
$Niveau = $_POST['Niveau'];
$nx_classe = new Maclasse($idclasse, $Niveau);
$nx_classe->insert_classe();

?>