<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleinicio.css">
    <title>Primer Practica</title>
</head>
<body>

<div class="navegation-bar">
                <div class="logo-php">
                    <p> <a href="index.php">PHP</a></p>
                </div>

            <ul>
                <li><a href= "Operaciones.php"  >Ejercicio I</a></li>
                <li><a href="nombre.php">Ejercicio II</a></li>
                <li><a href="conversor.php">Ejercicio III</a></li>
                <li><a href="datos.php">Ejercicio IV</a></li>
                    
                
            </ul>
        </div>
<?php  

#variables
$x = 144; 
$y = 999;

$suma = $x + $y;
$resta = $y - $x;
$multiplicacion = $x * $y;
  $division = $y / $x;

?>

<h1> Operaciones Aritmeticas </h1>
<div class="operaciones">
<?php  
    echo "La suma total es igual : " . $suma . "<br>";
    echo "La resta total es igual : " . $resta . "<br>" ;
    echo "La multiplicacion total es igual : " . $multiplicacion . "<br>" ;
    echo "La division total es igual : " . $division . "<br>" ;
         
 ?>


</div>
    







</body>
</html>