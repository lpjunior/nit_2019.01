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
                    <!--
                        data-curso_id - propriedade responsavel por guardar o id do curso
                        data-curso_name -  propriedade responsavel por guardar o nome do curso
                     -->
                    <td><span data-toggle="modal" data-target="#cursoModal" class="" data-curso_id="<?= $curso['idcurso'] ?>" data-curso_name="<?= $curso['nome'] ?>"><i class="fas fa-edit text-primary"></i></span></td>
                    <td><a href="delete_curso.php?id=<?= $curso['idcurso'] ?>" onclick="return confirm('Você tem certeza?')"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="cursoModal" tabindex="-1" role="dialog" aria-labelledby="cursoModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Editar Curso</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3">
                        <fieldset>
                            <form id="edit_form" action="edit_curso.php" method="post">
                                <div class="form-group">
                                    <label for="id_" class="sr-only">Id</label>
                                    <input type="hidden" id="id_" name="txtId" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="idnome">Nome</label>
                                    <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" form="edit_form" class="pull-left btn btn-default">Editar</button>
                    <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php' ?>

<script>
    // criação das variaveis
    var curso_id = '';
    var curso_name = '';

    jQuery('body').on('click', '[data-toggle="modal"]', function() {
        // Resgata os valores guardados em data-curso_id e data-curso_name
        curso_id = $(this).attr('data-curso_id');
        curso_name = $(this).attr('data-curso_name');

        // Atribui os valores as campos do formulario do modal
        $("#id_").attr({'value':curso_id});
        $("#idnome").attr({'value':curso_name});
    });
</script>