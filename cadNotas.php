<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro das Notas</title>
</head>
<body>

	<form method="POST" action="processaCadNotas.php">
		<label>RA do aluno: </label>
		<input type="text" name="txtRa" id="txtRa"><br><br>

		<label>Professor: </label>
		<input type="text" name="txtProf" id="txtProf"><br><br>

		<label>Disciplinas: </label>
		<input type="text" name="txtDisc" id="txtDisc"><br><br>

		<label>Notas: </label>
		<input type="text" name="txtNota" id="txtNot"><br><br>

		<label>Faltas: </label>
		<input type="text" name="txtFalta" id="txtFalt"><br><br>

		<input type="submit" value="Cadastar">
	</form>

</body>
</html>