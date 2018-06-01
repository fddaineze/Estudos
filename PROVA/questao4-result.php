<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <ul>
        <li><h2>Questão 4</h2><p class="assinatura">Filipe Daineze</p></li>
        <?php 
        $soma = 0;
        for($i=1;$i<=5;$i++) { 
            $soma = $_GET['num'.$i] + $soma;
        }
        $media=$soma/5;

        echo '<li><p>Media: '.$media.'</p></li>';
        
        if($media<6) {
            echo '<li><p class="reprovado">reprovado</p></li>';
        } else {
            echo '<li><p class="aprovado">aprovado</p></li>';
        }
        ?>
    </ul>
</body>

</html>