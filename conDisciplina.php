<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		require_once('conn.php');

		$sql=mysqli_query($conn,"SELECT * FROM tbDisciplinas");

		while($linha=mysqli_fetch_array($sql)) {

			$id=$linha['idDisciplina'];
			$nome=$linha['nomeDisciplina'];
			$carghor=$linha['cargaHoraria'];

			echo"<p>";

			echo "<table border='1'><tr><td>Código da Disciplina: </td><td>$id</td><tr>";
			echo "<tr><td>Nome da Disciplina: </td><td>$nome</td><tr><br><br>";
			echo "<tr><td>Carga Horária: </td><td>$carghor</td><tr><br><br>";
		}
	?>
</body>
</html>