<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Recibe valores de comparacion</title>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Clases de programacion web
					</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="aritmetico.php">Operadores aritmeticos</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
						Search
					</button>
                </form>
            </div>
        </div>
    </nav> -->
    <?php require_once "menu.php" ?>
    <br>
</head>

<body>
    <?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];


    $oper = $_POST['operacion'];

    switch ($oper) {
        case '==':
            $nombre_op = "Igual";
            //$op =  $valor1 + $valor2;
            if ($valor1 == $valor2) {
                $op = "Los valores son iguales";
            } else {
                $op = "Los valores son diferentes";
            }
            break;

        case '!=':
            $nombre_op = "Diferente";
            //$op =  $valor1 - $valor2;
            if ($valor1 != $valor2) {
                $op = "Los valores son diferentes";
            } else {
                $op = "Los valores son iguales";
            }
            break;

        case '>':
            $nombre_op = "Mayor que";
            //$op = $valor1 * $valor2;
            if ($valor1 > $valor2) {
                $op = "El valor 1 es mayor";
            } else {
                $op = "el valor 2 es mayor";
            }
            break;

        case '<':
            $nombre_op = "Menor que";
            //$op = $valor1 * $valor2;
            if ($valor1 < $valor2) {
                $op = "El valor 1 es menor";
            } else {
                $op = "el valor 2 es menor";
            }
            break;
        case '>=':
            $nombre_op = "Mayor que";
            //$op = $valor1 * $valor2;
            if ($valor1 >= $valor2) {
                $op = "El valor 1 es mayor o ambos son iguales ";
            } else {
                $op = "El valor 2 es mayor ";
            }
            break;
        case '<=':
            $nombre_op = "Menor que";
            //$op = $valor1 * $valor2;
            if ($valor1 <= $valor2) {
                $op = "El valor 1 es menor o ambos son iguales";
            } else {
                $op = "El valor 2 es menor";
            }
            break;
        default:
            # code...
            break;
    }

    ?>

    <div class="container-fluid">
        El valor 1 enviado es: <?php echo $valor1 ?> <br>
        El valor 2 enviado es: <?php echo $valor2 ?> <br>
        <table class="table table-bordered" border="1">
            <tbody>
                <tr>
                    <th>Operacion</th>
                    <th>Ejemplos</th>
                </tr>
                <tr>
                    <td><?php echo $nombre_op ?></td>
                    <td><?php echo $op ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>