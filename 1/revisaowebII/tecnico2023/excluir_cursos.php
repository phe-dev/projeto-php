<?php

include "conexao.php";
// neste arquivo o registro duplicado é excluido pelo metodo GET

//recebendo variavel via GET
$id = $_GET['id'];

//echo $id; //imprime o id para ver se esta chegando

//exit(); //trava a execução do PHP
//crinado variavel de consulta sql
$sql = "delete from cursos where id=$id";
//comando que executa a consulta
$sql = $con->query($sql);
?>

<script>
   //alertando usuario
   alert ("Registro excluido com sucesso!");
   //direcionar o usuario para outra pagina
   location.href = "lista_cursos.php";
</script>