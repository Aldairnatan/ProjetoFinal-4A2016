<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login - Fórum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <form action="<?=  action('UserpersonController@login')?>">
            <center>
                <h1>Fórum de testes do time "Os Naelso"</h1>
                Username: <input type="text" id="user"/>
                <br/>
                Senha: <input type="password" id="pass"/>
                <br/>
                <input type="submit" value="Entrar"/>
                <br/>
                Primeira visita? Novo por aqui? <a href="<?= url('UserpersonController/register') ?>">Inscreva-se</a>
            </center>
        </form>
    </body>
</html>
