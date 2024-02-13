
<?php
require_once 'Model_professeur.php';
$nom=$_POST['Name'];
$id=$_POST['id_prof'];
$firstname=$_POST['Firstname'];
$Grade=$_POST['Grade'];

$nx_prof=new Profesor($id,$nom,$firstname,$Grade);
$nx_prof->insert_prof();

?>  