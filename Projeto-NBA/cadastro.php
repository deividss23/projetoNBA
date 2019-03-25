<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<title>Bolão NBA - Login</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/buttons.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="icon" type="image.png" href="imagens/icon.png">

	</head>

	<body id="telalogin">
	
		<div class="login">

			<form name="users" action="inserir_cadastro.php" method="POST" class="box">
				<h1>Cadastro</h1>
				<input autocomplete="off"placeholder="Login" type="text" name="login">
				<input autocomplete="off"placeholder="Email" type="text" name="email">
				<input placeholder="Senha" type="password" name="senha">
				<input placeholder="Coloque novamente sua senha" type="password" name="senha1">
				<input type="submit" value="Cadastrar"> 			
			</form>
				
		</div>

	</body>

</html>