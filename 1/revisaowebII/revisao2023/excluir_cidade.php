<?php
include "conexao.php";
//neste arquivo o regitro clicado é excluído pelo método GET

//recebendo variável via GET
$id = $_GET['id'];

//echo $id; // imprime o id para ver se está chegando
//exit(); // trava a execução do PHP

//criando variável de consulta SQL
$sql = "delete from cidades where id=$id";
//comando que executa a consulta
$sql = $con->query($sql);
?>
<script>
    //alertando usuário
    alert("Registro excluído com sucesso!");    
    //direcionar o usuário para outra página
    location.href = "cidades.php";
</script>


