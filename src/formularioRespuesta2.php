<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="img/png" href="img/favicon.png"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Madrid Galaxy F.C.</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <h3>Tus datos:</h3>

    <?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);

    function is_valido($fichero)
    {
        $extValidas = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES[$fichero]["name"]);
        $extension = end($temp);
        $tipo = $_FILES[$fichero]["type"];
        $maxTamano = 1000000;
        $tiposValidos = array("image/jpeg", "image/jpg", "image/pjpeg", "image/x-png", "image/x-png", "image/png");
        echo "<p>Extensión válida " . in_array($extension, $extValidas) . "</p>";
        echo "<p>Tipo válido " . in_array($tipo, $tiposValidos) . "</p>";
        echo "<p>Tamaño " . $_FILES[$fichero]["size"] . "</p>";
        echo "<p>Tamaño valido " . ($_FILES[$fichero]["size"] < $maxTamano) . "</p>";
        return (in_array($extension, $extValidas) && in_array($tipo, $tiposValidos) && ($_FILES[$fichero]["size"] < $maxTamano));
    }

    function muestraFichero($fichero){
        echo "<p>Subido: " . $_FILES[$fichero]["name"] . "</p>";
        echo "<p>Tipo: " . $_FILES[$fichero]["type"] . "</p>";
        echo "<p>Tamaño: " . $_FILES[$fichero]["size"] . "</p>";
        echo "<p>Fichero temporal: " . $_FILES[$fichero]["tmp_name"] . "</p>";
    }

    function mueveFichero($origen, $destino){
        move_uploaded_file($origen, $destino);
        echo "Almacendo en" . $destino;
    }

    function existe_directorio ($destino) {
        return file_exists($destino) && is_dir($destino);
    }

    echo "<div>";
    echo "<h3>Fichero Subido</h3>";
    $f = "foto";
    $d = "/home/u610141361/tmp/upload/";
    if(!is_valido($f)){
        echo "<p>Fichero inválido</p>";
    } elseif ($_FILES[$f]["error"] > 0){
        echo "<p>Error: " . $_FILES[$fichero]["error"] . "</p>";
    } else{
        muestraFichero($f);
        $fichero_movido = $d . $_FILES[$f]["name"];
        if (!existe_directorio($d)) {
            echo "<p> Error: no existe el directorio destino $d </p>";
        } elseif (file_exists(($fichero_movido))){
            echo "<p>" . $fichero_movido . "ya existe.</p>";
        } else{
            mueveFichero($_FILES[$f]["tmp_name"], $fichero_movido);
        }
    }
    echo "</div>";
    ?>

</div>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>