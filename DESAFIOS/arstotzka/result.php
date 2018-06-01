<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Arstotzka - Avaliação de Ensino</title>
    <link rel=stylesheet href="css/estilo.css">
</head>

<body>
    <h1>Arstotzka - Avaliação de Ensino</h1>
    <?php     
    $cidade = $_GET['cidade'];
    $h1 = $_GET['h1'];
    $h2 = $_GET['h2'];
    $h3 = $_GET['h3'];
    $h4 = $_GET['h4'];
    $m1 = $_GET['m1'];
    $m2 = $_GET['m2'];
    $m3 = $_GET['m3'];
    $m4 = $_GET['m4'];
    $g1 = $_GET['g1'];
    $g2 = $_GET['g2'];
    $g3 = $_GET['g3'];
    $g4 = $_GET['g4'];
    $i1 = $_GET['i1'];
    $i2 = $_GET['i2'];
    $i3 = $_GET['i3'];
    $i4 = $_GET['i4'];

    $mediah = ($h1+$h2+$h3+$h4)/4;
    $mediam = ($m1+$m2+$m3+$m4)/4;
    $mediag = ($g1+$g2+$g3+$g4)/4;
    $mediai = ($i1+$i2+$i3+$i4)/4;
    
    if($mediah<6 or $mediam<6 or $mediag<6 or $mediai<6) {
        $result = '<p class="reprovado">reprovado</p>';
    } else {
        $result = '<p class="aprovado">aprovado</p>';
    }
    
	/* Esse trecho é só pra parte visual, não altera o processamento */
    /* array e for iam cair muito melhor aqui, mas quis fazer com o que aprendi em sala */
    if($mediah < 6) $mediah='<spam class="red">'.$mediah.'</spam>'; else $mediah='<spam class="ok">'.$mediah.'</spam>';
    if($mediam < 6) $mediam='<spam class="red">'.$mediam.'</spam>'; else $mediam='<spam class="ok">'.$mediam.'</spam>';
    if($mediag < 6) $mediag='<spam class="red">'.$mediag.'</spam>'; else $mediag='<spam class="ok">'.$mediag.'</spam>';
    if($mediai < 6) $mediai='<spam class="red">'.$mediai.'</spam>'; else $mediai='<spam class="ok">'.$mediai.'</spam>';
    
    if($h1 < 6) $h1='<spam class="red">'.$h1.'</spam>'; else $h1='<spam class="ok">'.$h1.'</spam>';
    if($h2 < 6) $h2='<spam class="red">'.$h2.'</spam>'; else $h2='<spam class="ok">'.$h2.'</spam>';
    if($h3 < 6) $h3='<spam class="red">'.$h3.'</spam>'; else $h3='<spam class="ok">'.$h3.'</spam>';
    if($h4 < 6) $h4='<spam class="red">'.$h4.'</spam>'; else $h4='<spam class="ok">'.$h4.'</spam>';
    if($m1 < 6) $m1='<spam class="red">'.$m1.'</spam>'; else $m1='<spam class="ok">'.$m1.'</spam>';
    if($m2 < 6) $m2='<spam class="red">'.$m2.'</spam>'; else $m2='<spam class="ok">'.$m2.'</spam>';
    if($m3 < 6) $m3='<spam class="red">'.$m3.'</spam>'; else $m3='<spam class="ok">'.$m3.'</spam>';
    if($m4 < 6) $m4='<spam class="red">'.$m4.'</spam>'; else $m4='<spam class="ok">'.$m4.'</spam>';
    if($g1 < 6) $g1='<spam class="red">'.$g1.'</spam>'; else $g1='<spam class="ok">'.$g1.'</spam>';
    if($g2 < 6) $g2='<spam class="red">'.$g2.'</spam>'; else $g2='<spam class="ok">'.$g2.'</spam>';
    if($g3 < 6) $g3='<spam class="red">'.$g3.'</spam>'; else $g3='<spam class="ok">'.$g3.'</spam>';
    if($g4 < 6) $g4='<spam class="red">'.$g4.'</spam>'; else $g4='<spam class="ok">'.$g4.'</spam>';
    if($i1 < 6) $i1='<spam class="red">'.$i1.'</spam>'; else $i1='<spam class="ok">'.$i1.'</spam>';
    if($i2 < 6) $i2='<spam class="red">'.$i2.'</spam>'; else $i2='<spam class="ok">'.$i2.'</spam>';
    if($i3 < 6) $i3='<spam class="red">'.$i3.'</spam>'; else $i3='<spam class="ok">'.$i3.'</spam>';
    if($i4 < 6) $i4='<spam class="red">'.$i4.'</spam>'; else $i4='<spam class="ok">'.$i4.'</spam>';
    
    ?>
    <div class="box">
        <div class="cidade">
            <label>Cidade:</label>
            <?php echo $cidade; ?>
       </div>
            
        <h2>Média</h2>
        <ul>
            <li>
                <label>História:</label>
                <?php echo $mediah; ?>
            </li>
            <li>
                <label>Matemática:</label>
                <?php echo $mediam; ?>
            </li>
            <li>
                <label>Geografia:</label>
                <?php echo $mediag; ?>
            </li>
            <li>
                <label>Inglês:</label>
                <?php echo $mediai; ?>
            </li>
        </ul>

        <h2>Resultado</h2>
        <ul>
            <li class="align">
                <div>
                    <p>Resultado da avaliação:</p>
                    <div class="align"><?php echo $result; ?></div>
                </div>
            </li>
        </ul>
            
        <!-- DETALHAMENTO (SOMENTE ESTETICO) -->
        
        <input type="checkbox" id="desc" class="desc-input">
        <div class="desc-box">
            <label for="desc" class="desc-title">Mais Detalhes</label>
            <a href="index.php" style="float: right;"><-- voltar</a>
            <div class="desc-content">
                
                   
                <ul>
                    <li>
                        <label>História:</label>
                        <label><?php echo $h1 ?></label>
                        <label><?php echo $h2 ?></label>
                        <label><?php echo $h3 ?></label>
                        <label><?php echo $h4 ?></label>
                    </li>
                    <li>
                        <label>Matemática:</label>
                        <label><?php echo $m1; ?></label>
                        <label><?php echo $m2; ?></label>
                        <label><?php echo $m3; ?></label>
                        <label><?php echo $m4; ?></label>
                    </li>
                    <li>
                        <label>Geografia:</label>
                        <label><?php echo $g1; ?></label>
                        <label><?php echo $g2; ?></label>
                        <label><?php echo $g3; ?></label>
                        <label><?php echo $g4; ?></label>
                    </li>
                    <li>
                        <label>Inglês:</label>
                        <label><?php echo $i1; ?></label>
                        <label><?php echo $i2; ?></label>
                        <label><?php echo $i3; ?></label>
                        <label><?php echo $i4; ?></label>
                    </li>
                </ul>
                
                
            </div>
        </div>
        
    </div>
</body>

</html>