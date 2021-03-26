<?php
$pokemon = strtolower($_POST["nombre"]);

$api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
curl_setopt($api, CURLOPT_RETURNTRANSFER, true); //Sirve para evitar imprimir el JSON
$response = curl_exec($api);
curl_close($api);

$json = json_decode($response);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Busca tu pokemon</title>
    </head>
    <body>
        <section class="flex-contenido">
            <div class="in-flex">
            <h1>Pokemon:<?php echo strtoupper($json->name)?></h1>
            <div>
            <p><b>Habilidades: </b><?php foreach($json->abilities as $poderes => $habilidad){
                if($poderes != count($json->abilities)-1){ // checamos el ultimo elemento
                    echo $habilidad->ability->name. ', ';
                }
                else{
                    echo $habilidad->ability->name. '<br>';
                }
            }
             ?></p></div>
             </div>
             </section>
             <section class="flex-contenido">
             <div class="in-flex">
             <p><b>Movimientos: </b><div><?php foreach($json->moves as $movimiento => $rMove){
                 if($movimiento != count($json->moves)-1){
                     echo $rMove->move->name. ', ';
                 }
                 else{
                    echo $rMove->move->name. '<br>';
                 }
             }
            ?></p></div>
            </div>            
            </section>
            <section class="flex-contenido">
            <div class ="in-flex">
             <p><b>Tipo: </b><div><?php foreach($json->types as $tipo => $rTipo){
                 if($tipo != count($json->types)-1){
                     echo $rTipo->type->name. ', ';
                 }
                 else{
                    echo $rTipo->type->name. '<br>';
                 }
             }
            ?></p></div>
            </div>
            </section>
            <section class="flex-contenido">
            <div class ="in-flex">
            <p><b>Fotos:</b></p>
            <div>
            <?php echo '<img src= "'.$json->sprites->back_default. '"width = "250">';
                    echo '<img src= "'.$json->sprites->front_default. '"width = "250">';
                ?>
                </div>
            </div>
    </body>
</html>