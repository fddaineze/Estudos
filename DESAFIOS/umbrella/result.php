<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    <style>
        div {
            float: left;
            margin-right: 80px;
        }
        .red {color:red}
        .green {color:green;}
    </style>
</head>

<body>
    <h2>Umbrella Corporation</h2>
    <?php
        $pais['África do Sul'] = array(
            'T'=>$_GET['a1'],
            'G'=>$_GET['a2'],
            'X'=>$_GET['a3'],
            'V'=>$_GET['a4'],
            'F'=>$_GET['a5'],
        );
        asort($pais['África do Sul']);
    
        $pais['Rússia'] = array(
            'T'=>$_GET['r1'],
            'G'=>$_GET['r2'],
            'X'=>$_GET['r3'],
            'V'=>$_GET['r4'],
            'F'=>$_GET['r5'],
        );
        asort($pais['Rússia']);
    
        $pais['Estados Unidos'] = array(
            'T'=>$_GET['e1'],
            'G'=>$_GET['e2'],
            'X'=>$_GET['e3'],
            'V'=>$_GET['e4'],
            'F'=>$_GET['e5'],
        );
        asort($pais['Estados Unidos']);
    
        $pais['França'] = array(
            'T'=>$_GET['f1'],
            'G'=>$_GET['f2'],
            'X'=>$_GET['f3'],
            'V'=>$_GET['f4'],
            'F'=>$_GET['f5'],
        );
        asort($pais['França']);
    
        $pais['Brasil'] = array(
            'T'=>$_GET['b1'],
            'G'=>$_GET['b2'],
            'X'=>$_GET['b3'],
            'V'=>$_GET['b4'],
            'F'=>$_GET['b5'],
        );
        asort($pais['Brasil']);
    
        
        foreach($pais as $name=>$percent) {
            echo '<div class="pais">';
            echo '<b>'.$name.'</b><br>';
            foreach($percent as $chave=>$valor) {
                if($valor==100) {
                } else if($valor>=80) {
                    echo '<spam class="red">'.$chave.' - '.$valor.'</spam><br>';
                } else if($valor<=10) {
                    echo '<spam class="green">'.$chave.' - '.$valor.'</spam><br>';
                } else {
                    echo '<spam>'.$chave.' - '.$valor.'</spam><br>';
                }
            }
            echo '</div>';
        }
    
    ?>
</body>

</html>