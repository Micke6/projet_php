<?php

require_once 'model_salle.php';

  $Design= $_POST['Design'];
  $Occupation = $_POST['Occupation'];

  $nx_salle = new Salle($Design,$Occupation);
  $nx_salle->insert_salle();

?>