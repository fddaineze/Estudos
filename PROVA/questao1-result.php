<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <ul>
        <li><h2>Questão 1</h2><p class="assinatura">Filipe Daineze</p></li>
        <li><p>valores:</p></li>
        <?php
            rsort($_GET);
            foreach($_GET as $num) {
                if ($num != 'calcular') {
                    echo '<li><p>'.$num.'</p></li>';
                }
            }
        ?>
    </ul>
</body>

</html>