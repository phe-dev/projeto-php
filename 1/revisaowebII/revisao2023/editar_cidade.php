<?php
include "conexao.php";
//neste arquivo os dados de formulario_alterar_aluno.php são recebidos e processados

//receber cada valor em uma variável
$id = $_POST['id'];
$nome = $_POST['nome'];
$id_estado = $_POST['id_estado'];

//criando variável de consulta SQL
$sql = " update cidades set nome='$nome',
id_curso='$id_estado' where id=$estado";
//echo $sql; // imprimindo a string de consulta
//exit(); // travando a execução do PHP
//comando que executa a consulta
$sql = $con->query($sql);
?>
<script>
    //alertando usuário
    alert("Cadastro atualizado com sucesso!");
    //direcionar o usuário para outra página
    location.href = "lista.php";
</script>