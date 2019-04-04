<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
        <title>Bolão NBA - Cadastrar Jogos</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="icon" type="image.png" href="imagens/icon.png">

       	<script>
       function mudaimagem(item) {
               var img = document.getElementById('imagens');
               img.innerHTML = '<img src="' + item + '">';
       }

       function mudaimagem2(item) {
               var img = document.getElementById('imagens2');
               img.innerHTML = '<img src="' + item + '">';
       }
		</script>	


	</head>

	<body>
		
		<div class="cadastroprincipal">
			<div id="imagens">
			</div>
			
			<div id="imagens2">
			</div>
			
			<div id="escolha">
				<form id="time1">
				Time 1
				<select onchange="mudaimagem(this.value);">
					<option> Selecione</option>
					<option value="imagens/boston.png"> Minnesota Timberwolves</option>
					<option value="imagens/cleveland.png"> Minnesota Timberwolves</option>

				</select>
				</form>
			
				<form id="time2">
				<select onchange="mudaimagem2(this.value);">
					<option> Selecione</option>
					<option value="imagens/boston.png"> Minnesota Timberwolves</option>

				</select>
				Time 2

				</form>
			</div>


		</div>

	</body>
</html>