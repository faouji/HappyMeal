<?php

require_once('../model/serveur_modele.php');
 
 class ServeurControlleur
 {
 	

 	function login ($username, $password){
    $serveur= new serveurModele($username);
    if($serveur->authenticate($username, $password)){
    //start the session for the user
    	session_start();
    	//instancier le serveurModele 
    	$_SESSION['serveur']=$serveur;
    	//
    	return true;

          }

 	else {

 		return false;
 	} 
 }
 	function loginChef ($username, $password){
    $serveur= new serveurModele($username);
    if($serveur->authenticateChef($username, $password)){
    //start the session for the user
    	session_start();
    	//instancier le serveurModele 
    	$_SESSION['chef']=$serveur;
    	//
    	return true;

          }

 	else {

 		return false;
 	}

 	}
 	
 	function logout()
 	{
 		session_start();
 		session_destroy();
 	}

 }

?>


