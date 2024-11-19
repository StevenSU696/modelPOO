<?php


//Récupére 10 films de la base de données.
$host = 'localhost';
$dbname = 'allodonkeycine';
$user = 'root';
$password = '';
return $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $password);
