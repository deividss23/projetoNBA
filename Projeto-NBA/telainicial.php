<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true))
{
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  header('location:telainicial.php');
  }
 
$logado = $_SESSION['username'];
?>
        
        <meta charset="utf-8">
        <title>Bolão NBA - Tela Inicial</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="icon" type="image.png" href="imagens/icon.png">

    </head>
  
    <body class="telainicial">
        <?php echo "Bem vindo $logado!"; ?>
        
        <div class="middle">
            
            <div class="menu">
                
                <li class="item" id='profile'>
                    <a href="#profile" class="btn"><i class="far fa-user"></i>Meu Perfil</a>
          
                    <div class="smenu">
                        <a href="">Minhas apostas</a>
                        <a href="">Minhas ligas</a>
                    </div>
                
                </li>

        <!--<li class="item" id="messages">
          <a href="#messages" class="btn"><i class="far fa-envelope"></i>Messages</a>
          <div class="smenu">
            <a href="#">new</a>
            <a href="#">Sent</a>
            <a href="#">Spam</a>
          </div>
        </li>-->

                <li class="item" id="settings">
                    <a href="#settings" class="btn"><i class="fas fa-cog"></i>Configurações</a>
          
                    <div class="smenu">
                        <a href="">Mudar senha</a>
                        <a href="">Alguma outra configuração</a>
                    </div>

                </li>

                <li class="item">
                    <a class="btn" href="index.html"><i class="fas fa-sign-out-alt"></i>Sair</a>
                </li>

            </div>

        </div>

    </body>

</html>