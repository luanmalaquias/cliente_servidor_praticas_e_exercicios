<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    
    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Área (m²)<br>
            <input type = "number" name = "area">
            <br>
        </label>
            
        <button type = "submit">Calcular</button>
    </form>

    <?php

        function calcular($area){
            $litros = $area/6;
            $latas = $litros / 18;
            $galoes = $litros / 3.6;           
            
            $latas = (int) $latas;
            $galoes = (int) $galoes;

            $precoLatas = $latas*80;
            $precoGaloes = $galoes*25;

            echo "<br> Litros: $litros <br>";
            echo "Galoes: $galoes // Preço: R$$precoGaloes<br>";
            echo "Latas: $latas // Preço: R$$precoLatas<br>";
        }

        if(!empty($_REQUEST["area"])){
            calcular($_REQUEST["area"]);
        }

    ?>

</body>
</html>