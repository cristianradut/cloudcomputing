<?php
        
require "vendor/autoload.php";

use Calc\Calculator;
use Calc\Operation\Addition;
use Calc\Operation\Substraction;
use Calc\Operation\Multiplication;
use Calc\Operation\Division;

$calc = new Calculator();
?>
<!DOCTYPE HTML>

<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator simplu</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        
         <script src="calculator.js"></script> 
    
        <style>
            .btn-calc { width: 40pt; height: 40pt;}
            .btn-calc-f { width: 40pt; height: 40pt;}
            .rez-calc { width: 158pt; height: 40pt; font-size: 20pt; text-align: right;}
        </style>
    </head>
    
    <body>
        <div class="container">
            <form action="index.php" method="post">
            <h2>Calculator JavaScript/jQuery</h2>
            <input id="rez" class="rez-calc" type="text" disabled>
            <br>
            <div class="btn-group">
                <button id="btn-1" type="button" class="btn btn-default btn-calc">1</button>
                <button id="btn-2" type="button" class="btn btn-default btn-calc">2</button>
                <button id="btn-3"type="button" class="btn btn-default btn-calc">3</button>
                <button id="btn-plus" type="button" class="btn btn-primary btn-calc-f">+</button>
            </div>
            <br>
            <div class="btn-group">
                <button id="btn-4" type="button" class="btn btn-default btn-calc">4</button>
                <button id="btn-5" type="button" class="btn btn-default btn-calc">5</button>
                <button id="btn-6" type="button" class="btn btn-default btn-calc">6</button>
                <button id="btn-minus" type="button" class="btn btn-primary btn-calc-f">-</button>
            </div>
            <br>
            <div class="btn-group">
                <button id="btn-7" type="button" class="btn btn-default btn-calc">7</button>
                <button id="btn-8" type="button" class="btn btn-default btn-calc">8</button>
                <button id="btn-9" type="button" class="btn btn-default btn-calc">9</button>
                <button id="btn-multiply" type="button" class="btn btn-primary btn-calc-f">x</button>
            </div>
            <br>
            <div class="btn-group">
                <button id="btn-sterge" type="button" class="btn btn-danger btn-calc-f">C</button>
                <button id="btn-0"type="button" class="btn btn-default btn-calc">0</button>
                <button id="btn-equal"type="button" class="btn btn-success btn-calc-f">=</button>
                <button id="btn-divide" type="button" class="btn btn-primary btn-calc-f">/</button>
            </div> 
            <div class="btn-group">
                <button id="btn-sterge" type="button" class="btn btn-danger btn-calc-f">C</button>
                <button id="btn-0"type="button" class="btn btn-default btn-calc">0</button>
                <button id="btn-equal"type="button" class="btn btn-success btn-calc-f">=</button>
                <button id="btn-divide" type="button" class="btn btn-primary btn-calc-f">/</button>
            </div>
            </form>
        </div>
        
        <div class="container">
            <h2>Exemple de calcule simple cu PHP</h2>
            <?php
                $calc->setOperands(array(4,2))->setOperation(new Addition);
                echo '<p>Adunare: 4+2=';
                echo $calc->process().'</p>'; // 6

                $calc->setOperands(array(4,2))->setOperation(new Substraction);
                echo '<p>Scadere: 4-2=';
                echo $calc->process().'</p>'; // 2

                $calc->setOperands(array(4,2))->setOperation(new Multiplication);
                echo '<p>Inmultire: 4*2=';
                echo $calc->process().'</p>'; // 8

                $calc->setOperands(array(8,2))->setOperation(new Division);
                echo '<p>Impartire: 8/2=';
                echo $calc->process().'</p>'; // 4
            ?>
        </div>
        
    </body>
    
</html>
