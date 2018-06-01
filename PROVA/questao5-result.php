<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <ul>
        <li><h2>Questão 6</h2><p class="assinatura">Filipe Daineze</p></li>
        <?php 
        
        $vel = $_GET['num1']; // velocidade km/h
        $dis = $_GET['num2']; // distancia percorrida
                
        // Horas (inteiro)
        $hora = (int)($dis / $vel);
        // Minutos (restante dos kms / km por minuto)
        $minuto = (int)( ($dis % $vel) / ($vel/60) );
        
        echo '<li><p>Tempo até o destino: <strong>'.$hora.'h '.$minuto.'min</strong></p></li>';
        
        ?>
    </ul>
</body>

</html>