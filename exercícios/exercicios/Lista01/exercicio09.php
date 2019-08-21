<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Exercícios</title>
  </head>
  <body>
  <!--
    9. Ler dois números inteiros informados pelo usuário, dividi-los, apresentar o resultado da divisão
    real desses números, o quadrado do primeiro número e o cubo do segundo número.
    -->
    <div class="container">
        <fieldset>
            <legend>Calculo de valores</legend>
            <form action="#" method="post">
                <div class="form-group">
                    <label>Informe o primeiro valor</label>
                    <input type="number" step="1" name="valor01" class="form-control">
                </div>
                <div class="form-group">
                    <label>Informe o segundo valor</label>
                    <input type="number" step="1" name="valor02" class="form-control">
                </div>
                <button type="submit" class="btn btn-dark">Calcular!</button>
            </form>
        </fieldset> 
    </div>

    <?php
        $valor01 = isset($_POST['valor01']) ? $_POST['valor01'] : 0;
        $valor02 = isset($_POST['valor02']) ? $_POST['valor02'] : 0;

        if($valor01 != 0 && $valor02 != 0) {
            echo "A divisão dos valores é: " . ($valor01 / $valor02);
            echo "<br>O quadrado do primeiro valor é: " . ($valor01 ** 2); // 5.6 base ** potencia
            echo "<br>O cubo do primeiro valor é: " . pow($valor02, 3); // 4 - 7.3 pow(base, potencia)
        }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>