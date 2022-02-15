<?php

$calendario = [
    "partita01" => [
        "casa" => "Atalanta",
        "ospite" => "Juventus",
        "risultartoCasa" => 1,
        "risultatoOspite" => 1,
    ],
    "partita02" => [
        "casa" => "Empoli",
        "ospite" => "Cagliari",
        "risultartoCasa" => 1,
        "risultatoOspite" => 1,
    ],
    "partita03" => [
        "casa" => "Sassuolo",
        "ospite" => "Roma",
        "risultartoCasa" => 2,
        "risultatoOspite" => 2,
    ],
    "partita04" => [
        "casa" => "Genoa",
        "ospite" => "Salernitana",
        "risultartoCasa" => 1,
        "risultatoOspite" => 1,
    ],
    "partita05" => [
        "casa" => "Napoli",
        "ospite" => "Inter",
        "risultartoCasa" => 1,
        "risultatoOspite" => 1,
    ],


];

$risultatiPartite = $calendario["partita01"]["casa"] . " " . $calendario["partita01"]["ospite"];

var_dump($risultatoPartite)






?>