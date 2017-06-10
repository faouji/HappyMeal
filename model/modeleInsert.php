   <?php
 
function ajouterplats_jour($dessert,$total,$table,$non){
 $conn=getBdd();
 
     
 $stmt1= $conn->prepare("INSERT INTO repas_j(plat,total,n_table,affectation) VALUES (?,?,?,?)");
 $stmt1->bindParam(1, $dessert);
   $stmt1->bindParam(2, $total);
	 $stmt1->bindParam(3, $table);
     $stmt1->bindParam(4,$non);

		    $stmt1->execute();
}
function ajouterplats($plat,$dessert,$entree,$boisson,$table,$non){
 $conn=getBdd();
     
 $stmt2= $conn->prepare("INSERT INTO repas(menu_prix,dess_prix,entree_prix,boisson_prix,Id_table,affectation) VALUES(?,?,?,?,?,?)");

 $stmt2->bindParam(1, $plat);
   $stmt2->bindParam(2, $dessert);
   $stmt2->bindParam(3, $entree);
      $stmt2->bindParam(4, $boisson);
       $stmt2->bindParam(5, $table);
       $stmt2->bindParam(6, $non);
       
        $stmt2->execute();
}
  ?>