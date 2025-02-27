<?php

include "conexao.php";
//neste arquivo os dados de formularios_inserir_aluno.php são recebidos e processados

// testar se as informações estão chegando
//var_dump($_POST); // imprimir dados da global $_POST

//recer cada valor em uma variavel 
$descricao= $_POST['descricao'];
$carga_horaria= $_POST['carga_horaria'];
$periodo= $_POST['periodo'];
$cursos= $_POST['cursos'];


//crinado variavel de consulta sql
$sql = "insert into disciplinas(descricao, carga_horaria, periodo, cursos) values ('$descricao','$carga_horaria','$periodo','$cursos')";
//comando que executa a consulta
$sql = $con->query($sql);
?>

<script>
   //alertando usuario
   alert ("Cadastro realizado com sucesso!");
   //direcionar o usuario para outra pagina
   location.href = "disciplinas.php";
</script>