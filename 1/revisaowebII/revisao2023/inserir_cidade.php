<?php
include "conexao.php";
//neste arquivo os dados de formulario_inserir_aluno.php são recebidos e processados

//testar se as informações estão chegando
//var_dump($_POST); // imprimindo dados da global $_POST

//receber cada valor em uma variável
$nome = $_POST['nome'];
$cpf  = $_POST['cpf'];
$matricula = $_POST['matricula'];
$id_curso = $_POST['id_curso'];

//criando variável de consulta SQL
$sql = "insert into alunos(nome,cpf,matricula,id_curso) 
values ('$nome', '$cpf', '$matricula', '$id_curso')";
//comando que executa a consulta
$sql = $con->query($sql);
?>
<script>
    //alertando usuário
    alert("Cadastro realizado com sucesso!");    
    //direcionar o usuário para outra página
    location.href = "lista.php";
</script>


