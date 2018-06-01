<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <style>
            table {
                text-align: center;
            }
            td {
                padding: 5px 8px;
                border: 1px solid #ddd;
            }
        </style>
	</head>

	<body>
    <?php 
    $debug = false;
    $matrizA = array(
        array(1,1,3,0),
        array(2,1,2,1),
        array(2,1,2,0),
        array(2,1,2,2),
        array(2,1,2,2),
        array(2,1,2,0),
        array(1,1,3,0)
    );
    $matrizB = array(
        array(1,2,1,3,1),
        array(2,2,1,0,1),
        array(2,1,2,1,1),
        array(2,3,1,2,1),
    );
    $matrizR = array();

    // contagem Linhas da Matriz A
    $LMA = count($matrizA);
    // contagem Colunas da Matriz A
    $CMA = count($matrizA[0]);

    // contagem Linhas da Matriz B
    $LMB = count($matrizB);
    // contagem Colunas da Matriz B
    $CMB = count($matrizB[0]);

    echo 'Matrizes: '.$LMA.'x'.$CMA.' e '.$LMB.'x'.$CMB.'<br><br>';

    if ( $CMA == $LMB ) {
    // Num. Linhas do A
    for($i=0;$i<$LMA;$i++) { 

        // Num. de Colunas do B
        for($j=0;$j<$CMB;$j++) { 
            // é preciso zerar o valor desse ponto da matriz
            // para conseguir realizar a soma depois
            $matrizR[$i][$j] = 0;

            // Num. de Colunas do A
            for($k=0;$k<$CMA;$k++) { 

                // DEBUG
                if($debug) echo '['.$i.']['.$k.'] x ['.$k.']['.$j.'] ';
                if($debug) echo $matrizR[$i][$j].' = '.$matrizR[$i][$j].' + ('.$matrizA[$i][$k].' * '.$matrizB[$k][$j].') = ';

                // a MRij é = MRij + MAik * MBkj
                $matrizR[$i][$j] = $matrizR[$i][$j]+($matrizA[$i][$k]*$matrizB[$k][$j]);

                // DEBUG
                if($debug) echo $matrizR[$i][$j].' <br>';
            }
            // DEBUG
            if($debug) echo '<br>';
        }
    }

    // exibição da matriz resposta em tabela
    // Tamanho = Linhas A x Colunas B
    echo '<table>';
    for($i=0;$i<$LMA;$i++) { 
        echo '<tr>';
        for($j=0;$j<$CMB;$j++) { 
            echo '<td>';
            echo $matrizR[$i][$j].' ';
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    } else {
        echo '[ERRO] Nao e possivel multiplicar matrizes '.$LMA.'x'.$CMA.' com '.$LMB.'x'.$CMB;
    }
    ?>
	</body>
</html>