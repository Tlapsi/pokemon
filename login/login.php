<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
    <body>
        <div id="frm">
            <form action ="process.php" method="post">
                <p>
                    <label>Usuario:</label>
                    <input type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Contraseña:</label>
                    <input type="password" id="pass" name="pass"/>
                </p>
                <p>
                    <input type="submit" id="btnL" name="Login"/>
                </p>
            </form>
    </body>
</html>