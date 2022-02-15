<?php

$calendario = [
    [
        "casa" => "Atalanta",
        "ospite" => "Juventus",
        "risultatoCasa" => 1,
        "risultatoOspite" => 1,
    ],
    [
        "casa" => "Empoli",
        "ospite" => "Cagliari",
        "risultatoCasa" => 1,
        "risultatoOspite" => 1,
    ],
    [
        "casa" => "Sassuolo",
        "ospite" => "Roma",
        "risultatoCasa" => 2,
        "risultatoOspite" => 2,
    ],
    [
        "casa" => "Genoa",
        "ospite" => "Salernitana",
        "risultatoCasa" => 1,
        "risultatoOspite" => 1,
    ],
    [
        "casa" => "Napoli",
        "ospite" => "Inter",
        "risultatoCasa" => 1,
        "risultatoOspite" => 1,
    ],


];

$risultatiPartite = $calendario["partita01"]["casa"] . " " . $calendario["partita01"]["ospite"] . " | " . $calendario["partita01"]["risultatoCasa"] . "-" . $calendario["partita01"]["risultatoOspite"];




var_dump($risultatiPartite)






?>