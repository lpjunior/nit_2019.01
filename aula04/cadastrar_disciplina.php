<?php include './header.php' ?>
    <div class="container mt-3">
        <fieldset>
            <legend>Formulário de Cadastro</legend>
            <form action="registrar.php" method="post">
                <div class="form-group">
                    <label for="idnome">Nome</label>
                    <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="iddescricao">Descricao</label>
                    <input type="text" id="iddescricao" name="txtDescricao" placeholder="Informe a descrição" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </fieldset>
    </div>
<?php include './footer.php' ?>
