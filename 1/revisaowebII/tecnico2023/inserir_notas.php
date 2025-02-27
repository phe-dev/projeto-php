<?php

include "conexao.php";
//neste arquivo os dados de formularios_inserir_aluno.php são recebidos e processados

// testar se as informações estão chegando
//var_dump($_POST); // imprimir dados da global $_POST

//recer cada valor em uma variavel 
$alunos= $_POST['alunos'];
$nota1= $_POST['nota1'];
$nota2= $_POST['nota2'];
$nota3= $_POST['nota3'];
$nota4= $_POST['nota4'];


//crinado variavel de consulta sql
$sql = "insert into notas (alunos, nota1, nota2, nota3, nota4) values ('$alunos','$nota1','$nota2','$nota3', '$nota4')";
//comando que executa a consulta
$sql = $con->query($sql);
?>

<script>
   //alertando usuario
   alert ("Cadastro realizado com sucesso!");
   //direcionar o usuario para outra pagina
   location.href = "lista_notas.php";
</script>