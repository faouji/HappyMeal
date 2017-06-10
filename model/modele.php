
<?php
 function getEntree() {
    $bdd = getBdd();
     $sql="SELECT * FROM  entree ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowEntree = $stmt->fetchAll();
    return $rowEntree;
}
function getMenup() {
    $bdd = getBdd();
     $sql="SELECT * FROM  menup ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowMenup = $stmt->fetchAll();
    return $rowMenup;
}
   //fonction qui get la table boisson
function getBoisson() {
    $bdd = getBdd();
     $sql="SELECT * FROM boisson";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowBoisson = $stmt->fetchAll();
    return $rowBoisson;   
}


 //fonction qui get la table dessert
function getDessert() {
    $bdd = getBdd();
    $sql="SELECT * FROM dessert";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowDessert = $stmt->fetchAll();
    return $rowDessert;
   }
// Renvoie la liste des repas

function getMenuJour() {
    $bdd = getBdd();
     $sql="SELECT * FROM menu_jour";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowMenujour = $stmt->fetchAll();
    return $rowMenujour;
}

function getMenuJour1() {
    $bdd = getBdd();
     $sql="SELECT * FROM menu_jour where jour='lmmj'";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowMenujour1 = $stmt->fetchAll();
    return $rowMenujour1;
}
function getsumprix1() {
    $bdd = getBdd();
     $sql="SELECT SUM(prix)FROM menu_jour where jour='lmmj'";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowsumprix1= $stmt->fetch();
    return $rowsumprix1;
}
function getMenuJour2() {
    $bdd = getBdd();
    $sql="SELECT * FROM menu_jour where jour='friday'";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowMenujour2 = $stmt->fetchAll();
    return $rowMenujour2;
}
function getsumprix2() {
    $bdd = getBdd();
     $sql="SELECT SUM(prix) FROM menu_jour where jour='friday'";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowsumprix2= $stmt->fetch();
    return $rowsumprix2;
}
function getMenuJour3() {
    $bdd = getBdd();
     $sql="SELECT * FROM menu_jour where jour='week'";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowMenujour3 = $stmt->fetchAll();
    return $rowMenujour3;
}

function getsumprix3() {
    $bdd = getBdd();
     $sql="SELECT SUM(prix)FROM menu_jour where jour='week'";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowsumprix3 = $stmt->fetch();
    return $rowsumprix3;
}
function getRepas() {
    $bdd = getBdd();
    $sql="SELECT * FROM repas";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowRepas = $stmt->fetchAll();
    $repas = $bdd->query('SELECT * FROM `repas`');
    return $rowRepas;
}
function getRepas_jour(){
    $bdd = getBdd();
    $sql="SELECT * FROM repas_j";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $rowRepasj = $stmt->fetchAll();
    return $rowRepasj;
}
 
//function choixRepas($$idBoisson,)




// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=base;charset=utf8', 'root',
            '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}


?>