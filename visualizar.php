<?php
    $listar = null;
    $directorio = opendir("../curso/");
    while ($elemento = readdir($directorio)) {
        if ($elemento != '.' && $elemento != '..') {
            if (is_dir("../curso/" . $elemento)) {
                $listar .= "<li><a href='../curso/$elemento' target='_blanck'>$elemento/</li>";
            } else {
                $listar .= "<li><a href='../curso/$elemento' target='_blanck'>$elemento</li>";
            }
        }
    }
    echo "<h3>Listado de archivos y carpetas del directorio curso/</h3>";
    echo "<p>$listar</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
    <a href="index.php" class="btn btn-secondary">Regresar</a>
</body>
</html>