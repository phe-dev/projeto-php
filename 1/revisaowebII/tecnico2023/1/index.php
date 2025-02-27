<style>
    h1{
        color:red;
    }
</style>

<?php 

// aqui temos código da linguagem PHP

echo "<h1>Hello Word!</h1>";    // comando de saida de dados (h1 para dar destaque)

$nome = "Rayllene";    //$ - Variavel
echo "olá $nome, bem-vindo! <br>";

// Apresentar somente os numeros pares de 1 a 100

for ($i=1; $i<=100;$i++){
    if ($i % 2 == 0){
         echo "$i - ".sqrt($i)." <br>";
    }
   
}

?>
