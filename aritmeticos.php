<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe aritmeticos</title>
</head>

<body>
    <?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];


    $oper = $_POST['operacion'];

    switch ($oper) {
        case '+':
            echo $valor1 + $valor2;
            break;

        case '-':
            echo $valor1 - $valor2;
            break;

        case '*':
            echo $valor1 * $valor2;
            break;

        case '/':
            if ($valor2 == 0) {
                echo "No se puede dividir entre 0";
            } else {
                echo  $valor1 / $valor2;
            }
            break;
        default:
            # code...
            break;
    }



    ?>
</body>

</html>