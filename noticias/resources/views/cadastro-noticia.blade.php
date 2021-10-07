<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <title>Nova Noticia</title>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/adm">Home</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Sair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/perfil">Perfil</a>
                    </li>
                </ul>
            </div>
        </nav>
        <form class="form-horizontal" action="/cad-new" method="POST">
            @csrf
            <fieldset>
                <div class="panel panel-primary">
                    <div class="panel-heading">Registro de Noticias</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">Titulo</label>
                            <div class="col-md-8">
                                <input name="titulo" placeholder="Digite o titulo" class="form-control input-md" required="" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Autor</label>
                        <div class="col-md-2">
                            <input name="autor" placeholder="Digite o nome do Autor" class="form-control input-md" required="" type="text" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="obs">Descricao</label>
                        <div class="col-md-8">
                            <input name="descricao" class="form-control"  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                        </div>
                    </div>
                </div>
                </div>
            </fieldset>
        </form>
    </body>
</html>