<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen Bloque 1</title>
</head>
<body>
    <?php
        include 'commun.inc.php'; 
        $nombre = 'Raul';
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        echo '<p>Hola '.$nombre.'.</p>';
        echo '<p>Bienvenido a '.MI_SITIO.'.</p>';
        echo '<p>Su nombre tiene '.(strlen($nombre)).' letras.</p>';
        if (in_array(strtolower($nombre[0]), $vocales)){
            echo '<p>Su nombre empieza por una vocal.</p>';
        }else{
            echo '<p>Su nombre empieza por una consonante.</p>';
        }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Autores</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($autores as $autor): ?>
                <?php 
                    echo '<tr><td>'.$autor.'</td></tr>';
                ?>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>