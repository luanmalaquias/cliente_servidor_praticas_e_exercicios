<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>    

    <!-- Formulário -->
    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Nome do aluno<br>
            <input type = "text" name = "nome">
            <br>
        </label>
        <label>
            Nota 1<br>
            <input type = "number" name = nota1>
            <br>
        </label>
        <label>
            Nota 2<br>
            <input type = "number" name = nota2>
            <br>
        </label>
        <button type = "submit">Calcular</button>
    </form>

    <?php
        function calcularMedia($nota1, $nota2){
            $media = ($nota1 + $nota2) / 2;
            if($media < 3){
                echo "<br>Reprovado<br>";
            }else if($media >= 3 && $media <= 7){
                echo "<br>Exame<br>";
            }else{
                echo "<br>Aprovado<br>";
            }
            return "Media: " . $media;
        }

        if(!empty($_REQUEST["nome"]) && $_REQUEST["nota1"] != "" && $_REQUEST["nota2"] != ""){
            echo calcularMedia($_REQUEST["nota1"] , $_REQUEST["nota2"]);
        }
    ?>
</body>
</html>