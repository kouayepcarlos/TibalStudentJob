<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>TiablStudentJob</title>
</head>
<body>
    <?php 
        include("./Menus/menu_consulter.php");
        include("./Pages/slide2.php");
        
       
    ?>


<div class='offre'>
    <div>
           <div class="card cad">
            <div class="card-header">
                Nos offres par catégories (96)
            </div>
            <div class="card-body carbody">
            <ul>
                <li> <a href="offre.php?id=Sécurité">Sécurité </a></li>   
                <li> <a href="offre.php?id=Formation">Formation </a> </li>
                <li> <a href="offre.php?id=Genie Civil">Génie Civil </a> </li>
                <li> <a href="offre.php?id=Fonction Publique"> Fonction Publique </a></li>  
                <li> <a href="offre.php?id=Gestion Management">Gestion Management </a></li>
                <li> <a href="offre.php?id=Agriculture / Elevage">Agriculture / Élevage  </a></li>
                <li> <a href="offre.php?id=Esthétique  / Coiffure">Esthétique  / Coiffure </a></li>
                <li><a href="offre.php?id=Santé / Environnement">Santé / Environnement </a></li>
                <li> <a href="offre.php?id=Transport / Logistique">Transport / Logistique</a></li>
                <li> <a href="offre.php?id=Commercial / Marketing ">Commercial / Marketing </a></li>
                <li> <a href="offre.php?id=Electricité / Electronique">Electricité / Electronique </a></li>
                <li> <a href="offre.php?id=Communication / Publicité">Communication / Publicité </a></li>
                <li> <a href="offre.php?id=Sécrétariat / Assistance">Sécrétariat / Assistance </a></li>
                <li> <a href="offre.php?id=Traduction / Interpretation">Traduction / Interprétation </a></li>
                <li> <a href="offre.php?id=Mécanique / Electromécanique">Mécanique / Electromécanique </a></li>
                <li> <a href="offre.php?id=Menagere / Service domestique">Menagere / Service domestique </a></li>
                <li> <a href="offre.php?id=Informatique / Internet / Télécom">Informatique / Internet / Télécom </a></li>
                <li> <a href="offre.php?id=Comptabilité / Finance / Assurance">Comptabilité / Finance / Assurance </a></li>
                <li> <a href="offre.php?id=Hotellerie / Restauration / Tourisme "> Hôtellerie / Restauration / Tourisme </a></li>
                <li> <a href="offre.php?id=Autres ">Autres </a></li>  
            </ul>
            </div>
            
          </div>

          <a href="https://api.whatsapp.com/send/?phone=237653286910&text=Bonjour! Je viens de visiter votre site. J'aimerais me connecter sur Tiblastudentjob">
          <div class ='card cardwhat cad'>
            <div class='card-body carbody'>
                <img src="./Images/what.png" alt="" width='80'>
                <p>Restez informer !! et rejoingner notre groupe Whatsapp</p>
          </div>
          </div>
          </a>


          <a href="https://api.whatsapp.com/send/?phone=237653286910&text=Bonjour! Je viens de visiter votre site. J'aimerais me connecter sur Tiblastudentjob">
          <div class ='card cardtele cad'>
            <div class='card-body carbody'>
                <img src="./Images/tele.png" alt="" width='80'>
                <p>Restez informer !! et rejoingner notre groupe Telegram</p>
          </div>
          </div>
          </a>

          
         
    </div>
    

    <div>

    </div>
</div>


<?php

        include("./Pages/footer.php");
        include("./Pages/bouton.php");

?>
</body>
</html>