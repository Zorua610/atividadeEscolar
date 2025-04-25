<?php
    require_once("conn.php");
    $ra = $_POST['selectAlunos'];
    $idprof = $_POST['selectProf'];
    $iddisc = $_POST['selectDisc'];
    $nota = $_POST['txtNota'];
    $faltas = $_POST['txtFalta'];

    //no "insert into", há a necessidade dos nomes serem exatamente iguais ao que está cadastrado no banco. O values, porém, é o nome das variáveis acima.
    $sqlNotas = "INSERT INTO tbnotas(ra, idProfessor, idDisciplina, nota, faltas) VALUES ('$ra', '$idprof', '$iddisc', '$nota', '$faltas')";
    $resultadoNotas = mysqli_query($conn, $sqlNotas);
 
    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Nota cadastrada com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadNotas.php'>
        <script type=\"text/javascript\">
                alert(\"A nota não foi cadastrado com Sucesso.\");
        </script>
        ";
    }
?>