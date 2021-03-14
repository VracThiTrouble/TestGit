<?php
  require "connexion.php";
  if(!empty($_POST['id']) and !empty($_POST['mdp'])){
    Connexion($_POST['id'], $_POST['mdp']);
  }
?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="Style.css">


    <title>Accueil</title>

  </head>

  <body>
    <!--
    <div class="container"> -->
        <div  class="d-flex align-items-center justify-content-center"
              style="height: 350px;"
              >
            <form action="Accueil.php" method="post">
                <div class="form-group" id="login">  
                  
                  <h2 class="title1">Annu'R</h2>
                    
                    <input type="text" class="form-control" placeholder="Identifiant" id="id" name="id">
                    <input type="password" class="form-control" placeholder="Mot de passe" id="mdp" name="mdp">
                    
                    <div class="d-flex align-items-center justify-content-center" 
                      style="height: 75px;">
                      <button type="submit" class="btn btn-primary">Connexion</button>
                    </div>
                    

                </div>

                
            </form>
        </div> 
    <!--       
    </div> --> 



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>

