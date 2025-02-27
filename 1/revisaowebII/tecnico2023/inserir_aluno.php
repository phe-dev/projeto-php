<?php

include "conexao.php";
//neste arquivo os dados de formularios_inserir_aluno.php são recebidos e processados

// testar se as informações estão chegando
//var_dump($_POST); // imprimir dados da global $_POST

//recer cada valor em uma variavel 
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$matricula= $_POST['matricula'];
$id_curso= $_POST['id_curso'];


//crinado variavel de consulta sql
$sql = "insert into alunos(nome, cpf, matricula, id_curso) values ('$nome','$cpf','$matricula','$id_curso')";
//comando que executa a consulta
$sql = $con->query($sql);
?>

<script>
   //alertando usuario
   alert ("cadastro realizado com sucesso!");
   //direcionar o usuario para outra pagina
   location.href = "lista.php";
</script>