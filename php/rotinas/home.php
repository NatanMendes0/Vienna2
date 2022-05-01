<?php
    //revive a sessao - utiliza a sessão criada para o usuario logado
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Vienna - Home</title>
  </head>
  <body>
    <header style="display: flex; flex-direction: row; justify-content: space-between; margin: 1%;">
        <?php
            //perguntar pro sor o que fazer aqui
            if ( isset ($_SESSION) ) { 
                echo "<h2> Bem-vindo(a), " . $_SESSION['nome'] . "! </h2>";
            } else {
                echo "<h2> Bem-vindo(a), Faça seu login! </h2>"; //queremos que apareça isso se o usuario não tiver feito login
            }
        ?>
        <?php 
            if ( isset ($_SESSION) ) {
                echo 
                "<div>
                    <a href='login.php'><button class='btn btn-primary'>Login</button></a>
                    <a href='logout.php'><button class='btn btn-secondary'>Logout</button></a>
                </div>";
            } else {
                echo
                "<div>
                    <a href='registro.php'><button class='btn btn-primary'>Registro</button></a>
                    <a href='login.php'><button class='btn btn-secondary'>Login</button></a>
                    
                </div>";
            }
        ?>
    </header>
    <hr>
    <div class="container">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pulvinar, massa et suscipit ultrices, sapien velit accumsan massa, ac cursus turpis arcu nec justo. Phasellus id efficitur arcu, quis pretium tellus. Donec pulvinar tincidunt ligula eget maximus. Morbi volutpat varius luctus. Ut augue enim, mattis non odio ut, iaculis tristique odio. Aliquam pharetra iaculis vehicula. Aliquam felis erat, pharetra quis hendrerit ac, convallis eu magna. Etiam est enim, tincidunt ut tempus vitae, consectetur vel sapien.
      </p>
    </div>
  </body>
</html>