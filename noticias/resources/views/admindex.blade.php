<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adm Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <main role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3" id="usuario"></h1> 
                <p>Este é o PROJETO CRUD de noticias</p>
                <p><a class="btn btn-danger" href="/" role="button">Sair &raquo;</a></p>
                
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <form method="GET">
                    <div class="col-md-6">
                        <h2>Cadastrar Noticia</h2>
                        <p>Aqui é aonde Você pode Publicar uma notica </p>
                        <p><a class="btn btn-primary btn-lg" href="/inicio" role="button">Cadastrar Noticia &raquo;</a></p>
                    </div>
                    <div class="col-md-6">
                        <h2>Gerenciar Noticias</h2>
                        <p>Aqui é onde Você pode Visualizar, Deletar e Editar  as Noticias</p>
                        <p><a class="btn btn-primary btn-lg" href="/ver-noticia/{id}" role="button">Ir Para Gerenciamento &raquo;</a></p>
                    </div>
                </form>
            </div>

            <hr>
    </main>

    <footer class="container">
        <p class="alert alert-success">&copy;   Desenvolvido por Antonio arieiro</p>
    </footer>

    <script>
            const name = localStorage.getItem('user')
            var element = document.getElementById("usuario");
            element.innerHTML = `Bem vindo ${name}`;
    </script>
</body>

</html>