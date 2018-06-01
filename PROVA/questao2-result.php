<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <ul>
        <li><h2>Questão 2</h2><p class="assinatura">Filipe Daineze</p></li>
        <?php 

        $n1 = $_GET['num1'];
        $n2 = $_GET['num2'];
        $op = $_GET['operacao'];

        if($op == "soma") {
            $re = $n1+$n2;
            echo '<li><p>'.$n1.' + '.$n2.' = '.$re.'</p></li>';
        }
        if($op == "subt") {
            $re = $n1-$n2;
            echo '<li><p>'.$n1.' - '.$n2.' = '.$re.'</p></li>';
        }
        if($op == "mult") {
            $re = $n1*$n2;
            echo '<li><p>'.$n1.' * '.$n2.' = '.$re.'</p></li>';
        }
        if($op == "divi") {
            $re = $n1/$n2;
            echo '<li><p>'.$n1.' / '.$n2.' = '.$re.'</p></li>';
        }
        ?>
    </ul>
</body>

</html>