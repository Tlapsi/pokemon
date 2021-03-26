<?php
$buscar = true;
$pokemon = 1;
$arrayP = array();

while ($buscar && $pokemon <= 2){
    $api = file_get_contents("https://pokeapi.co/api/v2/pokemon/".$pokemon);

    if($api != ""){

        $json = json_decode($api, true);
        array_push($arrayP, $json['name']);
    }
    else{
    }
    $pokemon++;
}

function llenado($arrayP){
    foreach($arrayP as $imprimir){
        $html .= "<option value=".$imprimir."</option>";
    return $html;
    }
}
?>
