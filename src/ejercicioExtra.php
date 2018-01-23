<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="javier.conde.diaz">
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
<div class="container">
    <h1>Ejemplos Extra PHP</h1>
    <h2>Ciudades de España</h2>
    <?php
    $ciudades = array('Madrid', 'Barcelona', 'Valencia')
    ?>
    <p>He visitado <?php echo $ciudades[1] ?> </p>
    <p>También he estado en <?php echo $ciudades[0] ?></p>
    <p>Pero todavía no he ido a <?= $ciudades[2] ?> </p>

    <h2>Capitales</h2>
    <?php
    $capitales = array('España' => "Madrid", 'Italia' => 'Roma', "Francia" => 'París');
    foreach ($capitales as $pais => $capital) {
        echo "<p> la capital de $pais es $capital </p>";
    }
    ?>
    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Tabla ascii</th>
        </tr>
        <tr>
            <th>Letra</th>
            <th>Código Ascii</th>
        </tr>
        </thead>
        <tbody>

        <?php
        for ($i = 35; $i <= 50; $i++)
            echo "<tr> <td>" . chr($i) . "</td> <td>$i</td></tr>"
        ?>

        </tbody>
    </table>
    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Tabla ascii</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Letra
            </td>

            <?php
            for ($i = 35; $i <= 50; $i++)
                echo "<td>" . chr($i) . "</td>"
            ?>
        </tr>
        <tr>
            <td>
                Código Ascii
            </td>

            <?php
            for ($i = 35; $i <= 50; $i++)
                echo "<td>" . $i . "</td>"
            ?>
        </tr>
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