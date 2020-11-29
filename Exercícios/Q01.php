 <!-- Formulário -->
<form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
    <label>
        Nome<br>
        <input type = "text" name = "nome">
        <br>
    </label>
    <label>
        Salario (R$)<br>
        <input type = "number" name = salario>
        <br>
    </label>
    <label>
        Percentual de aumento<br>
        <input type = "number" name = percentual>
        <br>
    </label>
    <button type = "submit">Calcular</button>
</form>

<?php
  function calcularPercentual($nome, $salario, $percentual){
    $aumento = ($salario*$percentual)/100;
    $total = $salario + $aumento;
    return "Salario de $nome aumentado de R$$salario para R$$total com aumento de R$$aumento, percentual de $percentual%";
  }

  if(!empty($_REQUEST['nome']) && !empty($_REQUEST['salario']) && !empty($_REQUEST['percentual'])){
    echo calcularPercentual($_REQUEST['nome'],$_REQUEST['salario'],$_REQUEST['percentual']);
  }
?>