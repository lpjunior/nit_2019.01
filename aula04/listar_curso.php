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
                    <td><a href="delete_curso.php?id=<?= $curso['idcurso'] ?>" onclick="return confirm('Você tem certeza?')"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <span data-toggle="modal" data-target="#AvanzaModal" data-remote="http://www.avanzaeninternet.com/producto-de-ejemplo/?add-to-cart=463" class="miclase" data-product_id="463" data-product_sku="45678652" data-product-quantity="1">AÑADIR A CARRITO</span>

    <div class="modal fade" id="AvanzaModal" tabindex="-1" role="dialog" aria-labelledby="AvanzaModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Salvar</button>
                    <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php' ?>

<script>
    var remoto_href = '';

    jQuery('body').on('click', '[data-toggle="modal"]', function() {
        if(remoto_href != jQuery(this).data("remote")) {
            remoto_href = jQuery(this).data("remote");
            jQuery(jQuery(this).data("target")).removeData('bs.modal');
            jQuery(jQuery(this).data("target")).find('.modal-body').empty();
            jQuery(jQuery(this).data("target") + ' .modal-body').load(jQuery(this).data("remote") + '/?modal=1');
        }
    });
</script>