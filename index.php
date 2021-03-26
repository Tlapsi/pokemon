<?php include "listaPokemon.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Busca tu pokemon</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
    <body>
        <form action="elegirP.php" method="post">
            <h1>Ingresa tu pokemon</h1>
            <label >Busca: </label> 
                 <select name = "nombre">
                    <?php for($i = 0; $i < count($arrayP); $i++): ?>
                    <option value = "<?php echo $arrayP[$i]; ?>"><?php echo $arrayP[$i]; ?> </option>
                    <?php endfor; ?>
                </select>        
            <input type="submit"value="Vamos!">            
        </form>
        <br>
        <form action ="login/login.php" method="post">
                    <input type="submit" id="btnL" name="Login" value="Inicia Sesión"/>
        </form>
        <form action ="login/register.php" method="post">
                    <input type="submit" id="btnR" name="Register" value="Crea tu cuenta"/>
        </form>
        </br>
    </body>
</html>