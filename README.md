[

Application responsive HappyMeal Restaurant  based on Twitter Bootstrap 3
#](https://github.com/faoujisoka/HappyMeal.git)
 
 
Auteur : [FAOUJI Soukaina ] 

## Description:

Technologies à utiliser : [HTML5, CSS3, javascript (Jquery, bootStrap,…) PHP, SQL],modèles [MVC2],github.

 Cette version emploie une architecture MVC orientée objet.

1. la page d'index(menu principale):  
   
     a. serveur va s'authentifier pour consulter les resrvation des clients : aucune reservation
     b. le client va consulter le menu et aprés va faire un reservation.
     c. le chef  va s'authentifier pour consulter s'il y a une demande.
     d. le serveur va s'authentifier une autre fois et va trouver la reservation su client qui vient d'affecter. 
        et apres va l'affecter à la cuisine 
     e. le chef va s'authentifier une autre fois et va trouver la demande. 
     
      
 2. la page d'index(menu de jour): 
         pour le menu de jour on a troix offres: 
            offre#3: pour les jours de la fin de semaine
            offre#2: pour le vendredi
            offre#1 : pour les autres jours 
      par exemple aujourd'hui le samedi on a l'offre 3
         a. serveur de menu de jour va s'authentifier pour consulter les resrvation des clients : aucune reservation
         b. le client va consulter le menu de jour (offres) et aprés va faire un reservation.
     c. le serveur va s'authentifier une autre fois et va trouver la reservation su client qui vient d'affecter. et apres va l'affecter à la cuisine 
     d. et à la fin le chef va s'authentifier et va trouver la demande. 
