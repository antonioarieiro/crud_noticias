<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/like.css') ?>" type="text/css">
        <script type="text/javascript" src="<?php echo asset('js/script.js') ?>"></script>
    </head>
    <body class="text-center">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="fadeIn first">
                    <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQG1q7u1M5lSBw/company-logo_200_200/0/1595600464177?e=2159024400&v=beta&t=wwmtwCqohO4aTR0giRrnntqyrFptb-oju2Pc-kiEEvM" id="icon" alt="Icone da Empresa" />
                </div>
                <form action="/adm" method="GET">
                    <input id="name" type="text" class="fadeIn second" name="login" placeholder="login" required="required" />
                    <input type="text" id="sobrenome" class="fadeIn third" name="sobrenome" placeholder="sobrenome" required="required" />
                    <input type="submit" class="fadeIn fourth" value="Log In" onclick="getName()">
                </form>
                <div id="formFooter">
                    <a class="underlineHover" href="#">Cadastre-se</a>
                </div>
            </div>
        </div>
    </body>
</html>