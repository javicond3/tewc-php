<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="Javier">
    <title>Page Title</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h2>Respuesta</h2>
<p>Gracias por participar</p>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Ejemplos $_REQUEST</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($_REQUEST as $clave => $valor) {
            echo "<tr> <th> Clave " . $clave . " y Valor " . $valor . "</tr> </th>";
        }


        echo "<tr> <th> Nombre: $_REQUEST[nombre] </tr> </th>";
        echo "<tr> <th> Nombre: " . $_REQUEST['nombre'] . "</tr> </th>";
        echo "<tr> <th> Edad: $_REQUEST[edad] </tr> </th>";

        ?>
        </tbody>
    </table>
</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>