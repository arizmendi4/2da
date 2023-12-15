<html>
<head>
    <title>Tabla condicional 2</title>
</head>
<body>
    <h1>Tabla condicional 2</h1>

    <?php
    /* Crearemos una tabla de valores de seno, coseno y tangente de 0 a 2 en incrementos de 0.01.
    Los valores negativos se mostrarán en rojo, y los valores positivos en azul.
    Cada fila tendrá un color diferente. */
    
    function muestra($valor, $renglon) {
        if ($renglon % 2) {
            $fondo = "#eeeeee";
        } else {
            $fondo = "#dddddd";
        }

        if ($valor < 0.5) {
            $color = "red";
        } else {
            $color = "blue";
        }

        echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
    }

    echo "<table border='1'>\n";

    for ($x = 0; $x <= 2; $x += 0.01) {
        echo "<tr>";
        muestra($x, $renglon);
        muestra(sin($x), $renglon);
        muestra(cos($x), $renglon);
        muestra(tan($x), $renglon);
        echo "</tr>\n";

        $renglon++;
    }

    echo "</table>\n";
    ?>
</body>
</html>
