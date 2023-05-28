<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1" placeholder="Primer número" required>
        <input type="number" name="num2" placeholder="Segundo número" required>
        <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        if ($operacion == "suma") {
            $resultado = $num1 + $num2;
        } elseif ($operacion == "resta") {
            $resultado = $num1 - $num2;
        } elseif ($operacion == "multiplicacion") {
            $resultado = $num1 * $num2;
        } elseif ($operacion == "division") {
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                echo "<h2>Error: No se puede dividir por cero.</h2>";
            }
        }

        if ($operacion != "division") {
            echo "<h2>Resultado: $resultado</h2>";
        }
    }
    ?>
</body>
</html>

