<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

define('RECEPTOR', 'MGALAXY');
define('RECEPTOR_ADD', '4b3javi@gmail.com');
define('EMAIL_SUBJECT', 'Petición');

//Recuperar valores

$errors = false;
//Validacion valores

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $senderEmail = $_POST['email'];
    $senderName = $_POST['nombre'];
    $position = $_POST['posicion'];
    $message = $_POST['info'];
    $subject = EMAIL_SUBJECT . ': ' . $position;
    if(!isset($senderEmail)){
        $errorEmail= "Debe escribir una dirección de correo";
    }
    else{
        $senderEmail = filter_var($senderEmail, FILTER_SANITIZE_EMAIL);
        if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
            $errorEmail = "La dirección de correo es incorrecta";
        }

    }
    if(!isset($senderName)){
        $errorName= "Debe escribir su nombre";
    }
    else{
        $senderName = filter_var($senderName, FILTER_SANITIZE_STRING);
        if ($senderName == ""){
            $errorName = "Debe escribir su nombre";
        }
    }
    if(!isset($message)){
        $errorMessage= "Debe escribir su carrera deportiva";
    }
    else{
        $message = filter_var($message, FILTER_SANITIZE_STRING);
        if ($message == ""){
            $errorMessage = "Debe escribir su carrera deportiva";
        }
    }
    if(!isset($position)){
        $errorPosition= "Debe elegir una posición";
    }
    else{
        $position = filter_var($position, FILTER_SANITIZE_STRING);
        if ($position == "Elegir"){
            $errorPosition = "Debe elegir una posición";
        }
    }

//Si existen todos los valores, mando el correo
    $success = false;
    if (!isset($errorEmail) && !isset($errorName) && !isset($errorMessage) && !isset($errorPosition)) {
        $receptor = RECEPTOR . ' <' . RECEPTOR_ADD . ' >';
        $headers = 'From: ' . $senderName . ' <' . $senderEmail . ' >';
        $success = mail($receptor, $subject, $message, $headers);
    }
}


?>

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
    <table class="table">
        <tbody class="table-body">
        <tr>
            <th scope="row">Nombre:</th>
            <td><?php echo "$senderName"; ?></td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td><?php echo "$senderEmail"; ?></td>
        </tr>
        <tr>
            <th scope="row">Posición</th>
            <td><?php echo "$position"; ?></td>
        </tr>
        <tr>
            <th scope="row">Mensaje</th>
            <td><?php echo "$message"; ?></td>
        </tr>
        </tbody>
    </table>
    <?php
    if ($success):
        echo "<div class= 'panel panel-success'>";
        echo "<p align='center'>Tú petición ha sido enviada a " . RECEPTOR . "(<" . RECEPTOR_ADD . ">)</p>";
        echo "<p align='center'>Pronto recibirás una respuesta </p>";
        echo "</div>";
    else:
        echo "<div class= 'panel panel-danger'>";
        echo "<p align='center'>Lo sentimos, ha habido un problema al enviar su petición</p>";
    endif;

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