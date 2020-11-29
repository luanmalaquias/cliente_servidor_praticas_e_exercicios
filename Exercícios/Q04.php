<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    
    <!-- Formulário -->
     <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Nome do cliente<br>
            <input type = "text" name = "nome">
            <br>
        </label>
        <label>
            Dias na pousada<br>
            <input type = "number" name = dias>
            <br>
        </label>        
        <button type = "submit">Calcular</button>
    </form>

    <?php
        
        function calcularValorTotal($dias){
            $valorTotal = $dias * 40;
            $servicosDiarios = 0;
           
            if($dias<10){
                $servicosDiarios = $dias * 15;
            }else{
                $servicosDiarios = $dias * 8;
            }

            return $valorTotal + $servicosDiarios;

        }

        if(!empty($_REQUEST["nome"]) && $_REQUEST["dias"] != ""){
            echo "Valor Total: R$" . calcularValorTotal($_REQUEST["dias"]);
        }

    ?>

</body>
</html>