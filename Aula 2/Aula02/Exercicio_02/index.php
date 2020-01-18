<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - Exercício 02</title>
    </head>
    <body>
        <?php
            require_once 'Estudar.php';
            //Estudar 1
            $e1 = new Estudar;
            $e1->duracao = 2;
            $e1->materia = 'CTE';
            $e1->qer = 14;
            
            print_r($e1);
            $e1->comecar();
            $e1->abrirlivro();
            
            print_r($e1);
            $e1->parar();
            print_r($e1);
            
            //Estudar 2
            echo '<br/>';
            $e2 = new Estudar;
            $e2->duracao = 5;
            $e2->materia = 'Matemática 1';
            $e2->qer = 20;
            
            print_r($e2);
            $e2->comecar();
            $e2->abrirlivro();
            
            print_r($e2);
            $e2->parar();
            print_r($e2);
        ?>
    </body>
</html>
