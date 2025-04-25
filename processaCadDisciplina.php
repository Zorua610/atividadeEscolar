<?php
    require_once("conn.php");
    $disciplina = $_POST['txtDisciplina'];
    $cargHor = $_POST['txtCargHor'];

    $sqlDisciplina = "INSERT INTO tbprofessor(nomeProfessor) VALUES ('$professor')";
    $resultadoProfessor = mysqli_query($conn, $sqlProfessor);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=conProfessor.php'>
            <script type=\"text/javascript\">
                alert(\"Professor cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProfessor.php'>
        <script type=\"text/javascript\">
                alert(\"O Professor não foi cadastrado com Sucesso.\");
        </script>
        ";
    }
?>