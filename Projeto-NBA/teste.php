<!DOCTYPE html>
<html>
<head>
	<title> Teste </title>
</head>
<body>
<?php
$i = "";
$db = mysqli_connect('localhost', 'root', '', 'projetonba');
$query = "SELECT nome FROM times WHERE id ='2'";
$name = mysqli_query($db, $query);
$result = mysqli_fetch_assoc($name);


echo "$result";
?>
	<select>
	<?php
		
		for ($i=1; $i <= 30 ; $i++) 
		{
			
			$name = mysql_query($db, $query);
			$result = mysqli_fetch_array($name);

			echo "
				<option> $i $result </option>
					"; 
			# code...

			echo "$i";
		}


	?>
	</select>

</body>
</html>