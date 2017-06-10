<?php 

 require '../model/modele.php';

class serveurModele
{  private $username;

	
	function serveurModele ($username)
	{
		$this->username = $username;
	}

  function get_username() {
  	return $this->username;
  }

  
function authenticate($u,$p){

       $authentic= false;
         //check the db
 
     $bdd = getBdd();
    $sql="SELECT login,password FROM serveur";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowServeur = $stmt->fetchAll();
    foreach ($rowServeur as $key => $value){


       if($value['login'] == $u && $value['password'] == $p) $authentic = true; 
           }
       return $authentic;

  }
  function authenticateChef($u,$p){

       $authentic= false;
         //check the db
 
     $bdd = getBdd();
    $sql="SELECT login,password FROM cuisinier";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowServeur = $stmt->fetchAll();
    foreach ($rowServeur as $key => $value){


       if($value['login'] == $u && $value['password'] == $p) $authentic = true; 
           }
       return $authentic;

  }

}

?>