<?php
require 'model/modele.php';

function affichage(){
	$rowEntree = getEntree();
	$rowMenup = getMenup();
	$rowBoisson = getBoisson();
	$rowDessert = getDessert();
    $rowMenujour =getMenuJour();
    $rowMenujour1 =getMenuJour1();
    $rowsumprix1 =getsumprix1();
    $rowMenujour2 =getMenuJour2();
    $rowsumprix2 =getsumprix2();
    $rowMenujour3 =getMenuJour3();
    $rowsumprix3 =getsumprix3();


   require 'views/vue.php';
   require 'model/modeleInsert.php';

  if(isset($_POST['reserve'])){
   $plats='OFFRE2';
   $total=$_POST['total'];
   $table=$_POST['table'];
         $non='non';

   ajouterplats_jour($plats,$total,$table,$non);
    echo "<script >alert(\"La reservation a été correctement effectuée\")</script>";
    require 'views/vue.php';

}elseif(isset($_POST['reserve2'])){
   $plats='OFFRE1';
   $total=$_POST['total'];
   $table=$_POST['table'];
      $non='non';

   ajouterplats_jour($plats,$total,$table,$non);
       echo "<script >alert(\"La reservation a été correctement effectuée\")</script>";
       require 'views/vue.php';


}elseif(isset($_POST['reserve3'])){
   $plats='OFFRE3';
   $total=$_POST['total'];
   $table=$_POST['table'];
      $non='non';
   ajouterplats_jour($plats,$total,$table,$non);
       echo "<script >alert(\"La reservation a été correctement effectuée\")</script>";
       require 'views/vue.php';


}elseif(isset($_POST['reserver'])){
   $table=$_POST['table'];
   $entree=$_POST['entree'];
   $plat=$_POST['plat'];
   $boisson=$_POST['boisson'];
   $dessert=$_POST['dessert'];
   $non='non';
   ajouterplats($plat,$dessert,$entree,$boisson,$table,$non);
    echo "<script >alert(\"La reservation a été correctement effectuée\")</script>";
    require 'views/vue.php';

}     
}


?> 