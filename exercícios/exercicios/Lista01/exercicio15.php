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
    Calcular o salário líquido de uma pessoa. São fornecidos: o valor por hora, o número de horas
    trabalhadas e o % de desconto do INSS.
    -->
    <div class="container">
        <fieldset>
            <legend>Calculo de valores</legend>
            <form action="#" method="post">
                <div class="form-group">
                    <label>Informe o salário/hora</label>
                    <input type="number" step="1" name="salarioH" class="form-control">
                </div>
                <div class="form-group">
                    <label>Informe a quantidade de horas trabalhadas</label>
                    <input type="number" step="1" name="qtdH" class="form-control">
                </div>
                <div class="form-group">
                    <label>Informe o desconto INSS</label>
                    <input type="number" step="1" name="inss" class="form-control">
                </div>
                <button type="submit" class="btn btn-dark">Calcular!</button>
            </form>
        </fieldset> 
    </div>

    <?php
        $salario = isset($_POST['salarioH']) ? $_POST['salarioH'] : 0;
        $horas = isset($_POST['qtdH']) ? $_POST['qtdH'] : 0;
        $inss = isset($_POST['inss']) ? $_POST['inss'] : 0;

        if($salario != 0 && $horas != 0 && $inss != 0) {
            echo "O salário liquido é: " . ($salario * $horas) - (($salario * $horas) * ($inss/100));
        }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>