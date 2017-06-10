

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
    <title>HappyMeal</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/main.css">

    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    
    <!-- js -->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                <img src="img/icon.png" alt="">
            </a></div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#reservation">Reservation</a></li>
                <li><a href="#chefs">NOTRE CHEFS</a></li>

                
                <li><a href="#food-menu">LE MENU</a></li>
                <li><a href="#special-offser">OFFRES SPÉCIALES </a></li>
                <li><a href="#login">Login</a></li>

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
            <div class="subtitle"><h4>Thème du restaurant génial   <?php $day=date("l"); ?></h4></div>
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


    




    <div id="food-menu" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Le menu </h2>
            <p class="lead main text-center">IL N'Y A PAS DE SINCERER AMOUR QUE L'AMOUR  DE ALIMENTS!</p>

                        <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="img/menu/salade.jpg" alt="Entree"></div>
                    <div class="menu-titles"><h1 class="">Entree</h1></div>
                    <div class="menu-items ">
                        <ul>
                          <?php 
                             foreach ($rowEntree as $key => $value) {
                                 echo '<li><a>'.$value['nom'].'&nbsp;:&nbsp;'.$value['prix'] .'<br/></a></li>'; 
                                
                            }

                        ?>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="img/menu/plat.jpg" alt="plat" width="375px" height="200px"></div>
                    <div class="menu-titles"><h1 class="">plat principale</h1></div>
                    <div class="menu-items ">
                        <ul>
                       <?php 
                             foreach ($rowMenup as $key1 => $value1) {
                                 echo '<li><a>'.$value1['nom'].'&nbsp;:&nbsp;'.$value1['prix'] .'<br/></a></li>';

                             }

                        ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="img/menu/thé.jpg" alt="boisson" height="200px"></div>
                    <div class="menu-titles"><h1 class="">Boisson</h1></div>
                    <div class="menu-items ">
                        <ul>
                              <?php 
                             foreach ($rowBoisson as $key2 => $value2) {
                                 echo '<li><a>'.$value2['nom'].'&nbsp;:&nbsp;'.$value2['prix'] .'<br/></a></li>';

                             }

                        ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="img/menu/des.jpg" alt="Deserts" height="200px"></div>
                    <div class="menu-titles"><h1 class="">Desserts</h1></div>
                    <div class="menu-items ">
                        <ul>
                                <?php 
                             foreach ($rowDessert as $key3 => $value3) {
                                 echo '<li><a>'.$value3['nom'].'&nbsp;:&nbsp;'.$value3['prix'] .'<br/></a></li>';

                             }

                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!--/#food-menu-->



                       
                       
   <?php 
   if(($day =='Saturday') || ($day =='Sunday')){
                        ?>

    <div id="special-offser" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">OFFRES SPÉCIALES 'uniquement le weekend'</h2>
            <p class="lead main text-center">IL N'Y A PAS DE SINCERER AMOUR QUE L'AMOUR DE ALIMENTS!
              <CENTER><a class="btn btn-danger" href="#commande3" >Order now</a></CENTER>

            </p>
            <br><br>
            <div class="row">
                <?php 
                             foreach ($rowMenujour as $key4 => $value4) {
                                if ($key4 == 4 || $key4 == 5 || $key4 == 6 || $key4 == 7  ){
                        ?>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                       
                       <img class="img-responsive img-thumbnail" src=<?php echo $value4[2]."<br>";?>
                        
                        <div class="pricing-item-details">
                            
                            <h3><?php echo $value4[1]."<br>";?></h3>
                            <p style="color : red ; font-size :35px; " >#OFFRE 40%</p>

                             <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <?php  if ($value4[3] <= 15) { ?>
                        <span class="hot-tag br-lblue"><?php echo $value4[3]."<br>";?></span>
                     <?php }else{?>
                      <span class="hot-tag br-green"><?php echo $value4[3]."<br>";?></span>
                     <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
               
                
                 <?php  }   }   ?>
            </div>

        </div>
        <!-- /.container --> 
    </div><!-- /#special-offser -->


 <?php  } elseif ($day =='Friday') {  ?>
    <div id="special-offser" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">OFFRES SPÉCIALES 'uniquement le vendredi'</h2>
            <p class="lead main text-center"> IL N'Y A PAS DE SINCERER AMOUR QUE L'AMOUR DE ALIMENTS!
             <CENTER><a class="btn btn-danger" href="#commande2" >Order now</a></CENTER>

            </p>
            <br><br>
            <div class="row">
                <?php 
                             foreach ($rowMenujour as $key4 => $value4) {
                                if ($key4 == 8 || $key4 == 9 || $key4 == 10 || $key4 == 11  ){
                        ?>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                       
                       <img class="img-responsive img-thumbnail" src=<?php echo $value4[2]."<br>";?>
                        
                        <div class="pricing-item-details">
                            
                            <h3><?php echo $value4[1]."<br>";?></h3>
                         <p style="color : red ; font-size :35px; " >#OFFRE 50%</p>

                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <?php  if ($value4[3] <= 15) { ?>
                        <span class="hot-tag br-lblue"><?php echo $value4[3]."<br>";?></span>
                     <?php }else{?>
                      <span class="hot-tag br-green"><?php echo $value4[3]."<br>";?></span>
                     <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
               
                
                 <?php  }  } ?>
            </div>
                 
        </div>
        <!-- /.container --> 
    </div><!-- /#special-offser -->

 <?php }else{ ?>
<div id="special-offser" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">OFFRES SPÉCIALES</h2>
            <p class="lead main text-center">IL N'Y A PAS DE SINCERER AMOUR QUE L'AMOUR DE ALIMENTS!
            <CENTER><a class="btn btn-danger" href="#commande" >Order now</a></CENTER>
            </p>
         <br><br>

            <div class="row">
                <?php 
                             foreach ($rowMenujour as $key4 => $value4) {
                               if ($key4 == 0 || $key4 == 1 || $key4 == 2 || $key4 == 3  ) {
                        ?>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                       
                       <img class="img-responsive img-thumbnail" src=<?php echo $value4[2]."<br>";?>
                        
                        <div class="pricing-item-details">
                            
                            <h3><?php echo $value4[1]."<br>";?></h3>
                            
                            <p style="color : red ; font-size :35px; " >#OFFRE 30%</p>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                         <?php  if ($value4[3] <= 15) { ?>
                        <span class="hot-tag br-lblue"><?php echo $value4[3]."<br>";?></span>
                     <?php }else{?>
                      <span class="hot-tag br-green"><?php echo $value4[3]."<br>";?></span>
                     <?php }?>
                           
                        <div class="clearfix"></div>
                    </div>
                </div>
               
                 <?php  }   }
                        ?>
            </div>
                 
        </div>
        <!-- /.container --> 
    </div><!-- /#special-offser -->
<?php  }  ?>

  <div id="commande" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">OFFRES SPÉCIALES</h2>
            <p class="lead main text-center">RÉSERVEZ VOTRE TABLE &amp; PROFITEZ</p>
            <div class="row">
                <div class="col-md-6">
              
                    <form class="form form-table" method="post" name="" action= "./index.php">
                        <br><br>
                        <div class="form-group">
                            <h4>Remplissez le formulaire pour la réservation de table (tous les champs requis)</h4>
                        </div>
                       <br><br> 
                         <?php 
                             foreach ($rowMenujour1 as $key4 => $value4) {
                                
                        ?>
                        <div class="row">
                          <div class="col-md-12 col-xs-4 form-group">
                      <input type="text"  class="form-control datepicker hasDatepicker hint"placeholder="plats"
                       value="<?php echo $value4[1];?>"  >

                          </div> 
                        
                        </div>
                        
                              <br> <?php }?>
                              <div class="row">
                              <?php 
                             foreach ( $rowsumprix1  as $key4 => $value4) {
                        ?>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">TOTAL</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="total" name="total" placeholder="total" required="" value="<?php echo $value4."&nbsp;"."DH";?>" >
                          </div>
                            <?php }?>
                              <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">numéro de table</label>
                      <select class="form-control hint"  name="table" required="">
                        <option> 1</option> <option> 2</option><option> 3</option>
                        <option>4 </option> <option> 5</option><option> 6</option>
                        <option> 7</option> <option> 8</option><option> 9</option>
                         <option>10 </option>


                         
                         </select>  </div> </div>
                        <div class="row">
                          <div class="">
                       <center><button type="submit" class="btn btn-danger btn-lg" name ="reserve2">Reserve!</button></center>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                     <?php echo date(DATE_RFC2822); ?>
                    <h4>Breakfast</h4>
                    <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4>Dinner</h4>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                </div><!-- col-md-6 -->

            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #commande -->

 <div id="commande2" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">OFFRES SPÉCIALES</h2>
            <p class="lead main text-center">RÉSERVEZ VOTRE TABLE &amp; PROFITEZ</p>
            <div class="row">
                <div class="col-md-6">
              
                    <form class="form form-table" method="post" name="" action="./index.php">
                     
                        <div class="form-group">
                            <h4>Remplissez le formulaire pour la réservation de table (tous les champs requis)</h4>
                        </div>
                     
                         <?php 
                             foreach ($rowMenujour2 as $key4 => $value4) {
                                
                        ?>
                        <div class="row">
                          <div class="col-md-12 col-xs-4 form-group">
                      <input type="text"  class="form-control datepicker hasDatepicker hint" name="dessert"
                       value="<?php echo $value4[1];?>"  >

                          </div> 
                        
                        </div>
                        
                              <br> <?php }?>
                              <div class="row">
                                     <?php 
                             foreach ( $rowsumprix2  as $key4 => $value4) {
                        ?>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">TOTAL</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="total" name="total" name="total" required="" value="<?php echo $value4."&nbsp;"."DH";?>">
                          </div>
                          <?php }?>
                              <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">numéro de table</label>
                      <select class="form-control hint"  name="table" required="">
                        <option> 1</option> <option> 2</option><option> 3</option>
                        <option>4 </option> <option> 5</option><option> 6</option>
                        <option> 7</option> <option> 8</option><option> 9</option>
                         <option>10 </option>


                         
                         </select>  </div> </div>
                        <div class="row">
                          <div class="">
                       <center><button type="submit" name ="reserve"class="btn btn-danger btn-lg">Reserve!</button></center>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                     <?php echo date(DATE_RFC2822); ?>
                    <h4>Breakfast</h4>
                    <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4>Dinner</h4>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                </div><!-- col-md-6 -->

            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #commande2 -->

     <div id="commande3" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">OFFRES SPÉCIALES 'BONNE fIN DE SEMAINE!'</h2>
            <p class="lead main text-center">RÉSERVEZ VOTRE TABLE &amp; PROFITEZ </p>
            <div class="row">
                <div class="col-md-6">
              
                    <form class="form form-table" method="post" name="" action= "./index.php">
                        <br><br>
                        <div class="form-group">
                            <h4>Remplissez le formulaire pour la réservation de table (tous les champs requis)</h4>
                        </div>
                       <br><br> 
                         <?php 
                             foreach ($rowMenujour3 as $key4 => $value4) {
                                
                        ?>
                        <div class="row">
                       
                          <div class="col-md-12 col-xs-4 form-group">
                      <input type="text"  class="form-control datepicker hasDatepicker hint"placeholder="plats"
                       value="<?php echo $value4[1];?>"  >

                          </div> 
                        
                        </div>
                        
                              <br> <?php }?>
                              <div class="row">
                              <?php 
                             foreach ( $rowsumprix3  as $key4 => $value4) {
                        ?>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">TOTAL</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="total" name="total" placeholder="total" required="" value="<?php echo $value4."&nbsp;"."DH";?>" >
                          </div>
                           <?php }?>
                              <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">numéro de table</label>
                      <select class="form-control hint"  name="table" required="">
                        <option> 1</option> <option> 2</option><option> 3</option>
                        <option>4 </option> <option> 5</option><option> 6</option>
                        <option> 7</option> <option> 8</option><option> 9</option>
                         <option>10 </option>


                         
                         </select>  </div> </div>
                        <div class="row">
                          <div class="">
                       <center><button type="submit" class="btn btn-danger btn-lg" name ="reserve3">Reserve!</button></center>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                     <?php echo date(DATE_RFC2822); ?>
                    <h4>Breakfast</h4>
                    <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4>Dinner</h4>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                </div><!-- col-md-6 -->

            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #commande3-->

<div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Reservation</h2>
            <p class="lead main text-center">RÉSERVEZ VOTRE TABLE &amp; PROFITEZ</p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" name="" action="./index.php">
                        <div class="form-group">
                            <h4>Remplissez le formulaire pour la réservation de table (tous les champs requis)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">nom</label>
                             <h4>Numéro de table: </h4>
                             <select name="table" class="form-control" >
                             <option > 1 </option>
                             <option > 2 </option>
                              <option > 3 </option>
                              <option > 4 </option>
                              <option > 5 </option>
                              <option > 6 </option>
                              <option > 7 </option>
                              <option > 8 </option>
                              <option > 9 </option>
                              <option > 10 </option>
                             </select>
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">entree</label>
                            <h4>Entree: </h4>
                            <select name="entree" class="form-control" >
                             <?php 
                             foreach ($rowEntree as $key => $value) {
                                 echo '<option>'.$value['nom'].'&nbsp;:&nbsp;'.$value['prix'] .'</option>'; 
                                
                            }

                        ?>

                           
                          
                             </select>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">Plat principale</label>
                            <h4>plat principale: </h4>
                             <select name="plat" class="form-control" >
                             <?php 
                             foreach ($rowMenup as $key1 => $value1) {
                                 echo '<option >'.$value1['nom'].'&nbsp;:&nbsp;'.$value1['prix'] .'</option>'; 
                                
                            }

                        ?>

                           
                          
                             </select>

                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">Boisson</label>
                            <h4>Boisson: </h4>
                            <select name="boisson" class="form-control" >
                             <?php 
                             foreach ($rowBoisson as $key2 => $value2) {
                                 echo '<option >'.$value2['nom'].'&nbsp;:&nbsp;'.$value2['prix'] .'</option>'; 
                                
                            }

                        ?>

                           
                          
                             </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">Desserts</label>
                            <h4>Desserts: </h4>
                              <select  class="form-control" name="dessert">
                             <?php 
                             foreach ($rowDessert as $key3 => $value3) {
                                 echo '<option>'.$value3['nom'].'&nbsp;:&nbsp;'.$value3['prix'] .'</option>'; 
                                
                            }

                        ?>

                           
                          
                             </select>
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">Total</label>
                            
                          </div>
                        </div>
                       
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                           
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg" name="reserver">Reserve!</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                     <?php echo date(DATE_RFC2822); ?>
                    <h4>Breakfast</h4>
                    <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4>Dinner</h4>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                    <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                    <p>4120 Lenox Avenue, casablanca, NY, 10035 76 Saint Nicholas Avenue</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="soukaina:soukaina05.faouji@gmail.com">soukaina05.faouji@gmail.com</a></p>
                    <p>Phone: +212600000000</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #reservation -->

   


<div id="login" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Login</h2>
            <p class="lead main text-center"></p>
            <div class="row">
                <div class="col-md-6">
                 <h3> Serveur : </h3>
                    <form class="form form-table" method="post" name="" action="./controller/dest.php">
                        <div class="form-group">
                            <h4></h4>
                        </div>
                        <div class=".col-xs-6 .col-sm-3 ">
                          <div class="menu-images "><img src="img/server.jpg" alt="server" height="300px"></div>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 form-group">
                         </div>
                        
                          </div></div>
                          <div class="row">
                           <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">login</label>
                            <input class="form-control hint" type="login" id="email1" name="login" placeholder="login" required="" >
                          </div> 
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">password</label>
                            <input class="form-control hint" type="password" id="first_name1" name="password" placeholder="password" required="">
                          </div>
                           </div>
                         <div class="row">
                        <div class="col-md-4"></div>
                            

                          <div class="col-md-4">
                            <button type="submit" class="btn btn-danger btn-lg" name="op" value="login">connexion</button>
                          </div>
                         </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                   <h3> chef cuisinier : </h3>

                   <form class="form form-table" method="post" name="" action="./controller/destChef.php">
                        <div class="form-group">
                            <h4></h4>
                        </div>
                        <div class=".col-xs-6 .col-sm-3 ">
                          <div class="menu-images "><img src="img/chef.jpg" alt="server" height="300px"></div>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 form-group">
                         </div>
                        
                          </div></div>
                          <div class="row">
                           <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">login</label>
                            <input class="form-control hint" type="login" id="email1" name="login" placeholder="login" required="" >
                          </div> 
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">password</label>
                            <input class="form-control hint" type="password" id="first_name1" name="password" placeholder="password" required="">
                          </div>
                           </div>
                         <div class="row">
                        <div class="col-md-4"></div>
                            

                          <div class="col-md-4">
                            <button type="submit" class="btn btn-danger btn-lg" name="op" value="login">connexion</button>
                          </div>
                         </div>
                      </form>
                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #login-->

    <div id="chefs" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">NOTRE CHEFS</h2>
            <p class="lead main text-center">IL N'Y A PAS DE SINCERER AMOUR QUE L'AMOUR  DE ALIMENTS!</p>
            
            <div class="row text-center chefs">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/1.jpg">
                        </div>
                         <h3> Chef Ahmed</h3>
                        <p>est un grand chef cuisinier marocain parmi les plus célèbres du monde, un des maîtres de la cuisine traditionnelle et de la grande cuisine.</p>
                   
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/3.jpg">
                        </div>
                        <h3>Chef sara</h3>
                        <p>est une grande chef cuisinier marocaine. a obtenu sa troisième étoile au Guide Michelin en 2010. Il est également classé « Relais & Châteaux » depuis 2005. Il a été classé à plusieurs reprises dans la liste des 10 meilleurs restaurants au monde. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/2.jpg">
                        </div>
                          <h3>Chef Ali</h3>
                        <p>est un célèbre chef cuisinier marocain, restaurateur de cuisine française, et auteur de livres de cuisine. Il est reconnu par le monde de l'art culinaire, comme un des meilleurs cuisiniers du monde, avec entre autres 7 étoiles au Guide Michelin.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container --> 
    </div><!-- /#chefs -->



    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Copyright faoujifrix
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

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.actual.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
