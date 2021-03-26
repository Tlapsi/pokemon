<?php
include ("conexion.php");

if(isset ($_POST['user']) && !empty($_POST['user']) &&
isset ($_POST['pass']) && !empty($_POST['pass']) &&
isset ($_POST['pass2']) && !empty($_POST['pass2']) &&
$_POST ['pass'] == $_POST['pass2'])
{
    $con = mysql_connect($host, $usuario, $pw)
     or die ("problema");

    mysql_select_db($db,$con) 
    or die (error);

    mysql_query ("INSERT INTO users (username,pass) VALUES ('$_POST[user]', '$_POST[pass]')",$con);
    echo "usuario agregado";

    echo "Usuario: ".$_POST['user']."<br>";
    echo "Contraseña: ".$_POST['pass']."<br>";
}
else{
    echo"verifica";
}
?>