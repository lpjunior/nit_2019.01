<?php include './header.php' ?>
    <div class="container mt-3">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estrutura de array -->
                <?php
                    $lista = array(
                        array(
                            "id" => 1,
                            "nome" => "Caneta",
                            "quantidade" => "100 un.",
                            "preco" => 10.90,
                            "imagem" => "prod1"
                        ),
                        array(
                            "id" => 2,
                            "nome" => "Lapis",
                            "quantidade" => "250 un.",
                            "preco" => 3.50,
                            "imagem" => "prod2"
                        ),
                        array(
                            "id" => 3,
                            "nome" => "Borracha",
                            "quantidade" => "132 un.",
                            "preco" => 0.45,
                            "imagem" => "prod3"
                        )
                    );

                    $array = array(
                        "id" => 4,
                        "nome" => "Apagador",
                        "quantidade" => "62 un.",
                        "preco" => 10.45,
                        "imagem" => "prod4"
                    );

                    # insere o elemento em uma posição do array
                    array_push($lista, $array);
                ?>
                <!-- Estruturas de repetição -->
                <?php for($i = 0; $i < sizeof($lista); $i++) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $lista[$i]['nome'] ?></td>
                    <td><?= $lista[$i]['quantidade'] ?></td>
                    <td><?= $lista[$i]['preco'] ?></td>
                    <td><a href="<?= $lista[$i]['imagem'] ?>"><i class="fas fa-camera-retro"></i></a></td>
                    <td><a href="#"><i class="fas fa-edit"></i></a></td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
<?php include './footer.php' ?>
