<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
<div id="header">
        <ul class="nav">
            <li><a href="">inicio</a>
                <ul>
                    <li><a href="">submenu1</a></li>
                    <li><a href="form.php">Formulario</a></li>
                    <li><a href="visualizar.php">Ver Carpetas</a></li>
                    <li><a href="">contactos</a></li>
                </ul>
            </li>
            <li><a href="">servicios</a>
                <ul>
                    <li><a href="">submenu2</a></li>
                    <li><a href="">servicios</a></li>
                    <li><a href="">acerca de </a></li>
                    <li><a href="">contactos</a></li>
                </ul>
            </li>
            <li><a href="">acerca de </a>
                <ul>
                    <li><a href="">submenu3</a></li>
                    <li><a href="">servicios</a></li>
                    <li><a href="">acerca de </a></li>
                    <li><a href="">contactos</a></li>
                </ul>
            </li>
            <li><a href="">contactos</a>
                <ul>
                    <li><a href=""> submenu4</a></li>
                    <li><a href="">servicios</a></li>
                    <li><a href="">acerca de </a></li>
                    <li><a href="">contactos</a></li>
                </ul>
            </li>
        </ul>
   </div>
   <div class="text-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="submit" value="Commits Creates" name="submit" class="btn btn-primary">
            <input type="submit" value="ADD" name="add" class="btn btn-primary">
            <input type="submit" value="PULL" name="pull" class="btn btn-primary">
            <input type="submit" value="PUSH" name="push" class="btn btn-primary">
            <br>
            <br>
            <?php

                $commit = $_POST['submit'];
                $add = $_POST['add'];
                $pull = $_POST['pull'];
                $push = $_POST['push'];

                if ($commit) {
                    $commit = shell_exec("git log");
                    echo "<pre>$commit</pre>";
                }
                if ($add) {
                    $add = shell_exec("git add *");
                    echo "Se agrego con exito, Crear commit.";
                }
                if ($push) {
                    $push = shell_exec('git push origin master');
                    echo "<pre>$push</pre>";
                }
                if ($pull) {
                    $pull = shell_exec('git pull origin master');
                    echo "<pre>$pull</pre>";
                }
            ?>
            <a href="leer.php">LEER</a>
       </form>
   </div>
    <article class="articulo">
        <div class="cont">
            CONTENEDOR
        </div>
    </article>
</body>
</html>