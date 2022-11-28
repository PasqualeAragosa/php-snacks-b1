<?php

// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

// Olimpia Milano - Cantù | 55-60

$partite = [
    [
        "casa" => "Lakers",
        "ospite" => "Miami",
        "puntiCasa" => 56,
        "puntiOspite" => 71
    ],
    [
        "casa" => "Boston",
        "ospite" => "Chicago",
        "puntiCasa" => 87,
        "puntiOspite" => 43
    ],
    [
        "casa" => "New York",
        "ospite" => "Orlando",
        "puntiCasa" => 62,
        "puntiOspite" => 78
    ],
];

foreach ($partite as $partita) {
    echo $partita['casa'] . ' - ' . $partita['ospite'] . ' | ' . $partita['puntiCasa'] . '-' . $partita['puntiOspite'] . '<br>';
}

// $partite = [
//     'Lakers - Miami / 56-71',
//     'Boston - Chicago / 87-43',
//     'New Yorl - Orlando / 62-78'
// ];

// foreach ($partite as $partita) {

//     echo $partita . '<br>';
// };
