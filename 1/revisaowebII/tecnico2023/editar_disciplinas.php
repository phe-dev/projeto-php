<?php

include "conexao.php";
//neste arquivo os dados de formulario_editar_aluno.php são recebidos e processados

//receber cada valor em uma variavel  
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$carga_horaria = $_POST['carga_horaria'];
$periodo = $_POST['periodo'];
$cursos = $_POST['cursos'];

//criando variavel de consulta SQL
$sql = "update disciplinas set descricao='$descricao', carga_horaria='$carga_horaria', periodo='$periodo', cursos='$cursos' where id=$id ";
//comando que executa a consulta
$sql = $con->query($sql);
?>
<script>
alert("Cadastro editado com sucesso!")
location.href = "disciplinas.php"
</script>
