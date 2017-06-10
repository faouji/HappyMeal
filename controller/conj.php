<?php
require '../views/mainServeurjour.php';
 if(isset($_POST['toto'])){

   $bdd=getBdd();
   $sql="UPDATE repas_j SET affectation='oui' where affectation='non'";
   $stmt=$bdd->prepare($sql);
   $stmt->execute();
	  echo "<script >alert(\"Affectation reussite\")</script>";
}
?>