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
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estruturas de repetição -->
                <?php foreach (listaCursos() as $curso): ?>
                <tr>
                    <td><?= $curso['idcurso'] ?></td>
                    <td><?= $curso['nome'] ?></td>
                    <td><a href="edit_curso.php?id=<?= $curso['idcurso'] ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete_curso.php?id=<?= $curso['idcurso'] ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php include './footer.php' ?>
