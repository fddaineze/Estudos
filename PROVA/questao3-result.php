<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <ul>
        <li><h2>Questão 3</h2><p class="assinatura">Filipe Daineze</p></li>
        <?php 

        $m2 = $_GET['num1'];
        $kg = $_GET['num2'];
        
        $kgmes = $kg*2.5;
        $total = $kgmes*$m2;

        echo '<li><p>Medida: '.$m2.'m²</p></li>';
        echo '<li><p>Tempo: '.$kg.' meses</p></li>';
        echo '<li><p>Quilos por m²: '.$kgmes.'kg</p></li>';
        echo '<li><p><strong>QUANTIDADE DE ADUBO NECESSÁRIA:</strong></p></li>';
        echo '<li><p><strong>'.$total.'kg</strong></p></li>';
        ?>
    </ul>
</body>

</html>