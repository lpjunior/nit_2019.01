<?php include './header.php'; ?>

<div class="container col-3 mt-5 bg-dark text-white p-3">
    <fieldset>
        <legend>Área Administrativa</legend>
        <form id="form_login">
            <div class="form-group">
                <label for="id_username">Usuário</label>
                <input type="text" id="id_username" class="form-control" name="txtUsername" require>
            </div>
            <div class="form-group">
                <label for="id_password">Senha</label>
                <input type="password" id="id_password" class="form-control" name="txtPassword" require>
            </div>
            <button type="submit" form="form_login" formaction="login.php" formmethod="post" class="btn btn-light">Acessar</button>
        </form>
    </fieldset>
    <div class="row pl-3 pt-3">
        <p class="text-danger"><?= isset($_SESSION['msg']) ? $_SESSION['msg'] : "" ?></p>
    </div>
</div>

<?php include './footer.php'; ?>