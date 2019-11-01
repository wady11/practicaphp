<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primer Practica</title>
    <link rel="stylesheet" href="css/styleinicio.css">
</head>
<body>  

<header>
        <div class="navegation-bar">
                <div class="logo-php">
                    <p> <a href="index.php">PHP</a></p>
                </div>

            <ul>
                <li><a href="Operaciones.php" >Ejercicio I</a></li>
                <li><a href="nombre.php" >Ejercicio II</a></li>
                <li><a href="conversor.php">Ejercicio III</a></li>
                <li><a href="datos.php">Ejercicio IV</a></li>
                    
                
            </ul>
        </div>
    </header>

<h1>Nombre completo</h1>

<div class="datos-container">
    <?php
    # variables

    $nombre_completo = 'Wady Antonio Nicudemos Peña';


    echo $nombre_completo;


?>

</div>






</body>
</html>