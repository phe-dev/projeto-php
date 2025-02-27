<?php

include "conexao.php";
//neste arquivo os dados de formularios_inserir_aluno.php são recebidos e processados

// testar se as informações estão chegando
//var_dump($_POST); // imprimir dados da global $_POST

//recer cada valor em uma variavel 
$descricao= $_POST['descricao'];
$cordenador= $_POST['cordenador'];
$vagas= $_POST['vagas'];

//crinado variavel de consulta sql
$sql = "insert into cursos(descricao, cordenador, vagas) values ('$descricao','$cordenador','$vagas')";
//comando que executa a consulta
$sql = $con->query($sql);
?>

<script>
   //alertando usuario
   alert ("Cadastro realizado com sucesso!");
   //direcionar o usuario para outra pagina
   location.href = "lista_cursos.php";
</script>