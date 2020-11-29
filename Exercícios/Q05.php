<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>

    <!-- Formulário -->
    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Nome do usuario<br>
            <input type = "text" name = "usuario">
            <br>
        </label>    
    
        <label>
            Nome do livro<br>
            <input type = "text" name = "livro">
            <br>
        </label>
        
        <label for="tipo">Tipo de usuario:</label>

        <select name="tipo">
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
        </select>

        <br>
        <br>

        <button type = "submit">Emitir Recibo</button>
        
    </form>

    <?php

        function emitirRecibo($nome, $livro, $usuario){
            echo "<br>Nome: " . $nome;
            echo "<br>Livro: " . $livro;
            echo "<br>Usuario: " . $usuario;
            echo "<br>Data do empréstimo: " . date('d/m/y');
            if($usuario == "Professor"){
                echo "<br>Data da entrega: " . date("d/m/y", strtotime("+10 days"));
            }else if($usuario == "Aluno"){
                echo "<br>Data da entrega: " . date("d/m/y", strtotime("+3 days"));
            }
        }

        if(!empty($_REQUEST["usuario"]) && $_REQUEST["livro"] != ""){
            echo emitirRecibo($_REQUEST["usuario"], $_REQUEST["livro"], $_REQUEST["tipo"]);
        }


    ?>

</body>
</html>