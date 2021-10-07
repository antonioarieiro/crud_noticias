<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    </head>
    <title>Noticias</title>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/adm">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inicio">Cadastrar Noticia</a>
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
        
            @foreach($noticias as $noticias)
            
            <div class="card text-center">
                <div class="card-header">
                    <b>ID da Noticia {{$noticias->id}}</b>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Titulo: {{$noticias->titulo}}</h5>
                    <p class="card-text">Conteudo  : {{$noticias->descricao}}</p>
                    <a href="/excluir-noticia/{{$noticias->id}}" class="btn btn-primary">Deletar Noticia </a>
                    <a href="/edit-noticia/{{$noticias->id}}" class="btn btn-primary">Editar Noticia </a>
                </div>
                <div class="card-footer text-muted">
                    Postado em  : {{$noticias->created_at}}
                </div>
            </div>
           @endforeach
    </body>

</html>
