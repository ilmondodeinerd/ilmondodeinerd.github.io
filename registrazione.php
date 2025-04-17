<?php
require_once ("config.php") ;
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql ="INSERT INTO utenti (username, email, password) VALUES ('$username','$email', '$password')";
if ($connessione->query($sql) === TRUE) {
    echo "Registrazione effettuata con successo";
    header("location: login.html");
    } else {
        echo "Errore durante la registrazione dell'utente $sql. " .$connessione->error;
    }     
?>
