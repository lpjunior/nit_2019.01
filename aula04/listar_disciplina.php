<?php 
    include './header.php';
    include './consulta_disciplinas.php';
?>
    <div class="container mt-3">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estruturas de repetição -->
                <?php foreach (listaDisciplinas() as $disciplina): ?>
                <tr>
                    <td><?= $disciplina['iddisciplina'] ?></td>
                    <td><?= $disciplina['nome'] ?></td>
                    <td><?= substr($disciplina['descricao'], 0, 100)?><span data-toggle="modal" data-target="#disciplinaModal" data-disciplina_description="<?= $disciplina['descricao'] ?>"><a href="#">...</a></span></td>
                    <!--
                        data-disciplina_id - propriedade responsavel por guardar o id do disciplina
                        data-disciplina_name -  propriedade responsavel por guardar o nome do disciplina
                     -->
                    <td><span data-toggle="modal" data-target="#disciplinaModal" data-disciplina_id="<?= $disciplina['iddisciplina'] ?>" data-disciplina_name="<?= $disciplina['nome'] ?>" data-disciplina_description="<?= $disciplina['descricao'] ?>"><i class="fas fa-edit text-primary"></i></span></td>
                    <td><a href="delete_disciplina.php?id=<?= $disciplina['iddisciplina'] ?>" onclick="return confirm('Você tem certeza?')"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="disciplinaModal" tabindex="-1" role="dialog" aria-labelledby="disciplinaModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Disciplina</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-body container mt-3">
                        
                    </div>
                </div>
                <div class="modal-footer clearfix">
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php' ?>

<script>
    // criação das variaveis
    var disciplina_id = '';
    var disciplina_name = '';
    var disciplina_description = '';

    jQuery('body').on('click', '[data-toggle="modal"]', function() {
        // Resgata os valores guardados em data-disciplina_id e data-disciplina_name
        disciplina_description = jQuery(this).data('disciplina_description');
        disciplina_id = jQuery(this).data('disciplina_id');
        disciplina_name = jQuery(this).data('disciplina_name');

        // Atribui os valores as campos do formulario do modal
        $("#id_").attr({'value':disciplina_id});
        $("#idnome").attr({'value':disciplina_name});
        $("#iddescricao").val(disciplina_description);

        if(jQuery(this).data("disciplina_id") == null) {
            jQuery(jQuery(this)
                .data("target"))
                .find('.modal-body')
                .empty();

            jQuery(jQuery(this)
                .data("target") + ' .modal-body')
                .load($("#disciplinaModal .modal-body")
                .append('<p>' + disciplina_description + '</p>'));
        } else {
            jQuery(jQuery(this)
                .data("target"))
                .find('.modal-body')
                .empty();

            jQuery(jQuery(this)
                .data("target") + ' .modal-body')
                .load($("#disciplinaModal .modal-body")
                .append(`<fieldset>
                        <form id="edit_form" action="edit_disciplina.php" method="post">
                            <div class="form-group">
                                <label for="id_" class="sr-only">Id</label>
                                <input type="hidden" id="id_" name="txtId" class="form-control" value="${disciplina_id}">
                            </div>
                            <div class="form-group">
                                <label for="idnome">Nome</label>
                                <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control"  value="${disciplina_name}" required>
                            </div>
                            <div class="form-group">
                                <label for="idnome">Descrição</label>
                                <textarea id="iddescricao" name="txtDescricao" placeholder="Informe a descrição" class="form-control" required>${disciplina_description}</textarea>
                            </div>
                        </form>
                    </fieldset>`));

            jQuery(jQuery(this).data("target") + ' .modal-body')
                .load($("#disciplinaModal .modal-body")
                .append(`<button type="submit" form="edit_form" class="pull-left btn btn-default">Editar</button>
                    <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Fechar</button>`));
        }
    });
</script>