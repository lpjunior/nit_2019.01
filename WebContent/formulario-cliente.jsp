<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pizzaria Web 402</title>
  </head>
  <body>
	<div class="container">
		<fieldset>
			<legend>Cadastro de Clientes da Pizzaria Web</legend>
			<form action="cliente/adicionar" method="post">
				<div class="form-group">
					<label for="nome_id"></label>
					<input type="text" name="txtNome" id="nome_id" placeholder="Informe o nome" class="form-control">
				</div>
				<div class="form-group">
					<label for="cpf_id"></label>
					<input type="text" name="txtCPF" id="cpf_id" placeholder="Informe o CPF" class="form-control">
				</div>
				<div class="form-group">
					<label for="email_id"></label>
					<input type="email" name="txtEmail" id="email_id" placeholder="Informe o email" class="form-control">
				</div>
				<div class="form-group">
					<label for="pass_id"></label>
					<input type="password" name="txtSenha" id="pass_id" placeholder="Informe a senha" class="form-control">
				</div>
				<button type="submit" class="btn btn-dark">Cadastrar</button>
			</form>
		</fieldset>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>