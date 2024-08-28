<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Aula2/style.css">
    <title>Area do Triangulo</title>
</head>
<body>
    
    <form method="post">
        <h1>Insira a base do triangulo</h1>
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" step="0.01" required>
        <button type="submit" name="enviarBase">Enviar</button>
        <h1>Insira a altura do triangulo</h1>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <button type="submit" name="enviarAltura">Enviar</button>
        <h1>Area do Triangulo</h1>
        <button type="submit" name="calcular_area">Calcular Area</button>
    </form>

    <?php
    echo '<br>';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       if(isset($_POST['calcular_area'])) 
       $base = $_POST['base'];
       $altura = $_POST['altura'];
       $area = ($base * $altura) /2;
       echo 'A area é igual a: ', $area;

       echo '<br>';
       echo '<br>';

       if($area >= 100){
        echo 'A area é maior ou igual a 100';
       }else{
        echo 'A area é menor que 100';
       }
    }

    ?>

</body>
</html>