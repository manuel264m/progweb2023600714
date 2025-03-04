<html>
    <head>
        <title>Numeros Fibonacci</title>
    </head>
    <body>
        <?php
        $num1 = 0;
        $num2 = 1;
        $limit = 2048;

        echo"$num1, $num2";

        for ($i = 0; $i < $limit - 2; $i++) {
            $nuevo = bcadd($num1, $num2); //bcadd lo utilice por que investigue y este es adecuado para manejar grandes numeros
            // ya que si solo usaba una suma normal me salian cosas extrañas
            echo ", $nuevo";

            $num1 = $num2;
            $num2 = $nuevo;
        }

        ?>
        </body>
        </html>  