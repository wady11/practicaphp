<?php
if(isset($_POST['submit'])){
    $arreglo = array(

        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'edad' => $_POST['edad']
    );
   
    

   
    


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleinicio.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Conversor de moneda</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  
<div class="navegation-bar">
                <div class="logo-php">
                    <p> <a href="index.php">PHP</a></p>
                </div>

            <ul>
                <li><a href="Operaciones.php">Ejercicio I</a></li>
                <li><a href="nombre.php" >Ejercicio II</a></li>
                <li><a href="conversor.php">Ejercicio III</a></li>
                <li><a href="datos.php">Ejercicio IV</a></li>
                    
                
            </ul>
        </div>

 <main>
    <div class="container">
    <header>
            <div class="img-container">
                 <i class="fa fa-user"></i>
            </div>
     </header>


    <form action="" class="form" method="post">
        <div class="convertor-container">
            <div class="first-value">
             
                <input type="text" name="nombre"  placeholder="Ingrese su nombre">
            </div>
            <div class="first-value">
                
                <input type="text" name="apellido"  placeholder="Ingrese su Apellido">
            </div>
            <div class="first-value">
                
                <input type="number" min="1" name="edad"  placeholder="Ingrese su Edad">
            </div>
            
               
                
                <div class="convert-button">
                    <input type="submit" value="Enviar" id="convertir" name="submit">
                </div>            
        </div>
    </form><!--final del form-->

    <div class="datos-array">
        <?php

            
                
            echo "Nombre : ". $arreglo['nombre'] . "<br/> ";
            echo "Apellido : " . $arreglo['apellido'] . "<br/>";
            echo "Edad : ".$arreglo['edad']."<br/>" ;


                echo "la version de php es : " . phpversion();
            
        
    
        ?>

    </div>

    </div><!--Fin del contenedor-->      
    
  
 
    
 </main>   

 

</body>
</html>