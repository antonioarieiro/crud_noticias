<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <style>
    body{
        background-color: #ccffcc;
        margin: auto;
    }
    .news{
        margin:80px auto;
        display: flex;
        flex-direction: column;
        text-align: center;
        width: 500px;
    }

    .news label{
        padding: 10px;
    }

    .news input {
        margin:10px;
    }

    .BTN {
        width: 110%;
        margin: auto;
    }

    .BTN button {
        text-align: center;
        margin: 10px;
        width: 80px;
        background-color: #ccff33;
        border-radius: 5px;
    }

    </style>
</head>
<body>
    <div class="news">
        <h1>Cadastrar NOVA NOTICIA</h1>
    </div>
    <section>
        <form class="news" action="/cad-new" method="POST">
            @csrf
            <label>Titulo:
                <input  
                    type="text"
                    name="titulo"
                />
            </label>
            <label>Descrição:
                <input 
                    type="text"
                    name="descricao"
                />
            </label>
            <label>Autor:
                <input  
                    type="text"
                    name="autor"
                />
            </label>
            <div class="BTN">
                <button>Cadastrar</button>
            </div>
        </form>
    </section>
</body>
</html>