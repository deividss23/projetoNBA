<?php 
include('verifica_login.php');
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Bolão NBA - Tela Inicial</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="icon" type="image.png" href="imagens/icon.png">
    </head>
  
    <body class="telainicial">
        
        <?php  if (isset($_SESSION['username'])) : ?>
        <h1>Bem vindo, <?php echo $_SESSION['username']; echo "!";?> </h1>
        <?php endif ?>

        <br>

        <div class="middle">
            
            <div class="menu">
                
                <li class="item" id='profile'>
                    <a href="#profile" class="btn"><i class="fas fa-user-tie"></i>Meu Perfil</a>
          
                    <div class="smenu">
                        <a href="">Minhas apostas</a>
                        <a href="">Minhas ligas</a>
                    </div>
                
                </li>


                <li class="item" id="messages">
                    <a href="#messages" class="btn"><i class="fas fa-gamepad"></i>Jogos</a>
                  
                    <div class="smenu">
                        <a href="cadastrojogos.php"><i class="fas fa-plus"></i> <?php echo "  "; ?>Cadastrar jogos</a>
                        <a href="#">Gerenciar usuários</a>
                    </div>

                </li>

                <li class="item" id="settings">
                    <a href="#settings" class="btn"><i class="fas fa-cog"></i>Configurações</a>
          
                    <div class="smenu">
                        <a href="">Mudar senha</a>
                        <a href="">Alguma outra configuração</a>
                    </div>

                </li>

                <li class="item">
                    <a class="btn" href="logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
                </li>

            </div>

        </div>

    </body>

</html>