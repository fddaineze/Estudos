<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Estrutura de Dados</title>
    
    <style>
        ul { list-style-type: none; float:left; }
        input { margin: 2px 0; }
        label { display: inline-block; width: 20px; }
        .quebra { clear: both; }
    </style>
</head>

<body>
    <h2>Umbrella Corporation</h2>
    <form action="result.php" method="get">
        <ul>
            <li>África do Sul</li>
            <li><label>T</label><input name="a1" type="number" required min=0 max=100></li>
            <li><label>G</label><input name="a2" type="number" required min=0 max=100></li>
            <li><label>X</label><input name="a3" type="number" required min=0 max=100></li>
            <li><label>V</label><input name="a4" type="number" required min=0 max=100></li>
            <li><label>F</label><input name="a5" type="number" required min=0 max=100></li>
        </ul>
        
        <ul>
            <li>Rússia</li>
            <li><label>T</label><input name="r1" type="number" required min=0 max=100></li>
            <li><label>G</label><input name="r2" type="number" required min=0 max=100></li>
            <li><label>X</label><input name="r3" type="number" required min=0 max=100></li>
            <li><label>V</label><input name="r4" type="number" required min=0 max=100></li>
            <li><label>F</label><input name="r5" type="number" required min=0 max=100></li>
        </ul>
        
        <ul>
            <li>Estados Unidos</li>
            <li><label>T</label><input name="e1" type="number" required min=0 max=100></li>
            <li><label>G</label><input name="e2" type="number" required min=0 max=100></li>
            <li><label>X</label><input name="e3" type="number" required min=0 max=100></li>
            <li><label>V</label><input name="e4" type="number" required min=0 max=100></li>
            <li><label>F</label><input name="e5" type="number" required min=0 max=100></li>
        </ul>
        
        <ul>
            <li>França</li>
            <li><label>T</label><input name="f1" type="number" required min=0 max=100></li>
            <li><label>G</label><input name="f2" type="number" required min=0 max=100></li>
            <li><label>X</label><input name="f3" type="number" required min=0 max=100></li>
            <li><label>V</label><input name="f4" type="number" required min=0 max=100></li>
            <li><label>F</label><input name="f5" type="number" required min=0 max=100></li>
        </ul>
        
        <ul>
            <li>Brasil</li>
            <li><label>T</label><input name="b1" type="number" required min=0 max=100></li>
            <li><label>G</label><input name="b2" type="number" required min=0 max=100></li>
            <li><label>X</label><input name="b3" type="number" required min=0 max=100></li>
            <li><label>V</label><input name="b4" type="number" required min=0 max=100></li>
            <li><label>F</label><input name="b5" type="number" required min=0 max=100></li>
        </ul>
        <div class="quebra">
            <input type=submit value="Processar">
        </div>
    </form>
</body>

</html>