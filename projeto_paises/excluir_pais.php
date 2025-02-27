<?php

    include "conexao_paises.php";

    $id = $_GET['id'];
   
    $sql = "delete from paises where id=$id";

    $sql = $con->query($sql);
    
?>
<script>
    alert('EXCLUÍDO')
    location.href = "lista_paises.php"
</script>