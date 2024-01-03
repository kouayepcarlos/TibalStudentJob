<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Css/style.css">
    <title>TibalstudentJob</title>
</head>
<body>
    <?php include("./Menus/menu_partenaire.php"); ?> 
    <div>

   
    <div class='compte'>
        <div class='container'>
             <div class="card formul">
                <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom Profil</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Connexion</button>
                    <a href="http://" class='passe'>Mot de passe oublie</a>
                </form>
                
                </div>
            </div>
        </div>
        <div class='compte1'>
            <img src="./Images/login.png" alt="dff" srcset="" width='500'>
        </div>
        
    </div>

    <p  class='inscrit'>Vous n'avez pas de compte partenaire?? <a href="etudiant.php">Inscrivez-Vous</a>  </p>
    <p class='inscrit1'>Bienvenue sur la plateforme Tibal Student Job
Connectez-vous et rejoignez la plus grande communauté des chercheurs d'emplois d'Afrique...</p>    
</div>
    <?php  
    
    include("./Pages/footer.php");
    include("./Pages/bouton.php");
     ?>
    
</body>
</html>