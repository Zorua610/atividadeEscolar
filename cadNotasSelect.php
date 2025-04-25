<?php
	require_once("conn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro das Notas</title>
</head>
<body>

	<form method="POST" action="processaCadNotas.php">
		
		<select name="selectAlunos">
            <option>Selecione um aluno</option>
            <?php
                $sqlAlunos = "SELECT * FROM tbaluno";
                $resultadoAlunos = mysqli_query($conn, $sqlAlunos);
                while($rowAlunos = mysqli_fetch_assoc($resultadoAlunos)){
            ?>
            <option value="<?php echo $rowAlunos['ra']; ?>"><?php echo $rowAlunos['nomeAluno']; ?> <?php
                }
            ?>
        </select><br><br>

        <select name="selectProf">
            <option>Selecione um Professor</option>
            <?php
                $sqlProfessor = "SELECT * FROM tbprofessor";
                $resultadoProfessor = mysqli_query($conn, $sqlProfessor);
                while($rowProfessor = mysqli_fetch_assoc($resultadoProfessor)){
                    ?>
            <option value="<?php echo $rowProfessor['idProfessor']; ?>"><?php echo $rowProfessor['nomeProfessor']; ?> <?php
                }
                ?>

        </select><br><br>

            <select name="selectDisc">
            <option>Selecione uma Disciplina</option>
            <?php

                $sqlDisciplina = "SELECT * FROM tbdisciplinas";
                $resultadoDisciplina = mysqli_query($conn, $sqlDisciplina);
                while($rowDisciplina = mysqli_fetch_assoc($resultadoDisciplina)){
                    ?>
            <option value="<?php echo $rowDisciplina['idDisciplina']; ?>"><?php echo $rowDisciplina['nomeDisciplina']; ?> <?php
                }
          	    ?>



        </select><br><br>


        </select><br><br>

		<label>Notas: </label>
		<input type="text" name="txtNota" id="txtNot"><br><br>

		<label>Faltas: </label>
		<input type="text" name="txtFalta" id="txtFalt"><br><br>

		<input type="submit" value="Cadastar">
	</form>

</body>
</html>

