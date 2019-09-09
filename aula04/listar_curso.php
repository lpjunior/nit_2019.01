<?php 
    include './header.php';
    include './consulta_cursos.php';
?>
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
