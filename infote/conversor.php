  



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
                <li><a href= "Operaciones.php" >Ejercicio I</a></li>
                <li><a href="nombre.php">Ejercicio II</a></li>
                <li><a href="conversor.php">Ejercicio III</a></li>
                <li><a href="datos.php">Ejercicio IV</a></li>
                    
                
            </ul>
        </div>
 <main>
    <div class="container">

        <header>
            <div class="img-container">
                 <img src="img/32841.png" alt="moneda de cambio">
            </div>
        </header>



    <form action="paginaresultado.php" method="post">
        <div class="convertor-container">
            <div class="first-value">
                <label><p>Peso Dominicano (a)</p> </label>
                <input type="text" name="pesodominicano" required pattern="[0-9]+" placeholder="Ingrese el valor">
            </div>
            
                <div class="arrow">
                <i class="fa fa-arrow-circle-down"></i>
                </div>

                <div class="second-value">
                    <select name="moneda">
                        <option value='usa'>Dollar</option>
                        <option value='euro'>Euro</option>
                        <option value='libra'>Libra</option>
                        <option value='monedachina'>Moneda China</option>
                    </select>
                </div>
                
                <div class="convert-button">
                    <input type="submit" value="Calcular" id="convertir" name="calcular">
                </div>            
        </div>
    </form><!--final del form-->
    </div><!--Fin del contenedor-->      
    
  
 
    
 </main>   

 

</body>
</html>