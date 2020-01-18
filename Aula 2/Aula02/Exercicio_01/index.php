<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - Exercício 01</title>
    </head>
    <body>
        <?php
            require_once 'Celular.php';
            
            //Celular 1
            $c1 = new Celular;
            $c1->cor = 'Dourado';
            $c1->tamanho_tela = 5;
            $c1->camera_mp = 8;
            
            print_r($c1);
            echo '<br/>';
            $c1->ligar();
            $c1->colocar_capa();
            $c1->foto();
            print_r($c1);
            echo '<br/>';
            
            $c1->desligar();
            $c1->tirar_capa();
            $c1->foto();
            print_r($c1);
            echo '<br/>';
            echo '<br/>';
            
            //Celular 2
            $c2 = new Celular();
            $c2->cor = 'Preto';
            $c2->tamanho_tela = 6.2;
            $c2->camera_mp = 12;
            
            print_r($c2);
            echo '<br/>';
            $c2->ligar();
            $c2->colocar_capa();
            $c2->foto();
            print_r($c2);
            echo '<br/>';
            
            $c2->desligar();
            $c2->tirar_capa();
            $c2->foto();
            print_r($c2);
            echo '<br/>';
        ?>
    </body>
</html>
