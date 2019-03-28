<?php include ('verificadb.php') ?>
<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<title>Bolão NBA - Cadastro</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="icon" type="image.png" href="imagens/icon.png">

	</head>

	<body id="telalogin">
	
		<div class="login">

			<form name="users" action="cadastro.php" method="post" class="box">
				<?php include ('erro.php'); ?>
				<h1>Cadastro</h1>
				<input autocomplete="off"placeholder="Login" type="text" name="username" value="<?php echo $username; ?>">
				<input autocomplete="off"placeholder="Email" type="text" name="email" value="<?php echo $email; ?>">
				<input placeholder="Senha" type="password" name="password_1">
				<input placeholder="Coloque novamente sua senha" type="password" name="password_2">
				<input type="submit" value="Cadastrar" name="reg_user"> 			
			</form>
				
		</div>

	</body>

</html>