<?php

    include "conexao.php";
    //neste arquivo os dados de formulario_editar_aluno.php são recebidos e processados

    //receber cada valor em uma variavel  
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $matricula = $_POST['matricula'];
    $id_curso = $_POST['id_curso'];

    //criando variavel de consulta SQL
    $sql = "update alunos set nome='$nome',cpf='$cpf', matricula='$matricula', id_curso='$id_curso' where id=$id ";
   // echo $sql; // imprimindo a string de consulta
  // exit(); //travando a execução do PHP

    //comando que executa a consulta
    $sql = $con->query($sql);
?>
<script>
    alert("Cadastro editado com sucesso!")
    location.href = "lista.php"
</script>