<?php

    include "conexao_paises.php";
    //testar
    //var_dump($_POST);  

    $nome_regiao = $_POST['nome_regiao'];
    

    $sql = "update regioes set nome_regiao='$nome_regiao'  where id=$_POST[id];";
    $sql = $con->query($sql);


?>
<script>
    alert('alteração realizado com sucesso!')
    location.href = "lista_regioes.php"
</script>