<?php
require '../views/mainServeur.php';
 if(isset($_POST['tata'])){

   $bdd=getBdd();
   $sql="UPDATE repas SET affectation='oui' where affectation='non'";
   $stmt=$bdd->prepare($sql);
   $stmt->execute();
	  echo "<script >alert(\"Affectation reussite\")</script>";
   
}
?>