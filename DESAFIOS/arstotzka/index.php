<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Arstotzka - Avaliação de Ensino</title>
    <link rel=stylesheet href="css/estilo.css">
</head>

<body>
    <h1>Arstotzka - Avaliação de Ensino</h1>
    <div class="box">
        <h2>Formulário</h2>
        <section>
            <form action="result.php" method="get">
                <ul>
                    <li>
                        <label>Cidade:</label>
                        <select name="cidade">
                            <option value="Vescillo">Vescillo</option>
                            <option value="Gennistora">Gennistora</option>
                            <option value="Fardesto">Fardesto</option>
                        </select>
                    </li>
                    <li>
                        <label>História:</label>
                        <input type="number" step="0.5" name="h1" placeholder="1º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="h2" placeholder="2º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="h3" placeholder="3º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="h4" placeholder="4º Bim" min=0 max=10 required>
                    </li>
                    <li>
                        <label>Matemática:</label>
                        <input type="number" step="0.5" name="m1" placeholder="1º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="m2" placeholder="2º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="m3" placeholder="3º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="m4" placeholder="4º Bim" min=0 max=10 required>
                    </li>
                    <li>
                        <label>Geografia:</label>
                        <input type="number" step="0.5" name="g1" placeholder="1º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="g2" placeholder="2º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="g3" placeholder="3º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="g4" placeholder="4º Bim" min=0 max=10 required>
                    </li>
                    <li>
                        <label>Inglês:</label>
                        <input type="number" step="0.5" name="i1" placeholder="1º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="i2" placeholder="2º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="i3" placeholder="3º Bim" min=0 max=10 required>
                        <input type="number" step="0.5" name="i4" placeholder="4º Bim" min=0 max=10 required>
                    </li>
                    <input class="button" value="Consultar" type="submit">
                </ul>
            </form>
        </section>

        <input type="checkbox" id="desc" class="desc-input">
        <div class="desc-box">
            <label for="desc" class="desc-title">Descrição</label>
            <div class="desc-content">
                <p>A grandiosa nação de Arstotzka te contratou para criar um sistema para auxiliar na avaliação da qualidade do ensino em suas 3 cidades, o software deve receber 4 notas bimestrais de 4 disciplinas e calcular a média de cada uma delas, se o aluno ficar com nota abaixo de 6 em qualquer disciplina é automaticamente reprovado.</p>

                <p>O software recebe 4 notas das seguintes disciplinas:</p>
                <p>História | Matemática | Geografia | Inglês</p>

                <p>o softwre calculará as médias simples das notas das 4 disciplinas, e verificará se há nota inferior a 6 em alguma delas, havendo nota inferior a 6 exibe a mensagem “reprovado”, não havendo exibe “APROVADO”.</p>

                <p>Glória à Arstotzka!</p>
            </div>
        </div>
    </div>
</body>

</html>
