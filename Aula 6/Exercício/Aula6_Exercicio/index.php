<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>TV</h1>
        <pre>
            <?php
                require_once 'Controle.php';
                $c = new Controle();
                $c->onOff();
                $c->onOff();
                $c->volMais();
                $c->mute();
                //$c->volMais();
                $c->chMenos();
                $c->chMais();
                $c->menu();
                $c->netflix();
                
                $c->netflix();
                $c->voltar();
                $c->chMenos();
                
                var_dump($c);
                
                
            ?>
        </pre>
    </body>
</html>
