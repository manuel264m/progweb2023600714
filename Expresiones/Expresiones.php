<html>
    <head>
        <title>Expresiones</title>
    </head>
    <body>

    <img src="ex.a.png" width="300"><br><br>
        <?php
        $x = 2;
        $y = 4;
        //inciso a
        $resultado1 = ((1/$x) + (($x + $y) / 3) + (2 * ($x/$y)));
        echo "Resultado: ". $resultado1 . "<br><br>";
        
        ?>
 
        <img src="ex.b.png" width="300">

        <?php
        //inciso b
        $x = 3;
        $resultado2 = ((1/2 * $x)+((3+$x)/2)*(2*$x **2))/((2+3)*$x);
        echo "Resultado: ".$resultado2 . "<br><br>";

        ?>

        <img src="ex.c.png" width="300">

        <?php
        //inciso c
        $x = 2;
        $resultado3 = (sqrt((2 * $x)**2 + 3 **2)/5 ) + sqrt ($x **2);

        echo "Resultado:". $resultado3 . "<br><br>";
        ?>

        <img src="ex.d.png" width="300">

        <?php
        $x = 2;
        $resultado4 = ((1/2 + 1/4 + 1/8)*pow($x ,1/3))/((sqrt($x)/2) + (3 *($x **2)/4));
        echo "Resultado:". $resultado4 . "<br><br>";
        ?>

        <img src="ex.e.png" width="300">

        <?php
        $x = 4;
        $resultado5 = sqrt((($x ** 2)/ 2 + 1 / sqrt($x)) / (3 + (1/2) * ($x ** 3)));
        echo "Resultado: " . $resultado5;
        ?>
    </body>
</html>



