<?php include ('verificadb.php') ?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<title>Bolão NBA - Login</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="icon" type="image.png" href="imagens/icon.png">

	</head>

	<body id="telalogin">
	
	
		<div class="login">

			<form class="box" method="post" action="login.php">
				<?php include ('erro.php'); ?>
				<h1>Login</h1>
				<input autocomplete="off"placeholder="Login" type="text" name="username">
				<input placeholder="Senha" type="password" name="password">
				<input type="submit" value="Login" name="login_user"> 			
			</form>
				
		</div>

		<a class="linkcadastro" href="cadastro.php">Não possui login? Cadastre-se agora!</a>

	</body>

</html>