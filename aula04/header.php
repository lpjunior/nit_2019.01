<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Projeto PHP</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class=   "navbar-brand" href="./">SENAC NITERÓI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gestão de Cursos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header">Cursos</h6>
                        <a class="dropdown-item" href="cadastrar_curso.php">Cadastro</a>
                        <a class="dropdown-item" href="listar_curso.php">Listagem</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Disciplinas</h6>
                        <a class="dropdown-item" href="cadastrar_disciplina.php">Cadastro</a>
                        <a class="dropdown-item" href="listar_disciplina.php">Listagem</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Professores</h6>
                        <a class="dropdown-item" href="cadastrar_professor.php">Cadastro</a>
                        <a class="dropdown-item" href="listar_professor.php">Listagem</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Alunos</h6>
                        <a class="dropdown-item" href="cadastrar_aluno.php">Cadastro</a>
                        <a class="dropdown-item" href="listar_aluno.php">Listagem</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>