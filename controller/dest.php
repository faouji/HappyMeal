<?php
require_once ('serveur_controlleur.php');
require_once('../model/serveur_modele.php');
@$op = $_REQUEST['op'];
 

 $serveur_controller = new ServeurControlleur;

   switch ($op) {
      
	case 'login':

		$username = $_POST['login'];
		$password = $_POST['password']; 
			
      
		if ($serveur_controller->login($username,$password)) {
            if($username == 'menup'){
            header("Location:../views/mainServeur.php");

            }else{
             header("Location:../views/mainServeurjour.php");

            }

		} else 
		  header("Location:../views/404.php");


		break;

		case 'logout':
			 $serveur_controller->logout();
             header("Location:../index.php");
			
		break;
	
	default:
		header("Location:vue.php");
		break;
}

?>