<?php
$host = "localhost";
$user = "root"; 
$password = ""; 
$db = "utenti"; 


$connessione = new mysqli($host, $user, $password, $db);

if ($connessione->connect_error) {
   echo "Connessione fallita: " . $connessione->connect_error;
   exit;
}
?>
