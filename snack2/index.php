<?php
/*
Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

 if ($nameLength = strlen($name) > 3) {
  echo "name is longer than 3 char" . '<br>'; 
 }
 else{
  echo "name is shorter or equal than 3 char" . '<br>';
 };
 if ($mailValid = filter_var($mail, FILTER_VALIDATE_EMAIL)){
  echo "mail entered correctly" . '<br>';
 }
 else{
  echo "invalid mail" . '<br>';
 };

 echo "<pre>";
 var_dump($name);
 "</pre>";
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <form action="" method="GET">
    <input type="text" name="name">
    <input type="text" name="mail">
    <input type="text" name="age">
    <button type="submit">INVIA</button>
  </form>
</body>
</html>