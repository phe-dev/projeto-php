<?php

    include "conexao_paises.php";
    //testar
    //var_dump($_POST);  
    
    $nome_regiao = $_POST['nome_regiao'];

    $sql = "insert into regioes(nome_regiao) values ('$nome_regiao')";

    $sql = $con->query($sql);
    
?>
<script>
    alert('cadastro realizado com sucesso!')
    location.href = "lista_regioes.php"
</script>