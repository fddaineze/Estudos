<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    <style> td { padding: 0 10px; } </style>
</head>

<body>
    <h2>Resultado</h2>
    <?php 
    echo '<table>';
        
    function imc($nome, $altura, $peso) {
        $imc = $peso/($altura * $altura);
        
        if($imc < 17 ) $result = 'Muito abaixo do peso';
        if($imc >= 17 and $imc <= 18.49 ) $result = 'Abaixo do peso';
        if($imc >= 18.5 and $imc <= 24.99 ) $result = 'Peso normal';
        if($imc >= 25 and $imc <= 29.99 ) $result = 'Acima do peso';
        if($imc >= 30 and $imc <= 34.99 ) $result = 'Obesidade I';
        if($imc >= 35 and $imc <= 39.99 ) $result = 'Obesidade II (severa)';
        if($imc >= 40) $result = 'Obesidade III (mórbida)';
        
        echo '
        <tr>
        <td>nome: '.$nome.'</td>
        <td>altura: '.$altura.'</td>
        <td>peso: '.$peso.'</td>
        <td>imc: '.$imc.'</td>
        <td>'.$result.'</td>
        </tr>';
        
        return($imc);
    }
      
    // transforma o get em outra array para permitir trabalhar com indices
    foreach ($_GET as $num) {
        $bruto[] = $num;
    }
    
    // o salto ocorre de 3 em 3 para simular uma array dentro de array
    for( $i=0; $i<=27; $i += 3 ) {
        $dados [] = $bruto[$i].'+'.$bruto[$i+1].'+'.$bruto[$i+2];
    }
    
    $media = 0; // media do IMC
    
    // começa a trabalhar os dados do usuário individualmente
    foreach($dados as $dados) {
        $individual = explode("+", $dados);        
        
        // Chama a função IMC (nome, altura, peso)
        // Que calcula e ao mesmo tempo monta a tabela
        $imc = imc($individual[0], $individual[1], $individual[2]);
                
        // ---------------------------------------------------- IMC
        // MENOR IMC
        if(isset($menor)) {
            if($imc < $menor) {
                $menor = $imc;
                $menorN = $individual[0];
            }
        } else {
            $menor = $imc;
            $menorN = $individual[0];
        }
        
        // MAIOR IMC
        if(isset($maior)) {
            if($imc > $maior) {
                $maior = $imc;
                $maiorN = $individual[0];
            }
        } else {
            $maior = $imc;
            $maiorN = $individual[0];
        }
        $media = $media+$imc;
        
        // ---------------------------------------------------- Altura
        // MENOR IMC
        if(isset($menorAltura)) {
            if($individual[1] < $menorAltura) {
                $menorAltura = $individual[1];
                $menorAlturaN = $individual[0];
            }
        } else {
            $menorAltura = $individual[1];
            $menorAlturaN = $individual[0];
        }
        
        // MAIOR IMC
        if(isset($maiorAltura)) {
            if($individual[1] > $maiorAltura) {
                $maiorAltura = $individual[1];
                $maiorAlturaN = $individual[0];
            }
        } else {
            $maiorAltura = $individual[1];
            $maiorAlturaN = $individual[0];
        }
        
        // ---------------------------------------------------- Peso
        // MENOR IMC
        if(isset($menorPeso)) {
            if($individual[2] < $menorPeso) {
                $menorPeso = $individual[2];
                $menorPesoN = $individual[0];
            }
        } else {
            $menorPeso = $individual[2];
            $menorPesoN = $individual[0];
        }
        
        // MAIOR IMC
        if(isset($maiorPeso)) {
            if($individual[2] > $maiorPeso) {
                $maiorPeso = $individual[2];
                $maiorPesoN = $individual[0];
            }
        } else {
            $maiorPeso = $individual[2];
            $maiorPesoN = $individual[0];
        }
    }
    
    echo '</table>';
    echo '<br>Menor IMC: <br>';
    echo $menorN.': '.$menor;
    echo '<br><br>Maior IMC: <br>';
    echo $maiorN.': '.$maior;
    echo '<br><br>Media de IMC: <br>';
    $media = $media/10;
    echo $media;
    
    echo '<br>';
        
    echo '<br>Menor Altura: <br>';
    echo $menorAlturaN.': '.$menorAltura;
    echo '<br><br>Maior Altura: <br>';
    echo $maiorAlturaN.': '.$maiorAltura;
        
    echo '<br>';
    
    echo '<br>Menor Peso: <br>';
    echo $menorPesoN.': '.$menorPeso;
    echo '<br><br>Maior Peso: <br>';
    echo $maiorPesoN.': '.$maiorPeso;
    ?>
</body>

</html>