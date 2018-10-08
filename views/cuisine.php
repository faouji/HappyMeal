<?php


//require_once('model/serveur_modele.php');
session_start();
if(!isset($_SESSION['chef'])){
	 header("Location : vue.php?err=1");
   } 
   else {

   	$serveur=$_SESSION['chef']; 
   }
?>

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
    <title>HappyMeal</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <!-- css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/main.css">

    <!-- google font -->
    <link rel='stylesheet' href='../http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    
    <!-- js -->
    <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>HappyMeal</h2></a>
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs" id="logo"><a href="#header">
                <img src="../img/icon.png" alt="">
            </a></div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#repas">Repas </a></li>
                <li><a href=""></a></li>

                <li><a href="#MenuJ">Repas de jours </a></li>
                <li><a href=""></a></li>
                <a href="../controller/dest.php?op=logout" style="color: white;" >Logout</a>



                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">
            <div class="banner">
                <h1 class="">Happy Meal</h1>
            </div>
            <div class="subtitle"><h4>Bienvenue Chef</h4></div>
        </div>
        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <!-- /#header -->

    <div id="story" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">NOTRE HISTOIRE</h2>
            <p class="lead main text-center">Nous préparons de délicieux plats depuis 1879</p>
            <div class="row text-center story">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                        <h3>EST. 1879</h3>
                        <p>Depuis mai 1879, Happy meal a commncé sa créativité , en 1990 est intégrée au groupe TripAdvisor. Nous opérons et recrutons dans pas moins de 5 pays : Maroc, France, Espagne, Suisse, Belgique.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                        <h3>Traditions Cuisine</h3>
                        <p>Happy Meal est caractérise par presenter à ses clients les plats de la cuisine marocaine qu'est  caractérisée par sa variété de plats d'origine principalement arabe et berbère pour conserver son originalité et ses spécificités culturelles uniques. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                        <h3>Qualité de la Aliments</h3>
                        <p>Happy Meal a connu par La grande qualité de ses  aliments presntes au client car la  satisfication de nos clients reste toujours notre objectif .</p>
                    </div>
                </div>
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->
<!--/#repas-->
    <div id="repas" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Les repas  des Clients</h2>
            <p class="lead main text-center">Allez depechez vous!</p>

                        <div class="row">
                <div class="container">
  <h2>liste des repas demandés</h2>  
  
     
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Menu Principale</th>
        <th>dessert</th>
        <th> Entree </th>
       <th> Boisson </th>
       <th> table </th>

      </tr>
    </thead>
    <tbody>
      <?php 
        require '../model/modele.php';
         $rowRepas = getRepas();
        foreach ($rowRepas as $key => $value) {
                      if($value['affectation'] == 'oui' )  {       
          
          echo "<tr><td>".$value['menu_prix'] ."</td>";
        echo "<td>".$value['dess_prix']."</td>";
        echo "<td>".$value['entree_prix']."</td>";
         echo "<td>".$value['boisson_prix']."</td>";
          echo "<td>".$value['Id_table']."</td>";?>
          <?php  echo "</tr>";  }  }?>
                
     
     
    </tbody>
  </table>
 

            </div>
      
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!--/#repas-->


  <div id="MenuJ" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Les repas  des Clients</h2>
            <p class="lead main text-center">Allez depechez vous!</p>

              <div class="row">
            <div class="container">

  <h2>liste des repas demandés '#OFFRES SPÉCIALES!'</h2>  
   <br> <br> 
     
     <table class="table table-hover">
    <thead>
      <tr>
        <th>Offre</th>
        <th>Numéro de table </th>
      </tr>
    </thead>
    <tbody>
      <?php 
    
         $rowRepasj = getRepas_jour();
        foreach ($rowRepasj as $key => $value) {
          if($value['affectation'] == 'oui' )  {   
        
        echo "<tr><td>".$value['plat'] ."</td>";
        echo "<td>".$value['n_table']."</td></tr>"; }  }?>

     </tbody>
      </table>
          
       </div>
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!--/#food-menu-->



    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Copyright faouji 2018
                    <br/>
                </div>
                <div class="col-sm-6">
                    <div class="social-bar">
                        <a href="#" class="fa fa-instagram tooltipped" title=""></a>
                        <a href="#" class="fa fa-youtube-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-facebook-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-pinterest-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-google-plus-square tooltipped" title=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/jquery.actual.min.js"></script>
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
