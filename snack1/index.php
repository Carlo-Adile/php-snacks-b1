<?php
/* 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
 */

 $matches = [
  [
    "homeTeam" => "Olimpia Milano",
    "visitingTeam" => "Cantù",
    "homeScore" => 55,
    "visitingScore" => 60
  ],
  [
    "homeTeam" => "Palermo",
    "visitingTeam" => "Milan",
    "homeScore" => 40,
    "visitingScore" => 25
  ]
 ];

 foreach ($matches as $match) {
  echo $match['homeTeam'] . ' - ' . $match['visitingTeam'] . ' | ' . $match['homeScore'] . '-' . $match['visitingScore'] . '<br>';
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Snacks</title>
</head>
<body style="padding: 1rem;">
  
</body>
</html>