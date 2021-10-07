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
    </head>
    <title>Nova Noticia</title>
    <body>
        <form class="form-horizontal" action="/editar-noticia/{{$noticias->id}}" method="POST">
            @csrf
            <fieldset>
                <div class="panel panel-primary">
                    <div class="panel-heading">Registro de Noticias</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">Titulo</label>
                            <div class="col-md-8">
                                <input 
                                    name="titulo" 
                                    class="form-control input-md"  
                                    type="text"
                                    value={{ $noticias->titulo }}
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Autor</label>
                        <div class="col-md-2">
                            <input 
                                name="autor" 
                                class="form-control input-md" 
                                required="required" 
                                type="text"
                                value={{ $noticias->autor }}
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="obs">Descricao</label>
                        <div class="col-md-8">
                            <input 
                                name="descricao" 
                                class="form-control"
                                value={{ $noticias->descricao}}  
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Editar</button>
                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Limpar Campos</button>
                        </div>
                    </div>
                </div>
                </div>
            </fieldset>
        </form>
    </body>

</html>